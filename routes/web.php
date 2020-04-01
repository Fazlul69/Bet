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
use App\User;
/**
 */

Route::get('/admin','HomeController@index');
Route::get('/','PagesController@index');
Route::resource('/tournaments','TournamentController')->except('create','show','edit');
Route::resource('/match','MatchController');
Route::resource('/bet','BetOptionController')->except('show','edit');

Route::post('/match/bets','MatchController@bets')->name('match.bets');
// Bet Option Details Start

Route::post('/bet/details','BetOptionDetailsController@store')->name('details.store');

// Bet Option Details End

Route::get('/role',function(){
	$user = User::find(1);
	dd($user->hasRole("Editor"));
});
// Tournament Routes start
	// Route::get('/tournaments')

// Tournament Routes end

// Bet setting's start

	

// Bet setting's end


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
