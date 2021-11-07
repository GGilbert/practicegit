<?php

use Illuminate\Support\Facades\Route;

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

//PRACTICE
Route::get('/practice/landing', 'PracticeController@landing')->name('practice.landing');
//Route::get('/practice', 'PracticeController@landing')->name('practice.landing');
//Route::get('/practice/landing', [PracticeController::class,'landing']);

//DB TEST
Route::get('/test', 'PracticeController@test')->name('practice.test');
Route::get('/test_db', 'PracticeController@test_db')->name('practice.test_db');
