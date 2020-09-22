<?php

Route::name('user.')->prefix('user/')->group(function (){

    Route::get('/', ['uses' => 'UserController@index'])->name('index');
    Route::get('/vacancy', ['uses' => 'UserController@vacancy'])->name('vacancy');
    Route::get('/profile', ['uses' => 'UserController@profile'])->name('profile');

});