<?php

Route::namespace('Admin')->name('admin.')->group(function() {
    Route::get('/', 'AdminController@index');
});
