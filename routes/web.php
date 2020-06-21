<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('about', 'AboutController');

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('home', 'HomeController@index');
Route::get('/logout', 'HomeController@logout');
Route::group(['middleware' => ['auth', 'cekrole:1']], function () {
    Route::resource('akses', 'AksesController');
    Route::get('/akses/{id}/edit', 'AksesController@edit');
    Route::resource('member', 'memberController');
});

Route::group(['middleware' => ['auth', 'cekrole:1,4']], function () {
    Route::resource('menu', 'MenuController');
    Route::resource('submenu', 'SubmenuController');
    Route::patch('/submenu/{submenu}', 'SubmenuController@update');
});

Route::group(['middleware' => ['auth', 'cekrole:1,2,3,4']], function () {
    Route::get('/home/{user}/ganti', 'HomeController@ganti');
    Route::post('/home/{user}', 'HomeController@robah');
    Route::resource('home', 'HomeController');
});

Route::group(['middleware' => ['auth', 'cekrole:1,3,4']], function () {
    Route::resource('post', 'PostController');
    Route::get('/post/{id}', 'PostController@update');
    Route::patch('/post/{id}/edit', 'PostController@edit');
    Route::delete('/post/{id}', 'PostController@destroy');
});

Route::get('/cari', 'SiteController@cari');

Route::get('/{slug}', [
    'uses' => 'SiteController@singlepost',
    'as' => 'site.single.post'
]);


Route::resource('/', 'SiteController');
