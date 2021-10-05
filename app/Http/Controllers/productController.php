<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\cart;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Session;

class productController extends Controller
{
    //
    function index ()
    {
        if (session()->has('user')) {
            // return "Welcome to product page";
            $data = product::all();
            return view('product', ['products'=>$data]);
        }
        // return "First Login Then Access this site";
        return view('login');
    }

    function detail($id)
    {
        $data = product::find($id);
        return view('details', ['products'=>$data]);
    }

    function search (Request $req)
    {
        $data = product::where('name', 'LIKE' , '%' . $req->input('search') . '%')->get();
        if (count($data)) {
            // return response()->json($data);
            return view('search', ['products'=>$data]);
        } else {
            return response()->json(['result'=>'no reccord found']);
        }

    }

    function add_to_cart (Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('login');
        }
    }

    static function show_CartItem ()
    {
        $user_CartItem = Session::get('user')['id'];
        return cart::where('user_id', $user_CartItem)->count();
    }
}
