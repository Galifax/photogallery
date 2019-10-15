<?php

Route::get('/', 'SiteController@index')->name('home');
Route::get('about', 'SiteController@about')->name('about');
Route::get('gallery', 'SiteController@gallery')->name('gallery');
Route::get('pricing', 'SiteController@pricing')->name('pricing');
Route::get('stocks', 'SiteController@stocks')->name('stocks');
Route::get('contacts', 'SiteController@contacts')->name('contacts');
