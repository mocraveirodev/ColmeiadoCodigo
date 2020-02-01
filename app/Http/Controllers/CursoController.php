<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CursoController extends Controller
{
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
