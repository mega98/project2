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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/informatika', function (){
	return view('informatika');
});

Route::get('/agroindustri', function (){
	return view('agroindustri');
});

Route::get('/elektro', function (){
	return view('elektro');
});

Route::get('/sipil', function (){
	return view('sipil');
});

Route::get('/home', function (){
	return view('home');
});

Route::get('/blog', function(){
	return view('blog');
});

Route::get('/about', function(){
	return view('about');
});

Route::get('/contact', function(){
	return view('contact');
});

Route::get('/index', function(){
	return view('index');
});

Route::get('/login', function(){
	return view('login');
});

Route::get('/dashboard', function(){
	return view('dashboard');
});

Route::get('/produk', function(){
	return view('produk');
});

Route::get('/login-admin', function(){
	return view('login-admin');
});

Route::get('/register', function(){
	return view('register');
});

Route::get('/chat', function(){
	return view('chat');
});