@extends('layout.main', ['transparentHeader' => $transparentHeader ?? false])

@section('content')
    <main id="main" class="site-main home-main business-main overflow">
        <div class="site-banner bg_hero_02">
            <video class="overlay-video" autoplay="" muted="" playsinline="" loop="" src="{{ asset('theme/videos/movie.mp4') }}"></video>
            <div class="container">
                <div class="site-banner__content">
                    <h1 class="site-banner__title"> Travel Bridge ваш проводник в мир путешествий</h1>
                    <p><i>20</i> стран, <i>15466</i> клиентов.</p>
                </div>
            </div>
        </div>

        <div class="business-category">
            <div class="container">
                <h2 class="title title-border-bottom align-center offset-item">Типы туров</h2>
                <div class="slick-sliders offset-item">
                    <div class="slick-slider explore-slider slider-pd30" data-item="4" data-arrows="true" data-itemScroll="1" data-dots="true" data-centerPadding="30" data-tabletitem="2" data-mobileitem="1" data-mobilearrows="false">
                        @foreach($tourTypes as $tourType)
                        <div class="slick-item">
                            <div class="explore-item dark-sky-blue">
                                <a href="{{ route('tour-type', $tourType) }}">
                                    <div class="explore-thumb">
                                        <img src="{{ $tourType->small_image_link }}" alt="">
                                    </div>
                                    <div class="explore-info">
                                        <h3><a href="{{ route('tour-type', $tourType) }}">{{ $tourType->title }}</a></h3>
                                        <span>{{ $tourType->tours_count }} туров</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="place-slider__nav slick-nav">
                        <div class="place-slider__prev slick-nav__prev">
                            <i class="la la-arrow-left"></i>
                        </div>
                        <div class="place-slider__next slick-nav__next">
                            <i class="la la-arrow-right"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="trending trending-business">
            <div class="container">
                <h2 class="title title-border-bottom align-center offset-item">Наши новинки</h2>
                <div class="slick-sliders offset-item">
                    <div class="slick-slider trending-slider slider-pd30" data-item="4" data-arrows="true" data-itemScroll="4" data-dots="true" data-centerPadding="30" data-tabletitem="2" data-tabletscroll="2" data-smallpcscroll="3" data-smallpcitem="3" data-mobileitem="1" data-mobilescroll="1" data-mobilearrows="false">
                        @foreach($tours as $tour)
                            @include('utils.tour_item', $tour)
                        @endforeach
                    </div>
                    <div class="place-slider__nav slick-nav">
                        <div class="place-slider__prev slick-nav__prev">
                            <i class="las la-angle-left"></i>
                        </div>
                        <div class="place-slider__next slick-nav__next">
                            <i class="las la-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="featured-cities">
            <div class="container">
                <h2 class="title title-border-bottom align-center offset-item">Популярные страны<span>Выберите страну, которую хотете посетить</span></h2>
                <div class="slick-sliders offset-item">
                    <div class="slick-slider featured-slider slider-pd30" data-item="4" data-arrows="true" data-itemScroll="4" data-dots="true" data-centerPadding="30" data-tabletitem="2" data-tabletscroll="2" data-mobileitem="1" data-mobilescroll="1" data-mobilearrows="false">
                        @foreach($countries as $country)
                            <div class="slick-item">
                                @include('utils.country_item', $country)
                            </div>
                        @endforeach
                    </div>
                    <div class="place-slider__nav slick-nav">
                        <div class="place-slider__prev slick-nav__prev">
                            <i class="las la-angle-left"></i>
                        </div>
                        <div class="place-slider__next slick-nav__next">
                            <i class="las la-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="frequently-asked">
            <div class="container">
                <div class="title">
                    <h2>Часто задаваемые вопросы</h2>
                    <p>Есть вопросы? У нас есть ответы.</p>
                </div>
                <div class="row">
                    @foreach($faqs as $faq)
                        <div class="col-md-6">
                            <div class="asked-item">
                                <h3>{{ $faq->question }}</h3>
                                <p>{{ $faq->answer }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="testimonial">
            <div class="container">
                <h2 class="title title-border-bottom align-center offset-item">Отзывы о нас</h2>
                <div class="slick-sliders offset-item">
                    <div class="slick-slider testimonial-slider layout-02 slider-pd30" data-item="2" data-arrows="true" data-itemScroll="2" data-dots="true" data-centerPadding="30" data-tabletitem="1" data-tabletscroll="1" data-mobileitem="1" data-mobilescroll="1" data-mobilearrows="false">
                        @foreach($reviews as $review)
                            <div class="testimonial-item">
                                <div class="avatar d-none d-xl-block d-lg-block">
                                    <img src="{{ $review->image_link }}" alt="Avatar">
                                    <img src="{{ asset('theme/images/assets/quote-active.png') }}" alt="Quote" class="quote">
                                </div>
                                <div class="testimonial-info">
                                    <p>{{ $review->text }}</p>
                                    <div class="testimonial-meta">
                                        <b>{{ $review->name }}</b>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="place-slider__nav slick-nav">
                        <div class="place-slider__prev slick-nav__prev">
                            <i class="las la-angle-left"></i>
                        </div>
                        <div class="place-slider__next slick-nav__next">
                            <i class="las la-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="blogs">
            <div class="container">
                <h2 class="title title-border-bottom align-center offset-item">Наш блог</h2>
                <div class="news__content offset-item">
                    <div class="row">
                        @php
                            $blogs = [
                                ['img' => 'blog-02.jpg', 'tag' => '#food&drink', 'title' => '10 лучших классических закусочных на Манхэттене'],
                                ['img' => 'thumb-01.jpg', 'tag' => '#lifestyle', 'title' => '50 лучших книг в дорогу'],
                                ['img' => 'thumb-10.jpg', 'tag' => '#place_to_stay', 'title' => 'Заброшенный отель в Японии'],
                            ];
                        @endphp

                        @foreach($blogs as $blog)
                        <div class="col-md-4">
                            <article class="post hover__box">
                                <div class="post__thumb hover__box__thumb">
                                    <a href="#">
                                        <img src="{{ asset('theme/images/blog/' . $blog['img']) }}" alt="Food & Drink">
                                    </a>
                                </div>
                                <div class="post__info">
                                    <ul class="post__category">
                                        <li><a href="#">{{ $blog['tag'] }}</a></li>
                                    </ul>
                                    <h3 class="post__title">
                                        <a href="#">{{ $blog['title'] }}</a>
                                    </h3>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                    <div class="align-center button-wrap">
                        <a href="#" class="btn btn-border">Болье постов <i class="las la-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>--}}
    </main>
@endsection
