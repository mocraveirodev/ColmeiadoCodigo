<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function viewHome(Request $request){
        return view('home');
    }
}
