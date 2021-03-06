<?php

Route::get('/', 'SiteController@index')->name('home');
Route::get('about', 'SiteController@about')->name('about');
Route::get('requisites', 'SiteController@requisites')->name('requisites');
Route::get('gallery', 'SiteController@gallery')->name('gallery');
Route::get('pricing/{slug}', 'SiteController@pricingShow')->name('pricingShow');
Route::get('stocks', 'SiteController@stocks')->name('stocks');
Route::get('contacts', 'SiteController@contacts')->name('contacts');
Route::post('send-message', 'SiteController@sendMessage')->name('callback.send');
Route::post('call-me', 'SiteController@callMe')->name('callMe.send');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
