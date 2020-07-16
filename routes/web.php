<?php

Route::get('/', function () {
    return view('welcome');
});

//Countries Controller
Route::get('/countries', 'CountriesController@showAllCountries');
Route::get('/countries/create', 'CountriesController@create');
Route::post('/countries/create', 'CountriesController@store');
Route::get('/countries/{id}', 'CountriesController@showCountryDetail');
//Normal Approach
Route::get('/countries/{id}/edit', 'CountriesController@edit');
//Route Model Binding
//Route::get('/countries/{country}/edit', 'CountriesController@edit');
Route::patch('/countries/{id}/edit', 'CountriesController@update');
Route::delete('/countries/{id}/delete', 'CountriesController@destroy');

//Person Controller
Route::get('/person', 'PersonController@index');
Route::get('/person/create', 'PersonController@create');
Route::post('/person/create', 'PersonController@store');
Route::get('person/{person}/edit', 'PersonController@edit');
Route::patch('person/{person}/edit', 'PersonController@update');
Route::delete('person/{person}/delete', 'PersonController@destroy');
