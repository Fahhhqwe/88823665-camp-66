<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    function myfunction(Request $req){
            $data = $req->input('myinput');
            return view('myview', ['myinput' => $data]);
    }
}
