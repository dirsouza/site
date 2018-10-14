<?php

namespace App\Providers;

use App\Http\Models\Site\Categoria;
use App\Http\Models\Site\MenuSite;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['site.home'], function($view) {
            $view->with([
                'menus' => MenuSite::all(),
                'categorias' => Categoria::orderBy('posicao')->get()
            ]);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
