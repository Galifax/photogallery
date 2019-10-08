<?php

Route::get('/', 'SiteController@index')->name('home');
Route::get('blog', 'SiteController@blog')->name('blog');
Route::get('blog/{slug}', 'SiteController@blogShow')->name('blogShow');
Route::get('clients', 'SiteController@clients')->name('clients');
Route::get('gallery', 'SiteController@gallery')->name('gallery');
Route::get('pricing', 'SiteController@pricing')->name('pricing');
Route::get('contacts', 'SiteController@contacts')->name('contacts');
