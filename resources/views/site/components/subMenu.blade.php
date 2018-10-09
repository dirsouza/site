<li class="nav-item dropdown menu-large">
    <a href="" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link{{ $menu->menu_active }}">
        {!! $menu->titulo !!}<b class="caret"></b>
    </a>
    <ul class="dropdown-menu megamenu">
        <li>
            <div class="row">
                @foreach($menu->categorias as $categoria)
                <div class="col-md-6 col-lg-3">
                    <h5 class="nav-link{{ $categoria->categoria_active }}">
                        <a href="{{ route('site.produtos', $categoria->titulo_url) }}">{!! $categoria->titulo !!}</a>
                    </h5>
                    <ul class="list-unstyled mb-3">
                    @foreach($categoria->produto as $item)
                        <li class="nav-item">
                            <a href="{!! route('site.produtos.item', [$categoria->titulo_url, $item->titulo_url]) !!}" class="nav-link{{ $item->sub_menu_active }}">
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
