<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    //
    function index (){
        if (session()->has('user')) {
            return "Welcome to product page";
        }
        return "First Login Then Access this site";
    }
}