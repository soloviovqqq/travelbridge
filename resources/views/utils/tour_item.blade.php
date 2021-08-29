<div class="place-item layout-02 place-hover">
    <div class="place-inner">
        <div class="place-thumb hover-img">
            <a class="entry-thumb" href="{{ route('tour', $tour) }}">
                <img src="{{ $tour->small_image_link }}" alt=""/>
            </a>
            <a class="entry-category {{ $tour->tourType->color }}" href="{{ route('tour-type', $tour->tourType) }}">
                <i class="{{ $tour->tourType->icon }}"></i><span>{{ $tour->tourType->title }}</span>
            </a>
        </div>

        <div class="entry-detail">
            <div class="entry-head">
                <div class="place-type list-item">
                    <span>{{ $tour->tourType->title }}</span>
                </div>
                <div class="place-city">
                    {{ $tour->place }}
                </div>
            </div>
            <h3 class="place-title"><a href="{{ route('tour', $tour) }}">{{ $tour->title }}</a></h3>
            <small class="mb-3" style="display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;">{{ $tour->small_description }}</small>
            <div class="entry-bottom">
                <div class="place-preview">
                    {{ $tour->dates }}
                </div>
                <div class="place-price">
                    <span>
                        @for($i = 0; $i < $tour->symbol_price; $i++)$@endfor
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
