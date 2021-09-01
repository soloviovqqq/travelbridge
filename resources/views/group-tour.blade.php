@extends('layout.main')

@section('content')
    <main id="main" class="site-main single single-01">
        <div class="place">
            <div class="slick-sliders">
                <div class="slick-slider" data-item="1" data-itemScroll="1" data-dots="false" data-infinite="false" data-centerMode="false" data-centerPadding="0">
                    <div class="place-slider__item">
                        <img src="{{ $groupTour->big_image_link }}">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="place__left">
                            <div class="place__box place__box--npd">
                                <h1 class="position-relative">{{ $groupTour->title }}</h1>
                                <div class="place__meta">
                                    <div class="place__currency">
                                        @for($i = 0; $i < $groupTour->symbol_price; $i++)$@endfor
                                    </div>
                                    <div class="place__category">
                                        <a>{{ $groupTour->place }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="place__box place__box-overview">
                                <h3>Описание</h3>
                                <div class="place__desc">
                                    {{ $groupTour->description }}
                                </div>
                                <a href="#" class="show-more">Подробнее...</a>
                            </div>

                            @if($groupTour->faq)
                                <div class="place__box">
                                    <h3>Часто задаваемые вопросы</h3>
                                    <ul class="faqs-accordion">
                                        @foreach($groupTour->faq as $faq)
                                            <li>
                                                <h4>{{ $faq['question'] }}</h4>
                                                <div class="desc"><p>{{ $faq['answer'] }}</p></div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="container">
                <div class="similar-places__content">
                    <div class="row">
                        @foreach($tours as $tour)
                            <div class="col-lg-3 col-md-6 mb-5">
                                @include('utils.tour_item', $tour)
                            </div>
                        @endforeach
                    </div>
                    {{ $tours->links("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </main>
@endsection
