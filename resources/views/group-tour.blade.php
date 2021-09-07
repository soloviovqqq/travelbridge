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
                                        от {{ $groupTour->price_from }}$
                                    </div>
                                    <div class="place__category">
                                        <a>{{ $groupTour->place }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="place__box place__box-overview">
                                <div class="place__desc open">
                                    {!! $groupTour->description !!}
                                    <div class="row text-center text-lg-start">
                                        @foreach($groupTour->description_images as $descriptionImages)
                                            <div class="col-lg-2 col-md-4 col-6">
                                                <a href="{{ \Illuminate\Support\Facades\Storage::url($descriptionImages) }}" class="d-block mb-4 h-100 venobox" data-gall="description_images">
                                                    <img class="img-fluid img-thumbnail" src="{{ \Illuminate\Support\Facades\Storage::url($descriptionImages) }}" alt="">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            @if($groupTour->faq)
                                <div class="place__box">
                                    <h3>Часто задаваемые вопросы</h3>
                                    <ul class="faqs-accordion">
                                        @foreach($groupTour->faq as $faq)
                                            <li>
                                                <h4>{{ $faq['question'] }}</h4>
                                                <div class="desc"><p>{!! nl2br(e($faq['answer'])) !!}</p></div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if($groupTour->files)
                                <div class="place__box">
                                    <h3>Дополнительные материалы</h3>
                                    @foreach($groupTour->files as $file)
                                        <p class="mb-2">
                                            {{ $file['title'] }}
                                            <a href="{{ $file['file'] }}" download=""><i class="fas fa-download"></i></a>
                                        </p>
                                    @endforeach
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
