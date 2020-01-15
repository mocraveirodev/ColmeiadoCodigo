<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //
    public function viewColmeia(Request $request){
        return view('colmeia');
    }

    public function viewChat(Request $request) {
        return view('chat');
    }

    public function viewConquistas(Request $request) {
        return view('conquistas');
    }

    public function viewHtml(Request $request) {
        return view('cursos.html');
    }

    public function viewCss(Request $request) {
        return view('cursos.css');
    }

    public function viewJs(Request $request) {
        return view('cursos.js');
    }
}
