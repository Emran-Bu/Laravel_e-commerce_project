<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function login(Request $req){
        $user = User::where(['email'=>$req->lemail])->first();
        if(!$user || !Hash::check($req->lpassword, $user->password)){
            return "Username or password is not matched";
        } else {
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }

    function registration (Request $req)
    {
        $user = new User;
        $user->name=$req->lname;
        $user->email=$req->lemail;
        $user->password=Hash::make($req->lpassword);
        $user->save();
        return redirect('/login');
    }
}
