<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use App\Models\order;
use App\Models\User;
use App\Models\Shoppingcart;
use App\Models\address;
use Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $result['data'] = product::all();
        $result['data'] = product::paginate(4);
        return view('producttable', $result);
    }
    public function test()
    {
        $result['data'] = product::all();
        $result['data'] = product::paginate(4);
        return view('test', $result);
    }
    public function addproduct()
    {
        return view('addproduct');
    }
    public function createproduct(Request $request)
    {
        $product = new product();
        $product->name = $request->post('name');
        $product->price = $request->post('price');
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $image_name = time() . '.' . $ext;
            $image->move('storage/media/', $image_name);
            $product->image = $image_name;
        }
        $product->description = $request->post('discription');
        echo $product;
        $product->save();
        return redirect('/admin/producttable');
    }
    public function deleteproduct($id)
    {
        product::destroy($id);
        return redirect('/admin/producttable');
    }
    public function updateproduct($id)
    {
        $result['data'] = product::find($id);
        return View('editproduct', $result);
    }
    public function editproduct(Request $request)
    {
        $data = product::find($request->id);
        $data->name = $request->name;
        $data->price = $request->price;
        $data->description = $request->discription;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $image_name = time() . '.' . $ext;
            $image->move('storage/media/', $image_name);
            $data->image = $image_name;
        }
        $data->save();
        $request->session()->flash('message', 'update product successfully');
        return redirect('/admin/producttable');
    }
    public function users()
    {
        $user['data'] = User::all();
        $user['data'] = User::paginate(4);
        return view('users', $user);
    }
    public function edituser(Request $request)
    {
        echo "hello";
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->role_id = $request->role;
        $data->save();
        $request->session()->flash('message', 'update user successfully');
        return redirect('/userslist');
    }
    public function deleteuser($id)
    {
        User::destroy($id);
        return redirect('/userslist');
    }
    public function updateuser($id)
    {
        $result['data'] = User::find($id);
        return View('edituser', $result);
    }
    public function order()
    {
       $userid = Auth::user()->id;
       $result['address'] = DB::table('addresses')->where("addresses.id",$userid)->get();
        $result['products'] = DB::table('shoppingcarts')->where('shoppingcarts.user_id', $userid)->join('products', 'shoppingcarts.product_id', 'products.id')
            ->select('products.*', 'shoppingcarts.quantity')->get();
            
         $id = Auth::user()->id;
         
        $result['user'] = auth()->user()->where('id',$id)->get();
         

        return View('order', $result);
    }
    public function orderplace(Request $request)
    {
        $userId = Auth::user()->id;
        // $allcart = Shoppingcart::where('user_id', $userId)->get();
// $result['product'] = DB::table('shoppingcarts')->join('products', 'shoppingcarts.product_id', 'products.id')
//     ->where('shoppingcarts.user_id', $userId)->sum('products.price');
        $address = new address;
        $address->user_id = $userId;
        $address->billing_address1 = $request->post('address1');
        $address->billing_address2 = $request->post('address2');
        $address->billing_country = $request->post('country');
        $address->billing_state = $request->post('state');
        $address->billing_zip = $request->post('zip');
        $address->billing_phone = $request->post('phone');
        $address->shipping_address1 = $request->post('txtaddress1_billing');
        $address->shipping_address2 = $request->post('txtaddress2_billing');
        $address->shipping_country = $request->post('txtcountry_billing');
        $address->shipping_state = $request->post('txtstate_billing');
        $address->shipping_zip = $request->post('txtzip_billing');
        $address->shipping_phone = $request->post('txtphone_billing');
        $address->save();
        $userid = Auth::user()->id;
        $products = DB::table('shoppingcarts')->where('shoppingcarts.user_id', $userid)->join('products', 'shoppingcarts.product_id', 'products.id')
            ->select('products.*', 'shoppingcarts.quantity')->get();
        $order = new order;
        $order->product_details = json_encode($products);
        $order->user_id = $userId;
        $order->amount = session()->get('total');
        $order->payment_method = $request->post('payment');
        $order->order_status = "pending";
        $order->save();
        session()->flash('success', 'Order Created Successfully !!!');
        return redirect('/success');
    }
    //details page
    public function detail($id)
    {
          if (auth()->user()) {
        $result['product'] = product::find($id);
        $result['total'] = shoppingcart::whereUserId(Auth::user()->id)
        ->where('status', '!=', shoppingcart::STATUS['success'])
        ->count();
        return view('livewire.detail', $result);
        }  else {
            return redirect(route('login'));
        }
    }
    
    public function detaillist()
    {
        return view(detail);
    }
    public function orders()
    {
        $order['data'] = DB::table('orders')->orderBy('orders.id', 'DESC')->select('orders.*');
        $order['data'] = $order["data"]->paginate(4);
        return view('orderslist', $order);
    }
    public function updateorder($id)
    {
        $result['data'] = Order::find($id);
        return View('editorder', $result);
    }
    public function editorder(Request $request)
    {
        $data = Order::find($request->id);
        $data->user_id = $request->user_id;
        $data->product_details = $request->product_details;
        $data->address1 = $request->address1;
        $data->address2 = $request->address2;
        $data->country = $request->country;
        $data->state = $request->state;
        $data->zip = $request->zip;
        $data->phone = $request->phone;
        $data->amount = $request->amount;
        $data->payment_method = $request->payment_method;
        $data->order_status = $request->order_status;
        $data->save();
        $request->session()->flash('message', 'update order successfully');
        return redirect('/orderslist');
    }
    public static function getuserbyname($id)
    {
        $username = DB::table('users')->where('users.id', $id)->select('users.name')->get();
        if (isset($username[0])) {
            $name = $username[0]->name;
        } else {
            $name = "No User";
        }
        return $name;
    }
    
      public static function getuserbyemail($id)
    {
        $useremail = DB::table('users')->where('users.id', $id)->select('users.email')->get();
        if (isset($useremail[0])) {
            $email = $useremail[0]->email;
        } else {
            $email = "No User";
        }
        return $email;
    }
    
    public function addToCart(Request $request)
    {  

  
        if (auth()->user()) {
                
             $userid = Auth::user()->id;
             $quantity =  $request->qty;
             $product_id =  $request->product_id; 
            // add to cart
            $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $request->product_id,
            ];
            Shoppingcart::updateOrCreate($data);
            // $this->emit('updateCartCount');
            session()->put('addtocart', $data);
            if ($request->qty < 1) {
                $request->qty = 1;
            } elseif($request->product_id) {
                $cart =  Shoppingcart::where('shoppingcarts.product_id',$product_id)->firstOrFail();
                $cart->user_id = $userid;
                $cart->product_id = $product_id ;
                $cart->quantity = $quantity;
                $cart->save();
                return Redirect::back()->with(['detail', $request->product_id]);
            }
            session()->flash('success', 'Product added to the cart successfully');
        } else {
            // redirect to login page
            return redirect(route('login'));
        }
    }
    
    
    //sucess message
       public function success()
    {  
           $userid = Auth::user()->id;
           $result['products'] = DB::table('shoppingcarts')->where('shoppingcarts.user_id', $userid)->join('products', 'shoppingcarts.product_id', 'products.id')
            ->select('products.*', 'shoppingcarts.quantity')->get();

          return view('success',$result);
    }
    
    
    
    
}
