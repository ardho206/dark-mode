@extends('welcome')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <swiper-container class="mySwiper" navigation="true" pagination="true" pagination-clickable="true" autoplay-delay="4500" autoplay-disable-on-interaction="false" loop="true">
                <swiper-slide>
                    <img src="../img/carousels/ml1.webp" alt="">
                </swiper-slide>
                <swiper-slide>
                    <img src="../img/carousels/ml2.webp" alt="">
                </swiper-slide>
                <swiper-slide>
                    <img src="../img/carousels/ml3.webp" alt="">
                </swiper-slide>
                <swiper-slide>
                    <img src="../img/carousels/ml4.webp" alt="">
                </swiper-slide>
            </swiper-container>
        </div>
    </div>
    <div class="row search">
        <div class="col-lg-8">
            <ul class="nav nav-line mb-3 mb-lg-0">
                <li class="nav-item mx-1">
                    <button class="nav-link btn-game active" onclick="showContent('game')">Game</button>
                </li>
                <li class="nav-item mx-1">
                    <button class="nav-link btn-apl" onclick="showContent('aplikasi')">Aplikasi</button>
                </li>
                <li class="nav-item mx-1">
                    <button class="nav-link btn-jasa" onclick="showContent('jasa-joki')">Jasa Joki</button>
                </li>
            </ul>
        </div>
        <div class="col-lg-4">
            <form action="">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                  </div>
            </form>
        </div>
    </div>

    <div class="game active-content">
        <div class="popular">
            <h4>Popular Games</h4>

            <div class="row mb-4 g-3">
                @foreach ($games as $game)
                    <div class="col-lg-2 col-md-4">
                        <a href="/order/{{ $game->slug }}" class="card text-center">
                            <img src="{{ $game->image }}" class="game-logo" alt="{{ $game->image }}">
                            <div class="card-body game-name pb-2">
                                <h5 class="name-game mb-0">{{ $game->name }}</h5>
                                <small class="mt-0 fst-italic fw-semibold">{{ $game->type }}</small>
                                <br>
                                <span class="btn-topup text-uppercase">Top Up</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="aplikasi">
        <h4>Aplikasi</h4>
    </div>
    <div class="jasa-joki">
        <h4>Jasa Joki Emel</h4>
    </div>

@endsection
