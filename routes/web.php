<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\OtakuController@index')->name('index');
Route::get('contact', 'App\Http\Controllers\OtakuController@contact')->name('contact');
Route::post('mail_send', 'App\Http\Controllers\OtakuController@mail_send')->name('mail_send');
Route::get('mail_comp', 'App\Http\Controllers\OtakuController@mail_comp')->name('mail_comp');

