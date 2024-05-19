<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/YeoWorks', function(){
    return 'Welcome to YeoWorks';
});

Route::get('/YeoWorks', function(){
    return 'Welcome to YeoWorks';
});*/
/*
Route::get('/{name}', function($name){
   // echo $name;
    //return view('hello');
    return view('welcome',['name'=>$name]);
});
*/
/*Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});*/

Route::view('about', '/about');
Route::view('contact', '/contact');