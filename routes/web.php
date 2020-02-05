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

// Pantalla principal
Route::get('/', function () {

    return view('home');
    //return "Aquí caldria retornar la vista INDEX";
});


// Login usuari
Route::get('/login', function () {

    return view('auth.login');
    //return "Aquí caldria retornar la vista LOGIN";
});


// Logout usuari
Route::get('/logout', function () {

    return view('home');
    //return "Aquí caldria retornar la vista LOGOUT";
});


// Llistat rellotges
Route::get('/catalog', function () {

    return view('catalog.index');
    //return "Aquí caldria retornar la vista CATALOG";
});


// Vista detall rellotge
Route::get('/catalog/show/{id}', function ($id) {

    return view('catalog.show', array('id'=>$id));
    //return "Aquí caldria retornar la vista SHOW amb id" . $id;
});


// Afegir rellotge
Route::get('/catalog/create', function () {

    return view('catalog.create');
    //return "Aquí caldria retornar la vista CREATE";
});


// Modificar rellotge
Route::get('/catalog/edit/{id}', function ($id) {

    return view('catalog.edit', array('id'=>$id));
    //return "Aquí caldria retornar la vista EDIT";
});
