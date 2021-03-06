@extends('layout.main')

@section('content')
    <main id="main" class="site-main">
        <div class="page-title page-title--small align-left" style="background-image: url(theme/images/bg/bg-about.png);">
            <div class="container">
                <div class="page-title__content">
                    <h1 class="page-title__name">О компании</h1>
                    <p class="page-title__slogan">Работаем для Вас</p>
                </div>
            </div>
        </div>
        <div class="site-content">
            <div class="container">
                <div class="company-info flex-inline">
                    <div class="ci-content mb-5">
                        <h2>С нами Ваш отдых станет незабываемым</h2>
                        <p>Мы стремимся наполнить Вашу жизнь яркими и незабываемыми моментами, и получаем удовольствие от того, чем занимаемся.</p>
                        <h2>История нашего успеха</h2>
                        <p>Предлагаем путешествия и отдых в самых привлекательных странах и на экзотических курортах</p>
                        <p>TRAVEL Bridge – Ваш ПРОВОДНИК в Мир ПУТЕШЕСТВИЙ!</p>
                        <p>Мы – команда профессионалов с более чем 12-летним стажем работы в туризме! Мы знаем все и даже больше о том, как сделать подготовку к путешествию комфортной и спокойной, а само путешествие – интересным, увлекательным и без неожиданных приключений.</p>
                        <p>Наша компания зарекомендовала себя как лидер среди туристических компаний и предоставляет широкий спектр туристических услуг для организации и индивидуальных экскурсий по всему миру. Мы специализируемся как на зарубежном, так и на внутреннем туризме. Мы, как туроператор, организуем незабываемый, доступный и эффективный отдых для всех, кто стремится получить максимум от жизни. Индивидуальный подход к каждому клиенту позволит вам выбрать из множества предложений только те туры и поездки, о которых вы всегда мечтали. Мы уважаем наших клиентов и постоянно помним об их доверии к нам.</p>
                        <p>TRAVEL Bridge – предоставляет полный спектр услуг:</p>
                        <p>
                            — Индивидуальные/групповые туры<br>
                            — Корпоративные туры<br>
                            — Организация MICE-мероприятий<br>
                            — Визовая поддержка<br>
                            — Авиа, ж/д и автобусные билеты<br>
                            — Страхование
                        </p>
                        <p>Для нас жизненно важно открывать и показывать новые пути и маршруты, новые проекты. Мы стремимся быть лидерами во всем, что мы делаем.</p>
                        <p>Мы организуем прием иностранных делегаций на профессиональном уровне, поскольку у нас отличные отношения со многими ведущими гостиничными сетями, ресторанами, транспортными компаниями, профессиональными гидами и переводчиками.</p>
                        <p>Мы знаем, как сделать отдых незабываемым, как превратить обычный отпуск в настоящий океан новых впечатлений! Ищите ли вы укромный уголок на нашей планете, чтобы уединиться и провести свадебный тур наедине, или же предпочитаете многолюдные курорты, наше турагентство предложит все возможные варианты – от эконом-туров до путевок в роскошные отели мира.</p>
                        <p>Сделайте первый шаг к путешествию вашей мечты! На нашем сайте вы найдете большой выбор интересных предложений. Пляжные курорты, культурные каникулы в Европе или экзотическая поездка в Азию — каким будет отдых в этом году, решать вам. У нас вы можете купить горящую путевку или тур онлайн от одного из десятков туроператоров, не выходя из дома.</p>
                        <p>
                            <a href="{{ asset('theme/files/license.pdf') }}" download="">
                                Лицензия Тревел Бридж <i class="fas fa-download" style="font-size: 20px;"></i>
                            </a>
                        </p>
                        <h2>Наши партнеры</h2>
                        <p>Мы работаем с лучшими туроператорами</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="partners">
            <div class="container">
                @php
                    $partners = [
                        'ALF-150x68.png',
                        'ANEX-1-150x68.png',
                        'Coral-Travel-150x68.jpeg',
                        'Join-Up-150x68.png',
                        'Mouzenidis-150x68.png',
                        'PEGAS-150x68.png',
                        'TCC-150x68.png',
                        'TEZ-TOUR-1-150x68.jpeg',
                        'TPG-150x68.png',
                        'TUI-150x68.png',
                    ];
                @endphp
                <div class="slick-sliders offset-item">
                    <div class="slick-slider featured-slider slider-pd30" data-item="4" data-arrows="true" data-itemScroll="2" data-centerPadding="30" data-tabletitem="2" data-tabletscroll="2" data-mobileitem="1" data-mobilescroll="1" data-mobilearrows="false">
                        @foreach($partners as $partner)
                            <div class="slick-item">
                                <div class="cities__item hover__box">
                                    <div class="cities__thumb hover__box__thumb d-flex justify-content-center">
                                        <img src="{{ asset('theme/images/partners/' . $partner) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
            </div>
        </div>
    </main>

@endsection
