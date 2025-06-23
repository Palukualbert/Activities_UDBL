<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',function(){
    return view('index');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/students-life',function(){
    return view('students-life');
});

Route::get('/info',function(){
    return view('info');
});

Route::get('/evenement',function(){
    return view('evenement');
});


