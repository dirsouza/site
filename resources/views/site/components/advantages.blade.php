<div id="advantages">
    <div class="container">
        <div class="row mb-4">
            @php
                if ($cardVantagens->count() == 1) {
                    $tamanho = 12;
                } elseif ($cardVantagens->count() == 2) {
                    $tamanho = 6;
                } else {
                    $tamanho = $cardVantagens->count() > 3 ? 3 : 4;
                }
            @endphp
            @foreach($cardVantagens as $vantagem)
                <div class="col-md-{{ $tamanho }}">
                    <div class="box d-flex flex-column justify-content-center mb-0 h-100">
                        <div class="icon"><i class="fa {{ $vantagem->icone }}"></i></div>
                        <h3>{{ $vantagem->titulo }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- /.container-->
</div>

