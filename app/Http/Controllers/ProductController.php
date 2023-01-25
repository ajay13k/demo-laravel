<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\order;
use App\Models\User;
use App\Models\address;
use App\Models\Shoppingcart;
use Redirect;
use Illuminate\Support\Facades\DB;
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
        $image = $request->file('image');
        $ext = $image->extension();
        $image_name = time() . '.' . $ext;
        $image->storeAs('/public/media', $image_name);
        $product->image = $image_name;
        $product->description = $request->post('discription');
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
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media', $image_name);
            $data->image = $image_name;
        }

        $data->save();
        $request->session()->flash('message', 'update product successfully');
        return redirect('/admin/producttable');
    }

    //oder controller

    public function order()
    {
        $userid = Auth::user()->id;
        $result['products'] = DB::table('shoppingcarts')->where('shoppingcarts.user_id', $userid)->join('products', 'shoppingcarts.product_id', 'products.id')
            ->select('products.*', 'shoppingcarts.quantity')->get();
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
       $products =  DB::table('shoppingcarts')->where('shoppingcarts.user_id', $userid)->join('products', 'shoppingcarts.product_id', 'products.id')
            ->select('products.*', 'shoppingcarts.quantity')->get();

            foreach ($products as $key=>$value){
            return $key;
            }


         die();

        $order = new order;

        $order->product_details = json_encode($products);


        $order->user_id = $userId;
        $order->amount = session()->get('total');
        $order->payment_method = $request->post('payment');
        $order->order_status = "pending";
        $order->save();
        session()->flash('success', 'Order Created Successfully !!!');
        Shoppingcart::where('user_id', $userId)->delete();
        return redirect('/');
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
        } else {
            // redirect to login page
            return redirect(route('login'));
        }

    }

    public function addToCart(Request $request)
    {
        if (auth()->user()) {
            $userid = Auth::user()->id;
            $quantity =  $request->qty;
            $product_id =  $request->product_id;
            $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $request->product_id,
            ];
            Shoppingcart::updateOrCreate($data);
            session()->put('addtocart', $data);
                $cart =  Shoppingcart::where('shoppingcarts.product_id',$product_id)->firstOrFail();
                $cart->user_id = $userid;
                $cart->quantity = $quantity;
                $cart->save();
                return Redirect::back()->with(['detail', $request->product_id]);
            session()->flash('success', 'Product added to the cart successfully');
        } else {
            // redirect to login page
            return redirect(route('login'));
        }
    }








}



