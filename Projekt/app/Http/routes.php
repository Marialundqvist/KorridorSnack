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
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', array('as' => '../auth/login', 'uses' => 'Auth\AuthController@getLogout'));

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');




Route::get('/', function () {
    return view('../auth/register');
});

/*från registrera sidan till logga in sidan.*/
Route::get('../auth/register', function () {
    return view('../auth/login');
});


/*Logga in, hamna på förstasidan*/
Route::get('../auth/register', function () {
    return view('forstasida');
});

/*vara på förstasida*/
Route::get('forstasida', function () {
    return view('forstasida');
});



/*från registrera sidan till logga in sidan.*/
Route::get('../auth/login', function () {
    return view('../auth/register');
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




