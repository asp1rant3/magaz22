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


Route::get('/', 'PagesController@index')->name('log');
Route::get('/faq', 'PagesController@faq');
Route::get('/terms-and-conditions', 'PagesController@terms_and_conditions');
Route::get('/privacy-policy', 'PagesController@privacy_policy');
Route::get('/privacy-policy-cookies', 'PagesController@privacy_policy_cookies');
Route::get('/to_contact_us', 'PagesController@to_contact_us');
Route::get('/accessibility', 'PagesController@accessibility');
Route::get('/products/{id}', 'PagesController@products');
Route::get('/search', 'PagesController@search');
Route::get('/saved-lists', 'PagesController@saved_lists');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/my-account', 'PagesController@my_account');
	Route::post('/saved-lists_save', 'FunctionController@saved_lists_save');
	Route::delete('/saved-lists_del', 'FunctionController@saved_lists_del');
	Route::get('/my-details', 'PagesController@my_details');
	Route::get('/contact-preferences', 'PagesController@contact_preferences');
	Route::get('/change-password', 'PagesController@change_password');
	Route::get('/orders', 'PagesController@orders');
	Route::post('/buy_add', 'FunctionController@buy_add');
	Route::delete('/del_buy', 'FunctionController@del_buy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
