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

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route Front///////////////////////////////////////////////////////////////////
Route::group(['namespace' => 'Front'], function (){

  Route::get('/', 'HomeController@home')->name('home');

  Route::get('ajout', 'AjoutController@ajoutForm')->name('ajout-view');
  Route::post('ajout', 'AjoutController@action')->name('ajout-action');

  Route::get('contact', 'ContactController@contactForm')->name('contact-view');
  Route::post('contact', 'ContactController@action')->name('contact-action');


});
Auth::routes();


//Route Admin////////////////////////////////////////////////////////////////////
Route::group(['namespace' => 'Admin'], function (){

  Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

  Route::get('message', 'AdminController@messageView')->name('message');

  Route::get('lieux', 'AdminLieuxController@lieux')->name('lieu');

  Route::get('admin/user/user', 'AdminUserController@User')->name('user');
});
