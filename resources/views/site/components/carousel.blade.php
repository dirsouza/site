<div id="main-slider" class="owl-carousel owl-theme">
    @foreach($carrossel as $carousel)
        <div class="item"><img src="{{ asset('public/img/'.$carousel->img) }}" alt="{{ $carousel->titulo }}" class="img-fluid"></div>
    @endforeach
</div>
