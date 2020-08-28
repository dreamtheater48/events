<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'EventController@index')->name('home');

Route::resource('events','EventController');
