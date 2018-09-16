<?php

Route::namespace('Site')->name('site.')->group(function() {
    Route::get('/', 'SiteController@index');
});
