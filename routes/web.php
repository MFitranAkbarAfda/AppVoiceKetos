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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pendaftaran', 'PendaftaranController@index')->name('pendaftaran');
Route::get('/pendaftaran/create', 'PendaftaranController@create');
Route::post('/pendaftaran/store', 'PendaftaranController@store');
Route::get('/pendaftaran/edit/{id}', 'PendaftaranController@edit');
Route::post('/pendaftaran/update/{id}', 'PendaftaranController@update');
Route::get('/pendaftaran/hapus/{id}', 'PendaftaranController@destroy');
Route::get('/pendaftaran/detail/{id}', 'PendaftaranController@show');

// Candidate
Route::get('/candidate', 'CandidateController@index')->name('candidate');
Route::get('/candidate/create', 'CandidateController@create');
Route::post('/candidate/store', 'CandidateController@store');
Route::get('/candidate/edit/{id}', 'CandidateController@edit');
Route::post('/candidate/update/{id}', 'CandidateController@update');
Route::get('/candidate/hapus/{id}', 'CandidateController@destroy');
Route::get('/candidate/detail/{id}', 'CandidateController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
