<?php
Auth::routes();

Route::get('/', 'PageController@index');
Route::get('/impressum', 'PageController@imprint');
Route::get('/kontakt', 'ContactController@index');
Route::post('/kontakt', 'ContactController@submit');
