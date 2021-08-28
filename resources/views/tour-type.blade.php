@extends('layout.main')

@section('content')
    <main id="main" class="site-main">
        <div class="blog-banner">
            <img src="{{ $tourType->big_image_link }}" alt="Blog Banner">
        </div>

        <div class="blog-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="entry-content">
                            <h1 class="mb-4">{{ $tourType->title }}</h1>
                            <div class="entry-desc">
                                <p>{{ $tourType->description }}</p>
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
                        @for($i = 1; $i <= 9;$i++)
                            <div class="place-item layout-02 place-hover">
                                <div class="place-inner">
                                    <div class="place-thumb hover-img">
                                        <a class="entry-thumb" href="{{ route('tour') }}">
                                            <img src="{{ asset("theme/images/listing/0$i.jpg") }}" alt=""/>
                                        </a>
                                        <a class="entry-category blue" href="{{ route('category') }}">
                                            <i class="las la-utensils"></i><span>Гастро тур</span>
                                        </a>
                                    </div>

                                    <div class="entry-detail">
                                        <div class="entry-head">
                                            <div class="place-type list-item">
                                                <span>Гастро тур</span>
                                            </div>
                                            <div class="place-city">
                                                Рим
                                            </div>
                                        </div>
                                        <h3 class="place-title"><a href="{{ route('tour') }}">Гастро тур "Мамамия"</a></h3>
                                        <small class="mb-3" style="display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;">Помимо десятков видов паст, пицц и лазаний, в кухне Риме Вас ждут телячьи эскалопы с ветчиной сальтимбокка — в переводе: прыгай в рот, восхитительная  жареная  ягнятина с розмарином и тимьяном аббакьоалла романа. На гарнир традиционно подают рис, горох, спаржу и артишоки.</small>
                                        <div class="entry-bottom">
                                            <div class="place-preview">
                                                19.08.2021 - 20.09.2021
                                            </div>
                                            <div class="place-price">
                                                <span>$$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
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
    </main>
@endsection
