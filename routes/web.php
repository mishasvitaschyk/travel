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
Route::group(['middleware' => 'auth', 'middleware' => 'access:admin'], function () {

  Route::get('/admin', 'Admin\AdminMarkerController@index');
  Route::get('admin/createmarker', 'Admin\AdminMarkerController@create');
  Route::post('/markers_store', 'Admin\AdminMarkerController@store');

  //Route::post('/markers_store', 'MarkerController@store');
  Route::get('/marker/{marker}','Admin\AdminMarkerController@show');
  Route::get('/admin/marker/edit/{id}', 'Admin\AdminMarkerController@edit_marker')->name('edit-marker');
  Route::post('/admin/marker/{id}/update','Admin\AdminMarkerController@update')->name('update-marker');
  Route::get('/admin/marker/{id}/delete/','Admin\AdminMarkerController@delete')->name('delete');


  Route::get('admin/tour', 'Admin\AdminTourController@index' );
  Route::get('admin/createtour', 'Admin\AdminTourController@create');
  Route::post('/create', 'Admin\AdminTourController@store');
  Route::get('admin/tour/{tour}', 'Admin\AdminTourController@show')->name('admintourshow');
  Route::get('admin/tour/{tour}/edit', 'Admin\AdminTourController@edit')->name('edit-tour');
  Route::get('admin/tour/{tour}/delete', 'Admin\AdminTourController@delete')->name('delete_tour');
  Route::post('admin/tour/{tour}/update', 'Admin\AdminTourController@update_tour')->name('update_tour');
});
Route::get('/','MarkerController@indexuser');
Route::get('/maps/{id}','MarkerController@show')->name('show');

Route::get('/tour/{id}/like', 'LikeDislikeController@create_like');
Route::get('/tour/{id}/dislike', 'LikeDislikeController@create_dislike');

Route::get('/tour','TourController@index');
Route::get('/tour/{id}','TourController@show')->name('tourshow');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Додавання кометарів користувацької частини
Route::post('/comments/{id}','CommentController@marker_comment_store')->name('markercomment');
Route::post('/comments_tour/{id}', 'CommentController@tour_comment_store')->name('tour-comments');


Route::get('/like/{id}','LikeController@like')->name('like');
Route::get('/dislike/{id}','DislikeController@dislike')->name('dislike');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
