<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AlunoController extends Controller
{
    //
    public function viewColmeia(Request $request){
        $user = Auth::user();
        return view('colmeia',["user"=>$user]);
    }
}
