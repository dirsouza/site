<li class="nav-item dropdown menu-large">
    <a href="" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link{{ $menu->setActive($menu->url) }}">
        {!! $menu->titulo !!}<b class="caret"></b>
    </a>
    <ul class="dropdown-menu megamenu">
        <li>
            <div class="row">
                @foreach($menu->categorias as $categoria)
                <div class="col-md-6 col-lg-3">
                    <h5>{!! $categoria->titulo !!}</h5>
                    <ul class="list-unstyled mb-3">
                    @php
                        $itens = \App\Http\Models\Site\Produto::with('categoria')
                            ->where('categoria_id', $categoria->id)
                            ->get();
                    @endphp
                    @foreach($itens as $item)
                        <li class="nav-item">
                            <a href="{!! route('site.produtos', [$item->getTituloUrl($categoria->titulo), $item->getTituloUrl($item->titulo)]) !!}" class="nav-link">{!! $item->titulo !!}</a>
                        </li>
                    @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </li>
    </ul>
</li>
