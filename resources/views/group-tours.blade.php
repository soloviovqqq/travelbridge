@extends('layout.main')

@section('content')
    <main id="main" class="site-main">
        <div class="page-title" style="background-image: url({{ asset('theme/images/bg/tours.jpg') }});">
            <div class="container">
                <div class="page-title__content">
                    <h1 class="page-title__name">Операторские туры</h1>
                    <p class="page-title__slogan">Travel Bridge предлагает рекламные туры по всему миру, они включают в себя увлекательные путешествия и открывают мир новыми глазами.</p>
                </div>
            </div>
        </div>
        <div class="intro">
            <div class="container">
                <div class="intro__content">
                    <div class="row">
                        <div class="col-lg-7">
                            <div>Рекламные туры от Travel Bridge – это отличная возможность повысить профессиональную компетенцию. Наши информационные туры смело можно назвать образовательным мероприятием для менеджеров турагенций.</div>
                        </div>
                        <div class="col-lg-5">
                            <div class="intro__meta">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="intro__meta__item">
                                            <h3>Горящие туры</h3>
                                            @foreach($hotTours as $hotTour)
                                                <p>
                                                    <i class="la la-percent"></i>
                                                    <a href="{{ route('tour', $hotTour) }}">{{ $hotTour->title }}</a>
                                                </p>
                                            @endforeach
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
                    <div class="row">
                        @foreach($groupTours as $groupTour)
                            <div class="col-lg-3 col-md-6 mb-4">
                                @include('utils.group_tour_item', $groupTour)
                            </div>
                        @endforeach
                    </div>
                    {{ $groupTours->links("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </main>
@endsection
