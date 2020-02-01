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

    public function viewChat(Request $request) {
        $user = Auth::user();
        return view('chat',["user"=>$user]);
    }

    public function viewConquistas(Request $request) {
        $user = Auth::user();
        return view('conquistas',["user"=>$user]);
    }

    public function viewHtml(Request $request) {
        $user = Auth::user();
        return view('cursos.html',["user"=>$user]);
    }

    public function viewCss(Request $request) {
        $user = Auth::user();
        return view('cursos.css',["user"=>$user]);
    }

    public function viewJs(Request $request) {
        $user = Auth::user();
        return view('cursos.js',["user"=>$user]);
    }
}
