<?php

Route::group(['namespace' => 'AdminAuth'], function () {
    Route::get('/login', 'AuthController@index')->name('admin-login');
    Route::post('/login', 'AuthController@login');
    Route::get('/logout', 'AuthController@logout')->name('logout');
});

Route::group(['middleware' => 'auth:admin'], function () {

    //.........................Admin Section..........................//
    Route::get('/admin/profile', 'AdminController@index')->name('admin-profile');
    Route::post('/admin/profile/edit', 'AdminController@edit_action')->name('admin-edit');
    Route::get('/admin/profile/edit', 'AdminController@edit')->name('edit-profile');
    Route::post('/admin/profile/edit/password', 'AdminController@password')->name('password-update');
    Route::get('/admin/add_user', 'AdminController@show')->name('register');
    Route::post('/admin/add_user', 'AdminController@register');
    Route::get('/admin/delete_admin', 'AdminController@delete')->name('admin-delete');


    /*........................Dashboard Section........................*/
    Route::get('/', 'DashboardController@index')->name('admin-dashboard');

    //...........................Company Info Section..............................//
    Route::get('/company/info', 'InfoController@index')->name('company-info');
    Route::post('/company/info', 'InfoController@store');
    Route::post('/company/info/edit', 'InfoController@edit')->name('company-edit');

    //...............................About Section......................................//
    Route::get('/company/about', 'AboutController@index')->name('about-add');
    Route::post('/company/about', 'AboutController@add');
    Route::post('/company/about/edit', 'AboutController@edit')->name('about-edit');
    Route::get('/company/about/delete', 'AboutController@delete')->name('about-delete');


    //...................................Category Section........................................//
    Route::get('/category/add', 'CategoryController@index')->name('category-add');
    Route::post('/category/add', 'CategoryController@add');
    Route::get('/category/edit', 'CategoryController@show')->name('category-edit');
    Route::post('/category/edit', 'CategoryController@edit');
    Route::get('/category/delete', 'CategoryController@delete')->name('category-delete');

    //...................................Comment Section........................................//
    Route::get('/comment', 'CommentController@index')->name('comment-add');
    Route::get('/comment/delete', 'CommentController@delete')->name('comment-delete');

    //............................Category Content Section.......................................//
    Route::get('/category/content', 'ContentController@index')->name('category-content');
    Route::post('/category/post/add', 'ContentController@store')->name('post-add');
    Route::get('/content/add', 'ContentController@show')->name('content-add');
    Route::get('/content/create', 'ContentController@create')->name('content-create');
    Route::get('/content/delete', 'ContentController@delete')->name('content-delete');
    Route::get('/content/edit', 'ContentController@show')->name('post-edit');
    Route::post('/content/update/{id}', 'ContentController@update')->name('post-update');
    Route::get('/author/{author}/content', 'ContentController@postDetailByAuthor')->name('content.author');


    //..............................Advertisement Section........................................//
    Route::get('/advertisement', 'AdController@index')->name('advertisement');
    Route::post('/advertisement/add', 'AdController@bigyapan_action')->name('bigyapan');
    Route::get('/delete/bigyapan/', 'AdController@delete')->name('delete-bigyapan');


    //..............................Advertisement Section........................................//
    Route::get('/video', 'VideoController@index')->name('video');
    Route::post('/video/add', 'VideoController@store')->name('video.store');
    Route::post('/video/update/{id}', 'VideoController@update')->name('video.update');
    Route::get('/delete/video/', 'VideoController@delete')->name('video.delete');

    //..................................Gallery Section...............................................//
    Route::get('/gallery/', 'GalleryController@index')->name('galleries');
    Route::post('/gallery/', 'GalleryController@store');
    Route::get('/gallery/delete', 'GalleryController@delete')->name('gallery-delete');
    Route::get('/gallery/edit', 'GalleryController@edit')->name('gallery-edit');
    Route::post('/gallery/edit/', 'GalleryController@editAction');

    //...................................Status Section.........................................//
    Route::post('/category/status', 'StatusController@categoryStatus')->name('status-update');
    Route::post('/admin/status', 'StatusController@adminStatus')->name('admin-update');
    Route::post('/post/status', 'StatusController@postStatus')->name('post-status');
    Route::post('/ad/status', 'StatusController@adStatus')->name('ad-status');
    Route::post('/gallery/status', 'StatusController@galleryStatus')->name('gallery-status');


    //.......................................Contact..............................................//
    Route::post('contact-message', 'ContactController@contactMessages')->name('contactaction');
    Route::get('contact-message', 'ContactController@viewContactMessages')->name('contact-message');
    Route::get('message-view', 'ContactController@messageview')->name('message-view');
    Route::post('message-delete', 'ContactController@destroy')->name('message-delete');
    Route::get('Confirm-delete', 'ContactController@confirm')->name('confirm-delete');


});
