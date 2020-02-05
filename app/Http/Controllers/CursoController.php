<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Curso;
use App\Conteudo;
use App\Quiz;
use App\Progresso;

class CursoController extends Controller
{
    public function viewHtml(Request $request) {
        $user = Auth::user();
        $conteudos = Conteudo::all();
        foreach($conteudos as $conteudo){
            
        }
        return view('cursos.html',["user"=>$user]);
    }

    public function viewCss(Request $request) {
        $user = Auth::user();
        return view('cursos.css',["user"=>$user]);
    }

    public function viewLogica(Request $request) {
        $user = Auth::user();
        return view('cursos.logica',["user"=>$user]);
    }

    public function viewJs(Request $request) {
        $user = Auth::user();
        return view('cursos.js',["user"=>$user]);
    }

    function recuperaCursos(){
        return Curso::all();
    }

    function viewVariavel(){
        $user = Auth::user();
        return view("cursos.variavel",["user"=>$user]);
    }
    function viewQuizVariavel(){
        $user = Auth::user();
        return view("cursos.quiz_variavel",["user"=>$user]);
    }
    function viewVariavelInt(){
        $user = Auth::user();
        return view("cursos.variavel_int",["user"=>$user]);
    }
    function viewQuizVariavelInt(){
        $user = Auth::user();
        return view("cursos.quiz_variavel_int",["user"=>$user]);
    }
    function viewVariavelFloat(){
        $user = Auth::user();
        return view("cursos.variavel_float",["user"=>$user]);
    }
    function viewQuizVariavelFloat(){
        $user = Auth::user();
        return view("cursos.quiz_variavel_float",["user"=>$user]);
    }
    function viewVariavelString(){
        $user = Auth::user();
        return view("cursos.variavel_string",["user"=>$user]);
    }
    function viewQuizVariavelString(){
        $user = Auth::user();
        return view("cursos.quiz_variavel_string",["user"=>$user]);
    }
    
}
