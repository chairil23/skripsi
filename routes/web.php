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

// Auth::routes();

Route::get('/{any}', function(){
    return view('welcome');
})->where(['any' => '.*']);

// Route::get('/freelancer-dashboard', function () {
//     return view('freelancer.dashboard');
// });
// Route::resource('/freelance/products', 'FreelancerController');
// Route::post('freelance/products/search', 'FreelancerController@search');
// Route::resource('freelance/authfreelancer', 'AuthFreelancerController');
// Route::group(array('prefix'=>'api'),function(){
// 	Route::resource('freelance/products','FreelancerController');
// });
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
