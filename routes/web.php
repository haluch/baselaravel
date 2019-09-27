<?php
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', function () {
    if (Auth::user()){
        return view('blank');
    }else{
       return redirect('/login');
    }
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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
