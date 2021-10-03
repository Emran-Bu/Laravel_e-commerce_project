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
}
