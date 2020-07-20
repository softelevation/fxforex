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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

 Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });


Route::get('/page', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () { 
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/users_listing', 'AdminController@users_listing')->name('users_listing');
    Route::any('/users_listing/{id}', 'AdminController@edit_users_listing');
    Route::get('/view_listing/{id}', 'AdminController@view_users_listing');
    Route::get('/listactive/{id}/{type}', 'AdminController@listactive');
    Route::any('/trading', 'AdminController@trading'); 
    Route::any('/changePass', 'AdminController@changePass'); 

    Route::any('/add_agent', 'AgentController@add_agent'); 
    Route::any('/add_agent/{id}', 'AgentController@edit_agent'); 
    Route::any('/agent_listing', 'AgentController@agent_listing'); 
    Route::any('/agent_full_info/{id}', 'AgentController@agent_full_info'); 
    Route::get('/listactiveAgent/{id}/{type}', 'AgentController@listactiveAgent');

    
});

Route::get('/', 'HomeController@admin_dashboard')->name('home');

Route::group(['middleware' => 'users'], function () {
    // Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@admin_dashboard')->name('admin_dashboard');
    Route::get('/myaccount', 'HomeController@myaccount')->name('myaccount');  
});

//Route::get('/', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'AdminController@dashboard')->name('home');


