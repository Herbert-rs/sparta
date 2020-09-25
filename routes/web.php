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

Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/vacancies', ['uses' => 'VacancyController@list'])->name('vancancy.list');

Route::get('/jobs', ['uses' => 'VacancyController@show'])->name('jobs.description');

//Routes For Sign up
Route::get('/candidate/sign_up', ['uses' => 'CandidateController@new'])->name('candidate.sign_up');
Route::post('/candidate/sign_up', ['uses' => 'CandidateController@save']);

Route::get('/company/', ['uses' => 'CompanyController@new'])->name('company.sign_up');
Route::post('/company/', ['uses' => 'CompanyController@save']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', ['uses' => 'HomeController@index'])->name('home');

    Route::get('/user', ['uses' => 'UserController@index'])->name('user.index');

});
