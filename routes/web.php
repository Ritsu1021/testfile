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


Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/question/{id}/detail', 'QuestionController@index');
// Route::get('/', 'QuestionController@headerView');


Route::group(['middleware' => ['auth']],function(){
  Route::get('/newpost', 'QuestionController@postView');
  Route::post('/question/{id}/post', 'QuestionController@answer');
  Route::post('/post', 'IndexController@postQuestion');
});

/*
   Route::get('/newpost', function () {
       return view('post');
   });
 */
