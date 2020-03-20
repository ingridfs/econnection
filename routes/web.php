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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', function(){
    return view('index');
});

Route::get('/parceiros', function(){
    return view('parceiros');
});

Route::get('/quemsomos', function(){
    return view('quemSomos');
});

Route::get('/politica', function(){
    return view('politica');
});

Route::get('/contato', function(){
    return view('contato');
});

Route::get('/faq', function(){
    return view('faq');
});

Route::get('/carrinho', function(){
    return view('comprar');
});

Route::get('/contato', function(){
    return view('contato');
});

Route::get('/comprar', function(){
    return view('comprar');
});

Route::get('/checkout', function(){
    return view('checkout');
});

Route::get('/minha-conta', function(){
    return view('minhaConta');
});

Route::get('/minha-conta?type=pedidos', function(){
    return view('minhaConta');
});

