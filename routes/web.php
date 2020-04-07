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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//produit
Route::get('/tab_produit', 'ProduitController@index')->name('tab_produit');
Route::get('/ajout_produit', 'ProduitController@create')->name('ajout_produit');
Route::post('/save_produit', 'ProduitController@store')->name('save_produit');
Route::get('/edit_produit/{id}', 'ProduitController@edit')->name('edit_produit');
Route::post('/update_produit/{id}', 'ProduitController@update')->name('update_produit');
Route::get('/delete_produit/{id}', 'ProduitController@destroy')->name('delete_produit');
