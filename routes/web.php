<?php

Route::namespace('Site')->name('site.')->group(function() {
    Route::get('/', 'SiteController@index')->name('index');
    Route::get('/produtos/{categoria}', 'SiteController@categoria')->name('categoria');
    Route::get('/produtos/{categoria}/{subCategoria}', 'SiteController@categoriaSubCategoria')->name('categoria.subcategoria');
    Route::get('/produtos/{categoria}/{subCategoria}/{item}', 'SiteController@categoriaSubCategoriaItem')->name('categoria.subcategoria.item');
    Route::get('/carrinho')->name('carrinho');
    Route::get('/sobre-nos')->name('sobre');
    Route::get('/termos-e-condicoes')->name('termos');
    Route::get('/perguntas-frequentes')->name('perguntas');
    Route::get('/contato', 'SiteController@contato')->name('contato');
    Route::post('/entrar')->name('entrar');
    Route::get('/registrar')->name('registrar');
    Route::post('/registrar')->name('registrar');
    Route::get('/sair')->name('sair');
});
