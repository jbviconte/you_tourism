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
// Route Front
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


//Route Admin
Route::group(['namespace' => 'Admin'], function (){

  Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

  Route::get('message', 'AdminController@messageView')->name('message');

  // Route Lieux Admin
  Route::group(['namespace' => 'Lieux'], function (){

    Route::get('adminlieux', 'AdminLieuxController@listing')->name('adminlieux');

    Route::get('update/{id}', 'AdminLieuxController@lieuxUpdate')->name('lieu-update-new');
    Route::put('update/{id}', 'AdminLieuxController@lieuxUpdateAction')->name('lieu-update-action');

    Route::get('newadminlieu', 'AdminLieuxController@lieuNew')->name('lieu-new-action');
    Route::post('newadminlieu', 'AdminLieuxController@lieuNewAction')->name('lieu-new-action-post');

    Route::delete('adminlieux/delete/{id}', 'AdminLieuxController@deleteAction')->name('admin-lieu-delete-action');
  });

  // Route User Admin
  Route::group(['namespace' => 'User'], function (){

    Route::get('user', 'AdminUserController@userView')->name('user');
    Route::get('user/update/{id}', 'AdminUserController@userUpdate')->name('user-Update');
    Route::put('user/update/{id}', 'AdminUserController@userUpdateAction')->name('user-update-action');
    Route::delete('user/delete/{id}', 'AdminUserController@deleteAction')->name('admin-user-delete-action');
  });

  Route::get('commentaire', 'Commentaire\AdminCommentaireController@commentaire')->name('commentaire');
  Route::put('commentaire', 'Commentaire\AdminCommentaireController@commentaireUpdate')->name('commentaire-update-action');
  Route::delete('commentaire', 'Commentaire\AdminCommentaireController@commentaireDelete')->name('commentaire-delete-action');

});
