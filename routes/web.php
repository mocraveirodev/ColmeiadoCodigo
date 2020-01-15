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

Route::get('/', 'HomeController@viewHome');
Route::get('/home', 'HomeController@viewHome');
Route::get('/colmeia', 'AlunoController@viewColmeia');
Route::get('/chat', "AlunoController@viewChat");
Route::get('/conquistas', "AlunoController@viewConquistas");
Route::get('/notificacao', "AlunoController@viewConquistas");
Route::get('/config', "AlunoController@viewConquistas");
Route::get('/ajuda', "AlunoController@viewConquistas");
Route::get('/html','AlunoController@viewHtml');
Route::get('/css','AlunoController@viewCss');
Route::get('/js','AlunoController@viewJs');
