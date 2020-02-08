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
    public function getCursos(){
        $cursos = Curso::all();

        return $cursos;
    }

    public function getConteudos(){
        $conteudos = Conteudo::all();

        return $conteudos;
    }

    public function getQuiz(){
        $quiz = Quiz::all();

        return $quiz;
    }
    public function viewHtml(Request $request) {
        $user = Auth::user();
        $progresso = Progresso::find($user->id);
        $conteudo = Conteudo::where('id','=',$progresso->prog_html)->get();
        
        if($conteudo->isEmpty()){
            $conteudo = Conteudo::where('curso_id', 1)->first();
        }

        return view('layouts.conteudo',["user"=>$user, "conteudo"=>$conteudo, "progresso"=>$progresso]);
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
