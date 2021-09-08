@extends('layout.main')

@push('scripts')
    <script defer>
        $(document).on('click', '.show-gallery', function () {
            $('.slick-active .place-slider__item a').click();
        });
    </script>
@endpush

@section('content')
    <main id="main" class="site-main single single-02">
        <div class="place">
            <div class="slick-sliders">
                <div class="slick-slider" data-item="1"  data-itemScroll="1" data-dots="false" data-infinite="false" data-centerMode="false" data-centerPadding="0">
                    @foreach($tour->images as $image)
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
                    @if($tour->video_link)
                        <a title="Video" href="{{ $tour->video_link }}" class="venobox" data-autoplay="true" data-vbtype="video">
                            <i class="la la-play-circle"></i>
                            Видео обзор
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
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="place__left">
                            <div class="place__box--npd">
                                <h1>{{ $tour->title }}</h1>
                                <div class="place__meta">
                                    <div class="place__currency">
                                        от {{ $tour->price_from }}$
                                    </div>
                                    <div class="place__category">
                                        <a>{{ $tour->tourType->title }}</a>
                                    </div>
                                    <div class="place__category">
                                        <a>{{ $tour->place }}</a>
                                    </div>
                                    <div class="place__category">
                                        <a>{{ $tour->dates }}</a>
                                    </div>
                                </div>
                            </div>

                            <div class="place__box-overview">
                                <div class="place__desc open">
                                    {!! $tour->description  !!}
                                    @if($tour->description_images)
                                        <div class="row text-center text-lg-start mt-2">
                                        @foreach($tour->description_images as $descriptionImages)
                                                <div class="col-12">
                                                    <a href="{{ \Illuminate\Support\Facades\Storage::url($descriptionImages) }}" class="d-block mb-4 h-100 venobox" data-gall="description_images">
                                                        <img class="img-fluid img-thumbnail" src="{{ \Illuminate\Support\Facades\Storage::url($descriptionImages) }}" alt="">
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>

                            @if($tour->schedule)
                            <div class="place__box place__box-open">
                                <h3 class="place__title--additional">Расписание тура</h3>
                                <table class="open-table">
                                    <tbody>
                                    @foreach($tour->schedule as $schedule)
                                        <tr>
                                            <td class="day">{{ $schedule['title'] }}</td>
                                            <td class="time">{{ $schedule['dates'] }}</td>
                                            <td>{{ $schedule['amount'] }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endif

                            @if($tour->program)
                                <div class="place__box">
                                    <h3>Описание</h3>
                                    <ul class="faqs-accordion">
                                        @foreach($tour->program as $program)
                                            <li>
                                                <h4>{{ $program['title'] }}</h4>
                                                <div class="desc"><p>{!! nl2br(e($program['description'])) !!}</p></div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if($tour->faq)
                                <div class="place__box">
                                    <h3>Часто задаваемые вопросы</h3>
                                    <ul class="faqs-accordion">
                                        @foreach($tour->faq as $faq)
                                            <li>
                                                <h4>{{ $faq['question'] }}</h4>
                                                <div class="desc"><p>{!! nl2br(e($faq['answer'])) !!}</p></div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if($tour->files)
                                <div class="place__box">
                                    <h3>Дополнительные материалы</h3>
                                    @foreach($tour->files as $file)
                                        <p class="mb-2">
                                            <a href="{{ $file['file'] }}" download="">{{ $file['title'] }}<i class="fas fa-download" style="font-size: 20px;"></i></a>
                                        </p>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar sidebar-shadow sidebar-sticky">
                            <aside class="widget-sb-detail">
                                <div class="business-info">
                                    @if($tour->additional_info)
                                        @foreach($tour->additional_info as $additionalInfo)
                                            <h3 class="text-center mb-2">{{ $additionalInfo['title'] }}</h3>
                                            <p>{{ $additionalInfo['text'] }}</p>
                                            <hr>
                                        @endforeach
                                    @endif
                                    <h3 class="text-center mb-4">Краткая информация</h3>
                                    <ul>
                                        @if($tour->info_dates)
                                            <li>
                                                <i class="fas fa-clock"></i>
                                                <span>{{ $tour->info_dates }}</span>
                                            </li>
                                        @endif
                                        @if($tour->info_places)
                                            <li>
                                                <i class="fas fa-building"></i>
                                                <span>{{ $tour->info_places }}</span>
                                            </li>
                                        @endif

                                        @if($tour->info_meals)
                                            <li>
                                                <i class="fas fa-utensils"></i>
                                                <span>{{ $tour->info_meals }}</span>
                                            </li>
                                        @endif
                                        @if($tour->info_medical)
                                            <li>
                                                <i class="fas fa-prescription-bottle-alt"></i>
                                                <span>{{ $tour->info_medical }}</span>
                                            </li>
                                        @endif
                                        @if($tour->info_kids)
                                            <li>
                                                <i class="fas fa-child"></i>
                                                <span>{{ $tour->info_kids }}</span>
                                            </li>
                                        @endif
                                        @if($tour->info_price)
                                            <li>
                                                <i class="fas fa-dollar-sign"></i>
                                                <span>{{ $tour->info_price }}</span>
                                            </li>
                                        @endif
                                    </ul>
                                    <div class="mt-4">
                                        <p>Свяжитесь с нами:</p>
                                            <div class="mt-2"><a href="https://t.me/travelbridge" class="btn d-block" target="_blank">Позвонить</a></div>
                                            <div class="mt-2"><a href="https://t.me/travelbridge" class="btn d-block" target="_blank">Написать</a></div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if($tours->isNotEmpty())
            <div class="similar-places">
                <div class="container">
                    <h2 class="similar-places__title title">Похожие туры</h2>
                    <div class="similar-places__content">
                        <div class="row">
                            @foreach($tours as $tour)
                                <div class="col-lg-3 col-md-6">
                                    @include('utils.tour_item', $tour)
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </main>
@endsection
