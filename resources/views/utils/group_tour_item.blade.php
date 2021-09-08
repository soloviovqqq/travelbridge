<div class="place-item layout-02 place-hover">
    <div class="place-inner">
        <div class="place-thumb hover-img">
            <a class="entry-thumb" href="{{ route('group-tour', $groupTour) }}">
                <img src="{{ $groupTour->small_image_link }}" alt=""/>
            </a>
        </div>

        <div class="entry-detail">
            <div class="entry-head">
                <div class="place-type list-item">
                    <span>от {{ $groupTour->price_from }}</span>
                </div>
                <div class="place-city">
                    {{ $groupTour->place }}
                </div>
            </div>
            <h3 class="place-title"><a href="{{ route('group-tour', $groupTour) }}">{{ $groupTour->title }}</a></h3>
        </div>
    </div>
</div>
