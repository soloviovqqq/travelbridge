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
                        @foreach($tours as $tour)
                            @include('utils.tour_item', $tour)
                        @endforeach
                    </div>
                    {{ $tours->links("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </main>
@endsection
