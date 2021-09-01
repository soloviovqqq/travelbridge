@extends('layout.main')

@push('scripts')
    <script defer>
        $(document).on('click', '.show-gallery', function () {
            $('.slick-active .place-slider__item a').click();
        });
    </script>
@endpush

@section('content')
    <main id="main" class="site-main single single-01">
        <div class="place">
            <div class="slick-sliders">
                <div class="slick-slider" data-item="1" data-itemScroll="1" data-dots="false" data-infinite="false" data-centerMode="false" data-centerPadding="0">
                    @foreach($hotel->images as $image)
                        <div class="place-slider__item">
                            <a class="venobox" href="{{ \Illuminate\Support\Facades\Storage::url($image) }}" data-gall="pls_slider">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($image) }}" alt="slider-01">
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="place-gallery">
                    <a title="Gallery" href="#" class="show-gallery">
                        <i class="la la-image"></i>
                        Галерея
                    </a>
                    @if($hotel->video_link)
                        <a title="Video" href="{{ $hotel->video_link }}" class="venobox" data-autoplay="true" data-vbtype="video">
                            <i class="la la-play-circle"></i>
                            Видео
                        </a>
                    @endif
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

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="place__left">
                            <div class="place__box place__box--npd">
                                <h1 class="position-relative">{{ $hotel->title }}</h1>
                                <div class="place__meta">
                                    <div class="place__reviews reviews">
                                        <span class="place__reviews__number reviews__number">
                                            {{ $hotel->rating }}
                                            <i class="la la-star"></i>
                                        </span>
                                    </div>
                                    <div class="place__currency">
                                        @for($i = 0; $i < $hotel->symbol_price; $i++)$@endfor
                                    </div>
                                    <div class="place__category">
                                        <a>{{ $hotel->place }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="place__box place__box-hightlight">
                                <div class="hightlight-grid">
                                    @foreach(array_slice($hotel->amenities_array, 0, 5) as $amenity)
                                        <div class="place__amenities">
                                            <img src="{{ asset('theme/images/icons/amenities/' . $amenity['img']) }}">
                                            <span>{{ $amenity['text'] }}</span>
                                        </div>
                                    @endforeach
                                    @if(count($hotel->amenities_array) > 5)
                                        <a href="#book-now" title="More" class="hightlight-count open-popup">+({{ count($hotel->amenities_array) - 5 }})</a>
                                        <div class="popup-wrap" id="book-now">
                                            <div class="popup-bg popupbg-close"></div>
                                            <div class="popup-middle">
                                                <a title="Close" href="#" class="popup-close">
                                                    <i class="la la-times"></i>
                                                </a>
                                                <h3>Удобства</h3>
                                                <div class="popup-content">
                                                    <div class="hightlight-flex">
                                                        @foreach($hotel->amenities_array as $amenity)
                                                            <div class="place__amenities">
                                                                <img src="{{ asset('theme/images/icons/amenities/' . $amenity['img']) }}">
                                                                <span>{{ $amenity['text'] }}</span>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="place__box place__box-overview">
                                <h3>Описание</h3>
                                <div class="place__desc">
                                    {{ $hotel->description }}
                                </div>
                                <a href="#" class="show-more">Подробнее...</a>
                            </div>

                            @if($hotel->faq)
                                <div class="place__box">
                                    <h3>Часто задаваемые вопросы</h3>
                                    <ul class="faqs-accordion">
                                        @foreach($hotel->faq as $faq)
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

                    <div class="col-lg-4">
                        <div class="sidebar sidebar-shadow sidebar-sticky mt-4">
                            <aside class=" widget-sb-detail">
                                <div class="business-info">
                                    @if($hotel->additional_info)
                                        @foreach($hotel->additional_info as $additionalInfo)
                                            <h3 class="text-center mb-2">{{ $additionalInfo['title'] }}</h3>
                                            <p>{{ $additionalInfo['text'] }}</p>
                                            <hr>
                                        @endforeach
                                    @endif
                                    <h3 class="text-center mb-4">Краткая информация</h3>
                                    <ul>
                                        @if($hotel->info_rating)
                                            <li>
                                                <i class="la la-star"></i>
                                                <span>{{ $hotel->info_rating }}</span>
                                            </li>
                                        @endif
                                        @if($hotel->info_meals)
                                            <li>
                                                <i class="fas fa-utensils"></i>
                                                <span>{{ $hotel->info_meals }}</span>
                                            </li>
                                        @endif
                                        @if($hotel->info_medical)
                                        <li>
                                            <i class="fas fa-prescription-bottle-alt"></i>
                                            <span>{{ $hotel->info_medical }}</span>
                                        </li>
                                        @endif
                                        @if($hotel->info_kids)
                                        <li>
                                            <i class="fas fa-child"></i>
                                            <span>{{ $hotel->info_kids }}</span>
                                        </li>
                                        @endif
                                        @if($hotel->info_price)
                                        <li>
                                            <i class="fas fa-dollar-sign"></i>
                                            <span>{{ $hotel->info_price }}</span>
                                        </li>
                                        @endif
                                    </ul>
                                    <div class="mt-4">
                                        <p>Свяжитесь с нами:</p>
                                        <div class="button-wrap mt-2">
                                            <div class="button"><a href="#" class="btn">Позвонить</a></div>
                                            <div class="button"><a href="https://t.me/travelbridge" class="btn btn-border" target="_blank">Написать</a></div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if($hotels->isNotEmpty())
            <div class="similar-places">
                <div class="container">
                    <h2 class="similar-places__title title">Рекомендуемые отели</h2>
                    <div class="similar-places__content">
                        <div class="row">
                            @foreach($hotels as $hotel)
                                <div class="col-lg-3 col-md-6">
                                    @include('utils.hotel_item'. $hotels)
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </main>
@endsection
