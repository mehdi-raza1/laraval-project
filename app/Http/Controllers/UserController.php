<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function Demo(){
        $Name = "Abc";
        return view('about',['Name'=>$Name]);
    }

    // Register

    function Register(Request $req){
        // dd($req);
        // $Name = $req->input('name');
        // $name = $req->name;
        // $email = $req->Email;
        // $password = $req->pasword;
        // return view('about',['Name'=>$Name,'Email'=>$email]);

        return view('about',['Data'=>$req]);
    }


    function Login(Request $req){
        echo $name = $req->name;
    }
}
