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
Route::get('/chat', "AlunoController@viewChat")->name('chat');
Route::get('/conquistas', "AlunoController@viewConquistas")->name('conquistas');
Route::get('/notificacao', "AlunoController@viewConquistas");
Route::get('/config', "AlunoController@viewConquistas");
Route::get('/ajuda', "AlunoController@viewConquistas");
Route::get('/html','AlunoController@viewHtml');
Route::get('/css','AlunoController@viewCss');
Route::get('/js','AlunoController@viewJs');
Route::get('/variavel','CursoController@viewVariavel');
Route::get('/quiz_variavel','CursoController@viewQuizVariavel');
Route::get('/variavel_int','CursoController@viewVariavelInt');
Route::get('/quiz_variavel_int','CursoController@viewQuizVariavelInt');
Route::get('/variavel_float','CursoController@viewVariavelFloat');
Route::get('/quiz_variavel_float','CursoController@viewQuizVariavelFloat');
Route::get('/variavel_string','CursoController@viewVariavelString');
Route::get('/quiz_variavel_string','CursoController@viewQuizVariavelString');

Auth::routes();
