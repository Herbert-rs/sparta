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

// PENSAR EM ESTRUTURA DIVIDIDA PARA JOBS E ADMIN

// Criar um grupo /user e outro /jobs. A partir desses grupos as rotas serão identificadas a partir de um view composer que vai direcionar cada um a seu layout especifico.

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', ['uses' => 'VacancyController@list'])->name('vancancy.list');

Route::get('/user', function () {
    return view('user.index');
});
