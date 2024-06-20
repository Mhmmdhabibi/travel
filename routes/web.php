<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function (){
    return view('index');




});

Route::get('/contact', function (){
    return view('contact');




});

Route::get('/properties', function (){
    return view('properties');




});

Route::get('/property-detail', function (){
    return view('property-detail');




});


Route::get('/login', function (){
    return view('login');




});


Route::get('/keranjang', function (){
    return view('keranjang');




});
Route::get('/jadwal', function (){
    return view('jadwal');




});

