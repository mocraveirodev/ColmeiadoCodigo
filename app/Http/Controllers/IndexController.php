<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class IndexController extends Controller
{
    public function viewHome(){
        $user = Auth::user();

        // dd($user->name);

        return view('index',["user"=>$user]);
    }
}
