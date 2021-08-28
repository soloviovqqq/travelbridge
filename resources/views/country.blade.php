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
                        @foreach($hotels as $hotel)
                            @include('utils.hotel_item', $hotel)
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
