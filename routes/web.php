<?php

Route::namespace('Site')->name('site.')->group(function() {
    Route::get('/', 'SiteController@index')->name('index');
    Route::get('/produtos/{categoria}/{item}', 'SiteController@listaProdutos')->name('produtos');
    Route::get('/contato', 'SiteController@contato')->name('contato');
});
