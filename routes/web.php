<?php

Route::get('/', function () {
    return view('blank');
});

Route::get('/register', function () {
    return view('login.register');
});

Route::get('/erro', function () {
    return view('errors.404');
});


Route::get('/profile', function () {
    return view('profile.index');
});
Route::get('/test', function () {
    return view('blank');
});

Route::get('events', 'EventController@index');
route::get('pdf','pdfController@pdfProduto');