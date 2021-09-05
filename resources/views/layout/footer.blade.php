<footer id="footer" class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="row">
                <div class="col-lg-3">
                    <aside class="footer__top__nav">
                        <h3><a href="{{ route('home') }}">Главная</a></h3>
                        <ul>
                            @foreach(\App\Models\Country::query()->visible()->limit(3)->get() as $country)
                                <li><a href="{{ route('country', $country) }}">{{ $country->title }}</a></li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3">
                    <aside class="footer__top__nav">
                        <h3><a href="{{ route('group-tours') }}">Операторские туры</a></h3>
                        <ul>
                            @foreach(\App\Models\GroupTour::query()->visible()->limit(3)->get() as $groupTour)
                                <li><a href="{{ route('group-tour', $groupTour) }}">{{ $groupTour->title }}</a></li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3">
                    <aside class="footer__top__nav">
                        <h3><a href="{{ route('tours') }}">Рекламные туры</a></h3>
                        <ul>
                            @foreach(\App\Models\Tour::query()->public()->visible()->limit(3)->get() as $tour)
                                <li><a href="{{ route('tour', $tour) }}">{{ $tour->title }}</a></li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3">
                    <aside class="footer__top__nav">
                        <h3><a href="{{ route('contact') }}">Контакты</a></h3>
                        <ul>
                            <li>Курс валют</li>
                            @foreach(\App\Models\ExchangeRate::query()->limit(3)->get() as $exchangeRate)
                                <li>{{ $exchangeRate->pair }} {{ $exchangeRate->rate }}</li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <p class="footer__bottom__copyright">2020 &copy; travelbridge.com.ua. Все права защищены.</p>
        </div>
    </div>
</footer>
