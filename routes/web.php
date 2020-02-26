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
Route::get('/home', 'HomeController@getHome')->name('home');
// Pantalla principal
Route::get('/', 'HomeController@getHome');

/*
// Login usuari
Route::get('/login', function () {

    return view('auth.login');
});


// Logout usuari
Route::get('/logout', function () {

    return view('home');
});
*/




Route::group(['middleware' => 'auth'], function(){

	// Llistat rellotges
	Route::get('/catalog', 'catalog\CatalogController@getIndex');


	// Vista detall rellotge
	Route::get('/catalog/show/{id}', 'catalog\CatalogController@getShow');


	// Afegir rellotge
	Route::get('/catalog/create', 'catalog\CatalogController@getCreate');


	// Modificar rellotge
	Route::get('/catalog/edit/{id}', 'catalog\CatalogController@getEdit');
});