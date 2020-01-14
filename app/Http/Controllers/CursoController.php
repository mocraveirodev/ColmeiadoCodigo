<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    function viewHtml(){
        return view("cursos.html");
    }
}
