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

  Route::group(['namespace' => 'Ajout'], function (){

    Route::get('ajout', 'AjoutController@ajoutForm')->name('ajout-view');
    Route::post('ajout', 'AjoutController@action')->name('ajout-action');
  });



  Route::group(['namespace' => 'Lieux'], function (){

    Route::get('lieux/lieux', 'LieuxController@lieux')->name('lieux');
    Route::get('lieux/single/{id}', 'LieuxController@single')->name('single');
  });

  Route::get('contact', 'ContactController@contactForm')->name('contact-view');
  Route::post('contact', 'ContactController@action')->name('contact-action');

  Route::group(['namespace' => 'Commentaire'], function (){

    Route::get('commentaire', 'CommentaireController@commentaire')->name('commentaire');
    Route::post('commentaire', 'CommentaireController@commentaireNew')->name('commentaire-new-action');
    Route::delete('commentaire', 'CommentaireController@commentaireDelete')->name('commentaire-delete-action');
  });

});
Auth::routes();


//Route Admin////////////////////////////////////////////////////////////////////
Route::group(['namespace' => 'Admin'], function (){

  Route::get('dashboard', 'AdminController@user')->name('dashboard');


  Route::get('message', 'AdminController@messageView')->name('message');

  Route::get('lieux', 'Lieux\AdminLieuxController@lieux')->name('lieu');
  Route::put('lieux', 'Lieux\AdminLieuxController@lieuxUpdate')->name('lieu-update-action');
  Route::post('lieux', 'Lieux\AdminLieuxController@lieuNew')->name('lieu-new-action');
  Route::delete('lieux', 'Lieux\AdminLieuxController@lieuxDelete')->name('lieu-delete-action');

  Route::get('user', 'User\AdminUserController@userView')->name('user');
  Route::delete('user', 'User\AdminUserController@userDelete')->name('user-delete-action');

  Route::get('commentaire', 'Commentaire\AdminCommentaireController@commentaire')->name('commentaire');
  Route::put('commentaire', 'Commentaire\AdminCommentaireController@commentaireUpdate')->name('commentaire-update-action');
  Route::delete('commentaire', 'Commentaire\AdminCommentaireController@commentaireDelete')->name('commentaire-delete-action');

});
