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
    Route::get('lieux/single/{id}', 'LieuxController@single')->where('n','[0-9]+')->name('single');


    Route::post('lieux/single/{id}', 'LieuxController@commentaireNew')->where('n','[0-9]+')->name('lieux-commentaire-new-action');
  });

  Route::get('contact', 'ContactController@contactForm')->name('contact-view');
  Route::post('contact', 'ContactController@action')->name('contact-action');


  Route::group(['namespace' => 'UserPage'], function(){

    Route::get('userpage/{id}', 'UserPageController@userPage')->where('n','[0-9]+')->name('userpage');

    Route::get('userpage/update/{id}', 'UserPageController@userPageUpdate')->where('n','[0-9]+')->name('userpage-update');
    Route::put('userpage/update/{id}', 'UserPageController@userPageUpdateAction')->where('n','[0-9]+')->name('user-page-update-action');

    Route::delete('userpage/delete/{id}', 'UserPageController@userPageDeleteAction')->where('n','[0-9]+')->name('user-page-delete-action');
  });

  Route::group(['namespace' => 'Juridique'], function() {

     Route::get('Confidentialité', 'ConfidentialiteController@confidentialite')->name('confidentialite');
     Route::get('Mentions', 'MentionsController@mentions')->name('mentions');
     Route::get('Conditions', 'ConditionsController@conditions')->name('conditions');
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

    Route::get('update/{id}', 'AdminLieuxController@lieuxUpdate')->where('n','[0-9]+')->name('lieu-update-new');
    Route::put('update/{id}', 'AdminLieuxController@lieuxUpdateAction')->where('n','[0-9]+')->name('lieu-update-action');

    Route::get('newadminlieu', 'AdminLieuxController@lieuNew')->name('lieu-new-action');
    Route::post('newadminlieu', 'AdminLieuxController@lieuNewAction')->name('lieu-new-action-post');

    Route::delete('adminlieux/delete/{id}', 'AdminLieuxController@deleteAction')->where('n','[0-9]+')->name('admin-lieu-delete-action');
  });

  // Route User Admin
  Route::group(['namespace' => 'User'], function (){

    Route::get('user', 'AdminUserController@userView')->name('user');

    Route::get('user/update/{id}', 'AdminUserController@userUpdate')->where('n','[0-9]+')->name('user-update');
    Route::put('user/update/{id}', 'AdminUserController@userUpdateAction')->where('n','[0-9]+')->name('user-update-action');

    Route::delete('user/delete/{id}', 'AdminUserController@deleteAction')->where('n','[0-9]+')->name('admin-user-delete-action');
  });

  // Route Commentaire Admin
  Route::group(['namespace' => 'Commentaire'], function (){

    Route::get('commentaire', 'AdminCommentaireController@commentaire')->name('admin-commentaire');
    Route::put('commentaire', 'AdminCommentaireController@commentaireUpdate')->name('admin-commentaire-update-action');
    Route::delete('commentaire/delete/{id}', 'AdminCommentaireController@commentaireDelete')->where('n','[0-9]+')->name('admin-commentaire-delete-action');
  });

  //Route Conact Admin
  Route::group(['namespace' => 'Contact'], function(){

    Route::get('contactadmin', 'ContactAdminController@contactAdminView')->name('admin-contact-view');
    Route::delete('contact/delete/{id}', 'ContactAdminController@contactAdminDelete')->where('n','[0-9]+')->name('admin-contact-delete');
  });



});
