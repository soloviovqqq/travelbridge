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
                                <p>{!! $tourType->description !!}</p>
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
                        @foreach($tours as $tour)
                            <div class="col-lg-3 col-md-6 mb-4">
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
