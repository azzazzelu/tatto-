<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
    return view('home.home');
})->name('home');

Route::get('/promoCodes' , function(){
    return view('promoCodes.index');
})->name('promoCodes');

Route::get('/contacts' , function(){
    return view('contacts.index');
})->name('contacts');
