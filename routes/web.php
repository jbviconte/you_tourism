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
    Route::post('lieux/single/{id}', 'LieuxController@commentaireNew')->name('lieux-commentaire-new-action');
  });

  Route::get('contact', 'ContactController@contactForm')->name('contact-view');
  Route::post('contact', 'ContactController@action')->name('contact-action');

  // Route::group(['namespace' => 'Userpage'], function(){
  //
  //   Route::get('userpage', 'UserPageController@userpage')->name('userpage');
  //
  //   Route::get('userpage/update/{id}', 'UserPageController@userpageUpdate')->name('userpage-update');
  //   Route::put('userpage/update/{id}', 'UserPageController@userpageUpdateAction')->name('userpage-update-action');
  //
  //   Route::delete('userpage/delete', 'UserPageController@userpageDeleteAction')->name('userpage-delete-action');
  //
  // });

    Route::get('userpage/{id}', 'Userpage\UserPageController@userpage')->name('userpage');
    Route::get('userpage/update/{id}', 'Userpage\UserPageController@userPageUpdate')->name('userpage-update');
    Route::put('userpage/update/{id}', 'Userpage\UserPageController@userPageUpdateAction')->name('userpage-update-action');


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

    Route::get('user/update/{id}', 'AdminUserController@userUpdate')->name('user-update');
    Route::put('user/update/{id}', 'AdminUserController@userUpdateAction')->name('user-update-action');

    Route::delete('user/delete/{id}', 'AdminUserController@deleteAction')->name('admin-user-delete-action');
  });

  // Route Commentaire Admin
  Route::group(['namespace' => 'Commentaire'], function (){

    Route::get('commentaire', 'AdminCommentaireController@commentaire')->name('admin-commentaire');
    Route::put('commentaire', 'AdminCommentaireController@commentaireUpdate')->name('admin-commentaire-update-action');
    Route::delete('commentaire/delete/{id}', 'AdminCommentaireController@commentaireDelete')->name('admin-commentaire-delete-action');
  });



});
