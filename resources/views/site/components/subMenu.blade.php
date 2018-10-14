<li class="nav-item dropdown menu-large">
    <a href="" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link{{ $menu->menu_active }} hvr-glow">
        {!! $menu->titulo !!}<b class="caret"></b>
    </a>
    <ul class="dropdown-menu megamenu">
        <li>
            <div class="row">
                @foreach($categorias as $categoria)
                <div class="col-md-6 col-lg-3">
                    <h5>
                        <a href="{{ route('site.categoria', $categoria->titulo_url) }}">{!! $categoria->titulo !!}</a>
                    </h5>
                    <ul class="list-unstyled mb-3">
                    @foreach($categoria->produtos as $item)
                        <li class="nav-item">
                            <a href="{!! route('site.categoria.subcategoria', [$categoria->titulo_url, $item->titulo_url]) !!}" class="nav-link{{ $item->sub_menu_active }}">
                                <strong>{!! $item->titulo !!}</strong>
                            </a>
                        </li>
                    @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </li>
    </ul>
</li>
