<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\product;

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
}
