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

## URL
Route::get('/', function () {
    return view('welcome');
});
Route::get('/presentation', function () {
    return view('presentation');
});

## Route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/autre', function () {
    return view('autre');
})->name('autre');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin_home')->middleware('auth', 'role:Admin');
Route::get('/moderateur', 'ModerateurController@index')->name('moderateur_home')->middleware('auth', 'role:Moderateur');;
Route::get('/autres', 'AutresController@index')->name('autres_home')->middleware('auth', 'role:Autres');;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::ressources('users', 'UserController');
