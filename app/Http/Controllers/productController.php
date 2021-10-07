<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\cart;
use App\Models\order;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    //
    function index ()
    {
        // if (session()->has('user')) {
            // return "Welcome to product page";
            $data = product::all();
            return view('product', ['products'=>$data]);
        // }
        // return "First Login Then Access this site";
        // return view('login');
    }

    // product details page
    function detail($id)
    {
        $data = product::find($id);
        return view('details', ['products'=>$data]);
    }

    // search product
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

    // cart item add to cart table
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

    // show cart item list number
    static function show_CartItem ()
    {
        $user_CartItem = Session::get('user')['id'];
        return cart::where('user_id', $user_CartItem)->count();
    }

    // show cart list item
    function cartlist ()
    {
        if (session()->has('user')) {
        $user_CartItem = Session::get('user')['id'];

        $data = DB::table('carts')
        ->join('products', 'carts.product_id', 'products.id')
        ->select('products.*', 'carts.id as carts_id')
        ->where('carts.user_id', $user_CartItem)
        ->get();

        return view('/cartlist', ['products'=>$data]);
        } else {
            return redirect('/login');
        }
    }

    // remove from cart list
    function remove_cartItem ($id)
    {
        cart::destroy($id);
        return redirect('cartlist');
    }

    // ordernow page
    function ordernow ()
    {
        if (session()->has('user')) {
            $userId = Session::get('user')['id'];
            $total = DB::table('carts')
            ->join('products', 'carts.product_id', 'products.id')
            ->where('carts.user_id', $userId)
            ->sum('products.price');
            return view('/ordernow', ['total'=>$total]);
        } else {
            return redirect('/login');
        }
    }

    // buynow page
    function buynow (Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart = cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$req->address;
            $order->status='pending';
            $order->payment_method=$req->payment;
            $order->payment_status='pending';
            $order->save();
        }
        cart::where('user_id', $userId)->delete();
        return redirect('/');
    }

    // myorder page
    function myorder ()
    {
        if (session()->has('user')) {
            $userId = Session::get('user')['id'];
            $orders = DB::table('orders')
            ->join('products', 'orders.product_id', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();
            return view('/myorder', ['orders'=>$orders]);
        } else {
            return redirect('/login');
        }
    }
}
