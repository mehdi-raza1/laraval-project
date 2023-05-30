<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function Demo(){
        $Name = "Abc";
        return view('about',['Name'=>$Name]);
    }
}
