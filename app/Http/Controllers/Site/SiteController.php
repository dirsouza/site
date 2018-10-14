<?php

namespace App\Http\Controllers\Site;

use App\Helpers\FunctionsHelpers;
use App\Http\Models\Site\CardVantagem;
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
        $carrossel = Carrossel::orderBy('posicao')->get();
        $cardVantagens = CardVantagem::where('status', 1)->orderBy('posicao')->get();

        return view('site.home')->with([
            'carrossel'     => $carrossel,
            'cardVantagens' => $cardVantagens
        ]);
    }

    public function categoria($categoria)
    {
        $carrossel = Carrossel::orderBy('posicao')->get();
        $cardVantagens = CardVantagem::where('status', 1)->orderBy('posicao')->get();

        return view('site.home')->with([
            'carrossel'     => $carrossel,
            'cardVantagens' => $cardVantagens
        ]);
    }

    public function categoriaSubCategoria($categoria, $subcategoria)
    {
        $carrossel = Carrossel::orderBy('posicao')->get();
        $cardVantagens = CardVantagem::where('status', 1)->orderBy('posicao')->get();

        return view('site.home')->with([
            'carrossel'     => $carrossel,
            'cardVantagens' => $cardVantagens
        ]);
    }

    public function categoriaSubCategoriaItem($categoria, $subcategoria, $item)
    {
        $carrossel = Carrossel::orderBy('posicao')->get();
        $cardVantagens = CardVantagem::where('status', 1)->orderBy('posicao')->get();

        return view('site.home')->with([
            'carrossel'     => $carrossel,
            'cardVantagens' => $cardVantagens
        ]);
    }

    public function contato()
    {
        $carrossel = Carrossel::orderBy('posicao')->get();
        $cardVantagens = CardVantagem::where('status', 1)->orderBy('posicao')->get();

        return view('site.home')->with([
            'carrossel'     => $carrossel,
            'cardVantagens' => $cardVantagens
        ]);
    }
}
