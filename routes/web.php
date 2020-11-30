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
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/category/{slug}/', 'HomeController@listing')->name('listings');
    Route::get('/category/{slug}/details', 'HomeController@details')->name('details');
    Route::get('/about_us', 'HomeController@about')->name('about');
    Route::post('/category/details/comment/', 'HomeController@comment')->name('comments');
    Route::get('/contact_us', 'HomeController@contacts')->name('contacts');
    Route::post('/contact_us/', 'HomeController@contactAction')->name('contact-action');
//    Route::get('/comment', 'CommentController@index')->name('comment.index')->middleware('auth:admin');
    Route::post('/post/comment', 'HomeController@comment')->name('comment.post');
    Route::get('/search', 'HomeController@search')->name('search');
});
Route::get('ckeditor', 'CkeditorController@index');
Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');
