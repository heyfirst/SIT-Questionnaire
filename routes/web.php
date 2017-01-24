<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'QuestionnaireController@index');
Route::get('/{qid}', 'QuestionnaireController@each');
Route::post('/create', 'QuestionnaireController@create');

Route::get('/{qid}/{question_id}', 'QuestionController@question');

Route::get('/{qid}/response', 'ResponseController@resp');
