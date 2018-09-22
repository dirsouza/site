<li class="nav-item dropdown menu-large">
    <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">
        {!! $menu->titulo !!}<b class="caret"></b>
    </a>
    <ul class="dropdown-menu megamenu">
        <li>
            <div class="row">
                @foreach($menu->subMenuSite as $subMenu)
                <div class="col-md-6 col-lg-3">
                    <h5>{!! $subMenu->titulo !!}</h5>
                    <ul class="list-unstyled mb-3">
                    @php $items = \App\Http\Models\Site\SubMenuSite::with('subMenuSiteItem')->where('id', $subMenu->id)->get() @endphp
                    @foreach($items as $_items)
                        @foreach($_items->subMenuSiteItem as $item)
                        <li class="nav-item">
                            <a href="{!! url($item->url) !!}" class="nav-link">{!! $item->titulo !!}</a>
                        </li>
                        @endforeach
                    @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </li>
    </ul>
</li>
