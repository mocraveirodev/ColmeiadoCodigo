<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'IndexController@viewHome')->name('home');
Route::get('/home', 'IndexController@viewHome')->name('home');
Route::get('/#trilhas', 'IndexController@viewHome')->name('cursos');
Route::get('/colmeia', 'AlunoController@viewColmeia')->name('colmeia');
Route::get('/chat', "ChatController@viewChat")->name('chat');
Route::get('/conquistas', "ConquistasController@viewConquistas")->name('conquistas');
Route::get('/notificacao', "AlunoController@viewConquistas");
Route::get('/config', "AlunoController@viewConquistas");
Route::get('/ajuda', "AlunoController@viewConquistas");
Route::get('/html','CursoController@viewHtml');
Route::get('/css','CursoController@viewCss');
Route::get('/logica','CursoController@viewLogica');
Route::get('/js','CursoController@viewJs');
Route::get('/volta','CursoController@viewVolta');
Route::get('/quiz','CursoController@viewQuiz');
Route::get('/concluido','CursoController@viewConcluido');
Route::get('/variavel','CursoController@viewVariavel');
Route::get('/quiz_variavel','CursoController@viewQuizVariavel');
Route::get('/variavel_int','CursoController@viewVariavelInt');
Route::get('/quiz_variavel_int','CursoController@viewQuizVariavelInt');
Route::get('/variavel_float','CursoController@viewVariavelFloat');
Route::get('/quiz_variavel_float','CursoController@viewQuizVariavelFloat');
Route::get('/variavel_string','CursoController@viewVariavelString');
Route::get('/quiz_variavel_string','CursoController@viewQuizVariavelString');

Auth::routes();
