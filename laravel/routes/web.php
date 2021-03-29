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

/*Route::get('/', function () {
    return view('welcome');
});*/
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::post('/password/reset', 'ResController@traitement')->name('traitement_reset');
//Route::get('/modif', 'ResController@view')->name('modif');
//Route::post('/modif', 'ResController@modif')->name('Modif_password');
Route::get('/admin', 'AdminController@adm')->name('admin');
Route::post('/admin', 'AdminController@ajout')->name('Ajout_article');
Route::get('/cart', 'CartController@aff_cart')->name('cart');
Route::get('/produit', 'ProductController@aff')->name('page_produit');
Route::post('/produit', 'ProductController@stock')->name('page_produit');
Route::post('/home', 'ResController@modif')->name('Modif_password');