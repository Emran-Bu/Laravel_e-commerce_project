<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    //
    function index ()
    {
        if (session()->has('user')) {
            return "Welcome to product page";
        }
        // return "First Login Then Access this site";
        $data = product::all();
        return view('product', ['products'=>$data]);
    }

    function detail($id)
    {
        $data = product::find($id);
        return view('details', ['products'=>$data]);
    }
}
