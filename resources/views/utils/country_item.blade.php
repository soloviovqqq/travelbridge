<div class="cities__item hover__box">
    <div class="cities__thumb hover__box__thumb">
        <a href="{{ route('country', $country) }}">
            <img src="{{ $country->small_image_link }}" alt="{{ $country->title  }}">
        </a>
    </div>
    <h4 class="cities__name">{{ $country->title }}</h4>
    <div class="cities__info">
        <p class="cities__number">{{ rand(1, 140) }} отеля</p>
    </div>
</div>
