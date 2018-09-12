<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('home_admin', 'Home_AdminController');

Route::resource('teams', 'TeamsController', [
    'names' => [
        'index' => 'teams'
    ]
]);

Route::resource('players', 'PlayersController', [
    'names' => [
        'index' => 'players'
    ]
]);
Route::resource('matches', 'MatchesController', [
    'names' => [
        'index' => 'matches'
    ]
]);
Route::resource('bets', 'BetsController', [
    'names' => [
        'index' => 'bets'
    ]
]);

Route::resource('users', 'UsersController', [
    'names' => [
        'index' => 'users',
    ]

]);


