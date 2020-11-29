<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::prefix('auth')->group(function (){
    Route::post('register','UserController@register');
    Route::post('login','UserController@login');

});
Route::post('consult','UserController@consult');
Route::get('UserPanel','UserController@UserPanel')->name('UserPanel');

