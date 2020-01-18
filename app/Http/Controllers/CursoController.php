<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    function viewVariavel(){
        return view("cursos.variavel");
    }
    function viewQuizVariavel(){
        return view("cursos.quiz_variavel");
    }
    function viewVariavelInt(){
        return view("cursos.variavel_int");
    }
    function viewQuizVariavelInt(){
        return view("cursos.quiz_variavel_int");
    }
    function viewVariavelFloat(){
        return view("cursos.variavel_float");
    }
    function viewQuizVariavelFloat(){
        return view("cursos.quiz_variavel_float");
    }
    function viewVariavelString(){
        return view("cursos.variavel_string");
    }
    function viewQuizVariavelString(){
        return view("cursos.quiz_variavel_string");
    }
    
}
