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
        // dd($request['progresso']);
        $user = Auth::user();
        $progresso = Progresso::find($user->id);
        $prog_sessao = $request->session()->all();
        $total_cont = Conteudo::where('curso_id', 1)->count();

        if(isset ($prog_sessao['progresso'])){
            $prog_sessao['progresso']++;
            if($prog_sessao['progresso'] <= $total_cont){
                $progresso->prog_html = $prog_sessao['progresso'];
                $progresso->save();
            }else{
                return view('concluido',["user"=>$user, "titulo"=>"HTML"]);
            }
        }

        // dd($data['progresso']);
        $conteudo = Conteudo::where('id', $progresso->prog_html)->get();
        if($conteudo->isEmpty()){
            $conteudo = Conteudo::where('curso_id', 1)->first();
            $progresso->prog_html = $conteudo->id;
            $progresso->save();
        }
        // dd($conteudo);
        return view('layouts.conteudo',["user"=>$user, "conteudo"=>$conteudo, "progresso"=>$progresso]);
    }
    public function viewCss(Request $request) {
        $user = Auth::user();
        return view('cursos.css',["user"=>$user]);
    }

    public function viewConcluido(){
        $user = Auth::user();
        return view('concluido',["user"=>$user, "titulo"=>"HTML"]);
    }

    public function viewLogica(Request $request) {
        $user = Auth::user();
        return view('cursos.logica',["user"=>$user]);
    }

    public function viewJs(Request $request) {
        $user = Auth::user();
        return view('cursos.js',["user"=>$user]);
    }

    public function viewQuiz(Request $request) {
        $user = Auth::user();
        $progresso = Progresso::find($user->id);
        $quiz = Quiz::where('cont_id', $progresso->prog_html)->get();
        $request->session()->put('progresso', $quiz[0]->cont_id);
        return view('layouts.quiz',["user"=>$user, "quiz"=>$quiz]);
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
