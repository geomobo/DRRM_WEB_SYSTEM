<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/signup', function(){
    return view('auth.signup');
});

