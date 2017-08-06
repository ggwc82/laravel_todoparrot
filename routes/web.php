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
Route::get('/', 'WelcomeController@index');

Route::resource('lists', 'ListsController');

// Route:Route::get('/', 'WelcomeController@index');:get('/', function () {
//     $items = [
//       'Pack luggage',
//       'Goto the beach'
//     ];
//
//     // dd($items);
//
//     \Log::debug($items);
//     \Debugbar::error('Something is definitely going wrong.');
//
//     return view('welcome');
// });
