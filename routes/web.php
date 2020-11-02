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

//USER SIDE
Route::get('/', function () {
    return view('index');
});

Route::get('/event', 'EventController@listEvent'); 

Route::get('/kucing', function () {
    return view('kucing');
});

Route::get('/anjing', function () {
    return view('anjing');
});

Route::get('/ackucing', 'ItemController@catItemsUser');
Route::get('/acanjing', 'ItemController@dogItemsUser');
Route::get('/search_u', 'ItemController@userSearchResult');

//ADMIN SIDE

Route::get('/login', function () {
    return view('adm_login');
});
Route::post('/login', 'AdminLogin@login')->name('masuk');
Route::get('/admin', 'AdminLogin@adminHome');

//Event Admin
Route::get('/a_event', 'EventController@showEvent')->name('tampilkanEvent');
Route::get('/addevent', 'EventController@addEventView');
Route::post('/insert', 'EventController@addEvent')->name('tambahEvent');
Route::get('/{id}/deleteEv', 'EventController@deleteEvent');

Route::get('/adkucing', 'ItemController@catItems');
Route::get('/adanjing', 'ItemController@dogItems');
Route::get('/search', 'ItemController@searchResult');
Route::get('/{id}/deleteItem', 'ItemController@deleteItems');

Route::get('/additem', 'ItemController@addItemView');
Route::post('/insertitem', 'ItemController@addItem');

Route::get('/logout', 'AdminLogin@logout');