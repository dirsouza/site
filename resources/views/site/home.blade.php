@extends('site.layout.layout')

@section('title', 'Site')

@section('content')
    <div id="all">
        <div id="content">

            @component('site.components.carousel', ['carrossel' => $carrossel]) @endcomponent

            @component('site.components.advantages', ['cardVantagens' => $cardVantagens]) @endcomponent

            @component('site.components.slideshow', ['categorias' => $categorias]) @endcomponent

        </div>
    </div>
@endsection
