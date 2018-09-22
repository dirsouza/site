            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a href="index.html" class="navbar-brand home">
                        <img src="public/img/logo.png" alt="Obaju logo" class="d-none d-md-inline-block">
                        <img src="public/img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none">
                        <span class="sr-only">Obaju - go to homepage</span>
                    </a>
                    <div class="navbar-buttons">
                        <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                        <a href="basket.html" class="btn btn-outline-secondary navbar-toggler">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                    <div id="navigation" class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            @foreach($menus as $menu)
                                @if ($menu->subMenuSite->count() > 0)
                                    @component('site.components.subMenu', ['menu' => $menu]) @endcomponent
                                @else
                                    @component('site.components.menu', ['menu' => $menu]) @endcomponent
                                @endif
                            @endforeach
                        </ul>
                        @include('site.includs.card')
                    </div>
                </div>
            </nav>
