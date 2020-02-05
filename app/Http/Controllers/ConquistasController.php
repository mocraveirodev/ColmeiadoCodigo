<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ConquistasController extends Controller
{
    public function viewConquistas(Request $request) {
        $user = Auth::user();
        return view('conquistas',["user"=>$user]);
    }
}
