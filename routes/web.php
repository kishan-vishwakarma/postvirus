<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/datatable' , function () {
    return view('datatable');
});

Route::get('/form' , function () {
    return view('form');
});

// Route::get('/login/{locale}', function ($locale) {
//     App::setLocale($locale);
//     return view('login');
// });


