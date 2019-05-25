<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','admin\login@login'); 
Route::match(['get','post'],'/check','admin\login@check'); 
Route::get('/dashboard','admin\dashboard@dashboard');
