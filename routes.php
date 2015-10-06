<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('forstasida');
});


/*Logga in, logga ut*/
Route::get('welcome', function () {
    return view('login');
});

Route::get('loggaut', function () {
    return view('loggaut');
});



/* Forumsvalmöjligheterna nedan */
Route::get('senaste', function () {
    return view('senaste');
});

Route::get('popularaste', function () {
    return view('popularaste');
});

Route::get('laxhjalp', function () {
    return view('laxhjalp');
});

Route::get('hittaratt', function () {
    return view('hittaratt');
});

Route::get('event', function () {
    return view('event');
});

Route::get('ovrigt', function () {
    return view('ovrigt');
});

/* Länk under profilen, mina inlägg! */
Route::get('minainlagg', function () {
    return view('minainlagg');
});




Route::get('home', function () {
    return view('home');
});

