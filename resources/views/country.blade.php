@extends('layout.main')

@section('content')
    <main id="main" class="site-main">
        <div class="page-title" style="background-image: url({{ $country->big_image_link }});">
            <div class="container">
                <div class="page-title__content">
                    <h4 class="page-title__capita">Страна</h4>
                    <h1 class="page-title__name">{{ $country->title }}</h1>
                    <p class="page-title__slogan">{{ $country->slogan }}</p>
                </div>
            </div>
        </div>
        <div class="intro">
            <div class="container">
                <h2 class="title">Описание</h2>
                <div class="intro__content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="intro__text">{{ $country->description }}</div>
                        </div>
                        <div class="col-lg-6">
                            <div class="intro__meta">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="intro__meta__item">
                                            <h3>Валюта</h3>
                                            <p>
                                                <i class="la la-money-bill"></i>
                                                <span>{{ $country->currency }}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="intro__meta__item">
                                            <h3>Языки</h3>
                                            <p>
                                                <i class="la la-globe"></i>
                                                <span>{{ $country->languages }}</span>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="city-content mt-5">
            <div class="city-content__panels">
                <div class="container">
                    <div class="area-places layout-4col">
                        @php
                        $hotels = [
                            ['name' => 'Hôtel Martinez, by Hyatt', 'image' => 'Hotel_Martinez.jpeg', 'rating' => 9.9, 'price' => 4],
                            ['name' => 'Hôtel Barrière Le Gray d\'Albion', 'image' => 'Hotel_Barriere.jpeg', 'rating' => 6.7, 'price' => 3],
                            ['name' => 'L\'Esterel', 'image' => 'L_Esterel.jpeg', 'rating' => 4.5, 'price' => 3],
                            ['name' => 'Okko Hotels Cannes Centre', 'image' => 'Okko_Hotels.jpeg', 'rating' => 4.9, 'price' => 2],
                            ['name' => 'Hôtel Barrière Le Majestic Cannes', 'image' => 'Barriere_Hotels.jpeg', 'rating' => 7.2, 'price' => 1],
                            ['name' => 'Best Western Premier Le Patio des Artistes', 'image' => 'Best_Western_Premier.jpeg', 'rating' => 6.9, 'price' => 5],
                            ['name' => 'Hotel Montaigne and Spa', 'image' => 'Hotel_Montaigne.jpeg', 'rating' => 5.5, 'price' => 4],
                            ['name' => 'Hotel Abrial', 'image' => 'Hotel_Abrial.jpeg', 'rating' => 3.2, 'price' => 2],
                            ['name' => 'Radisson Blu 1835 Hotel', 'image' => 'Hotel_Radisson_Blu.jpeg', 'rating' => 8.8, 'price' => 1],
                            ['name' => 'Hotel Splendid', 'image' => 'Hotel_Splendid.jpeg', 'rating' => 4.8, 'price' => 5],
                            ['name' => 'Hotel Cannes Croisette', 'image' => 'Hotel_Croisette.jpeg', 'rating' => 9.1, 'price' => 4],
                            ['name' => 'Citadines Croisette', 'image' => 'Hotel_Citadines_Croisette.jpeg', 'rating' => 7.4, 'price' => 3],
                        ];
                        @endphp


                        @foreach($hotels as $hotel)
                        <div class="place-item">
                            <div class="places-item hover__box">
                                <div class="places-item__thumb hover__box__thumb">
                                    <a title="barca" href="{{ route('hotel') }}">
                                        <img src="{{ asset("theme/images/hotels/" . $hotel['image']) }}" alt="">
                                    </a>
                                </div>
                                <div class="places-item__info">
                                    <h3><a href="{{ route('hotel') }}">{{ $hotel['name'] }}</a></h3>
                                    <div class="places-item__meta">
                                        <div class="places-item__reviews">
                                            <span class="places-item__number">
                                                <span class="places-item__number">
                                                    {{ $hotel['rating'] }}
                                                    <i class="la la-star"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="places-item__currency">
                                        @for($i = 0; $i < $hotel['price']; $i++)$@endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="pagination">
                        <div class="pagination__numbers">
                            <span>1</span>
                            <a title="2" href="#">2</a>
                            <a title="3" href="#">3</a>
                            <a title="Next" href="#">
                                <i class="la la-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="other-city banner-dark">
            <div class="container">
                <h2 class="title title--while">Другие страны</h2>
                <div class="other-city__content">
                    <div class="row">
                        @foreach($countries as $country)
                            <div class="col-lg-3 col-md-6">
                                @include('utils.country_item', $country)
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
