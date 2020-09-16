<?php

Route::name('vacancy.')->prefix('vacancy/')->group(function (){

    Route::get('/set/candidature/{vacancy_id}', ['as' => 'set.candidature', 'uses' => 'VacancyController@setCandidature']);

});