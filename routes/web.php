<?php

Route::namespace('Site')->name('site.')->group(function() {
    Route::get('/', 'SiteController@index')->name('index');
    Route::get('/produtos/{categoria}', 'SiteController@produtos')->name('produtos');
    Route::get('/produtos/{categoria}/{item}', 'SiteController@produtoItem')->name('produtos.item');
    Route::get('/contato', 'SiteController@contato')->name('contato');
});
