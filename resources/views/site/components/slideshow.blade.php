<div id="hot">
    <div class="box py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-0">
                        <strong>Produtos</strong>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="product-slider owl-carousel owl-theme">
    @foreach($categorias as $categoria)
        @foreach($categoria->produtos as $produto)
            @foreach($produto->itens as $item)
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="{{ route('site.categoria.subcategoria.item', [$categoria->titulo_url, $produto->titulo_url, $item->titulo_url]) }}">
                                    <img src="{{ asset('public/img/'.$item->imagens[0]->imagem) }}" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('site.categoria.subcategoria.item', [$categoria->titulo_url, $produto->titulo_url, $item->titulo_url]) }}" class="invisible">
                        <img src="{{ asset('public/img/'.$item->imagens[0]->imagem) }}" alt="" class="img-fluid">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="{{ route('site.categoria.subcategoria.item', [$categoria->titulo_url, $produto->titulo_url, $item->titulo_url]) }}">
                                {{ $item->descricao }}
                            </a>
                        </h3>
                        <p class="price">
                        @if(isset($item->ofertas->preco))
                            De <del>{{ $item->preco }}</del>
                            <br>
                            Por <price>{{ $item->ofertas->preco }}</price>
                        @else
                            Por <price>{{ $item->preco }}</price>
                        @endif
                        </p>
                        <p class="buttons">
                            <a href="{{ route('site.categoria.subcategoria.item', [$categoria->titulo_url, $produto->titulo_url, $item->titulo_url]) }}" class="btn btn-outline-secondary hvr-glow">
                                Ver detalhes
                            </a>
                            <a href="basket.html" class="btn btn-primary hvr-icon-back hvr-glow">
                                <i class="fa fa-shopping-cart hvr-icon"></i>Adicionar
                            </a>
                        </p>
                    </div>
                    <!-- /.text-->
                @if(FunctionsHelpers::getDataPendente($item->created_at, true) <= 30)
                    <div class="ribbon sale">
                        <div class="theribbon">Novo</div>
                        <div class="ribbon-background"></div>
                    </div>
                @endif
                </div>
                <!-- /.product-->
            </div>
            @endforeach
        @endforeach
    @endforeach
            <!-- /.product-slider-->
        </div>
        <!-- /.container-->
    </div>
    <!-- /#hot-->
    <!-- *** HOT END ***-->
</div>
