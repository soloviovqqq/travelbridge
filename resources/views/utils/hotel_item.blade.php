<div class="place-item">
    <div class="places-item hover__box">
        <div class="places-item__thumb hover__box__thumb">
            <a title="barca" href="{{ route('hotel', $hotel) }}">
                <img src="{{ $hotel->small_image_link }}" alt="">
            </a>
        </div>
        <div class="places-item__info">
            <h3><a href="{{ route('hotel', $hotel) }}">{{ $hotel->title }}</a></h3>
            <div class="places-item__meta">
                <div class="places-item__reviews">
                    <span class="places-item__number">
                        <span class="places-item__number">
                            {{ $hotel->rating }}
                            <i class="la la-star"></i>
                        </span>
                    </span>
                </div>
                <div class="places-item__currency">
                    от {{ $hotel->price_from }}$
                </div>
            </div>
        </div>
    </div>
</div>
