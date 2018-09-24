<?php

namespace App\Http\Controllers\Site;

use App\Http\Models\Site\Carrossel;
use App\Http\Models\Site\Categoria;
use App\Http\Models\Site\Produto;
use App\Http\Controllers\Controller;
use App\Http\Models\Site\MenuSite;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = MenuSite::with('categorias')->get();
        $carrossel = Carrossel::with('produto')->get();

        return view('site.home')->with(compact('menus', 'carrossel'));
    }

    public function listaProdutos($categoria, $item)
    {
        $menus = MenuSite::with('categorias')->get();
        $carrossel = Carrossel::with('produto')->get();

        return view('site.home')->with(compact('menus', 'carrossel'));
//        dd(
//            Categoria::with('categoriaItem')
//            ->where('titulo', $categoria)
//            ->get(),
//            Produto::where('titulo', $item)->get()
//        );
    }

    public function contato()
    {
        $menus = MenuSite::with('categorias')->get();
        $carrossel = Carrossel::with('produto')->get();

        return view('site.home')->with(compact('menus', 'carrossel'));
    }
}
