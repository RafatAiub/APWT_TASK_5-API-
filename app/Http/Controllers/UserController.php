<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\user;


class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = user::where(['email'=>$req->email])->first();
            // return $user->password;
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "User or Password is wrong";
            return redirect('/login');
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');

        //return User::where(['email'=>$req->email])->first;

        }

    }
}
