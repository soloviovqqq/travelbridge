@extends('layout.main')

@section('header-classes', 'home-header')

@section('content')
    <main id="main" class="site-main home-main business-main overflow">
        <div class="site-banner bg_hero_02">
            <video class="overlay-video" autoplay="" muted="" playsinline="" loop="" src="{{ asset('theme/videos/movie.mp4') }}"></video>
            <div class="container">
                <div class="site-banner__content">
                    <h1 class="site-banner__title">Бронируйте туры онлайн</h1>
                    <p><i>20</i> стран, <i>10</i> категорий, <i>15466</i> клиентов.</p>
{{--                    <form action="#" class="site-banner__search layout-02">
                        <div class="field-input">
                            <label for="loca">Куда</label>
                            <input class="site-banner__search__input open-suggestion" id="loca" type="text" name="where" placeholder="введите страну" autocomplete="off">
                            <div class="search-suggestions location-suggestions">
                                <ul>
                                    <li><a href="#"><i class="las la-sun"></i><span>Египет</span></a></li>
                                    <li><a href="#"><i class="las la-sun"></i><span>Турция</span></a></li>
                                    <li><a href="#"><i class="las la-snowboarding"></i><span>Австрия</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="field-submit">
                            <button><i class="las la-search la-24-black"></i></button>
                        </div>
                    </form>--}}
                </div>
            </div>
        </div>

        <div class="business-category">
            <div class="container">
                <h2 class="title title-border-bottom align-center offset-item">Туристические категории</h2>
                <div class="slick-sliders offset-item">
                    <div class="slick-slider explore-slider slider-pd30" data-item="4" data-arrows="true" data-itemScroll="1" data-dots="true" data-centerPadding="30" data-tabletitem="2" data-mobileitem="1" data-mobilearrows="false">

                        @php
                          $categories = [
                            ['name' => 'Гастро туры', 'image' => 'gastro.jpeg'],
                            ['name' => 'Круизы', 'image' => 'cruise.jpeg'],
                            ['name' => 'Горнолыжные туры', 'image' => 'ski.jpeg'],
                            ['name' => 'Индивидуальные туры', 'image' => 'spa.jpeg'],
                            ['name' => 'Свадебные туры', 'image' => 'wedding.jpeg'],
                            ['name' => 'Туры выходного дня', 'image' => 'bali.jpeg'],
                            ['name' => 'Экотуры', 'image' => 'tundra.jpeg'],
                            ['name' => 'Экстремальные туры', 'image' => 'surf.jpeg'],
                          ];
                        @endphp

                        @foreach($categories as $category)
                        <div class="slick-item">
                            <div class="explore-item dark-sky-blue">
                                <a href="{{ route('category') }}">
                                    <div class="explore-thumb">
                                        <img src="{{ asset('theme/images/categories/' . $category['image']) }}" alt="">
                                    </div>
                                    <div class="explore-info">
                                        <h3><a href="{{ route('category') }}">{{ $category['name'] }}</a></h3>
                                        <span>{{ rand(1, 20) }} туров</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="place-slider__nav slick-nav">
                        <div class="place-slider__prev slick-nav__prev">
                            <i class="la la-arrow-left"></i>
                        </div>
                        <div class="place-slider__next slick-nav__next">
                            <i class="la la-arrow-right"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="trending trending-business">
            <div class="container">
                <h2 class="title title-border-bottom align-center offset-item">Новые туры</h2>
                <div class="slick-sliders offset-item">
                    <div class="slick-slider trending-slider slider-pd30" data-item="4" data-arrows="true" data-itemScroll="4" data-dots="true" data-centerPadding="30" data-tabletitem="2" data-tabletscroll="2" data-smallpcscroll="3" data-smallpcitem="3" data-mobileitem="1" data-mobilescroll="1" data-mobilearrows="false">


                        @for($i = 0; $i < 5;$i++)
                        <div class="place-item layout-02 place-hover">
                            <div class="place-inner">
                                <div class="place-thumb hover-img">
                                    <a class="entry-thumb" href="#">
                                        <img src="{{ asset('theme/images/categories/gastro.jpeg') }}" alt=""/>
                                    </a>
                                    <a class="entry-category blue" href="#">
                                        <i class="las la-utensils"></i><span>Гастро тур</span>
                                    </a>
                                </div>

                                <div class="entry-detail">
                                    <div class="entry-head">
                                        <div class="place-type list-item">
                                            <span>Гастро тур</span>
                                        </div>
                                        <div class="place-city">
                                            Рим
                                        </div>
                                    </div>
                                    <h3 class="place-title"><a href="#">Гастро тур "Мамамия"</a></h3>
                                    <small class="mb-3" style="display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;">Помимо десятков видов паст, пицц и лазаний, в кухне Риме Вас ждут телячьи эскалопы с ветчиной сальтимбокка — в переводе: прыгай в рот, восхитительная  жареная  ягнятина с розмарином и тимьяном аббакьоалла романа. На гарнир традиционно подают рис, горох, спаржу и артишоки.</small>
                                    <div class="entry-bottom">
                                        <div class="place-preview">
                                            19.08.2021 - 20.09.2021
                                        </div>
                                        <div class="place-price">
                                            <span>$$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="place-item layout-02 place-hover">
                            <div class="place-inner">
                                <div class="place-thumb hover-img">
                                    <a class="entry-thumb" href="#">
                                        <img src="{{ asset('theme/images/categories/bali.jpeg') }}" alt=""/>
                                    </a>
                                    <a class="entry-category rosy-pink" href="#">
                                        <i class="las la-sun"></i><span>Пляжный тур</span>
                                    </a>
                                </div>

                                <div class="entry-detail">
                                    <div class="entry-head">
                                        <div class="place-type list-item">
                                            <span>Пляжный тур</span>
                                        </div>
                                        <div class="place-city">
                                            Одесса
                                        </div>
                                    </div>
                                    <h3 class="place-title"><a href="#">Пляжный тур "Ибица"</a></h3>
                                    <small class="mb-3" style="display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;">Ибица – самый модный курорт Европы. Солнце, море, свобода, круглосуточное веселье, переходящее в «отрыв».</small>
                                    <div class="entry-bottom">
                                        <div class="place-preview">
                                            1.05.2021 - 31.09.2021
                                        </div>
                                        <div class="place-price">
                                            <span>$$$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="place-item layout-02 place-hover">
                                <div class="place-inner">
                                    <div class="place-thumb hover-img">
                                        <a class="entry-thumb" href="#">
                                            <img src="{{ asset('theme/images/categories/spa.jpeg') }}" alt=""/>
                                        </a>
                                        <a class="entry-category purple" href="#">
                                            <i class="las la-spa"></i><span>Релакс тур</span>
                                        </a>
                                    </div>

                                    <div class="entry-detail">
                                        <div class="entry-head">
                                            <div class="place-type list-item">
                                                <span>Релакс тур</span>
                                            </div>
                                            <div class="place-city">
                                                Мармарис
                                            </div>
                                        </div>
                                        <h3 class="place-title"><a href="#">Релакс тур "Насолода"</a></h3>
                                        <small class="mb-3" style="display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;">Позвольте себе забыть о ежедневной рутине и окунуться в атмосферу релакса. Незабываемый отдых в загородном комплексе в сосновом лесу с оздоровительными SPA-программами.</small>
                                        <div class="entry-bottom">
                                            <div class="place-preview">
                                                31.02.2021 - 31.12.2021
                                            </div>
                                            <div class="place-price">
                                                <span>$$$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        @endfor

                    </div>
                    <div class="place-slider__nav slick-nav">
                        <div class="place-slider__prev slick-nav__prev">
                            <i class="las la-angle-left"></i>
                        </div><!-- .place-slider__prev -->
                        <div class="place-slider__next slick-nav__next">
                            <i class="las la-angle-right"></i>
                        </div><!-- .place-slider__next -->
                    </div><!-- .place-slider__nav -->
                </div>
            </div>
        </div>

        <div class="featured-cities">
            <div class="container">
                <h2 class="title title-border-bottom align-center offset-item">Популярные страны<span>Выберите страну, которую хотете посетить</span></h2>
                <div class="slick-sliders offset-item">
                    <div class="slick-slider featured-slider slider-pd30" data-item="4" data-arrows="true" data-itemScroll="4" data-dots="true" data-centerPadding="30" data-tabletitem="2" data-tabletscroll="2" data-mobileitem="1" data-mobilescroll="1" data-mobilearrows="false">
                        @php
                            $countries = [
                                [
                                    'img' => 'newyork.jpg',
                                    'name' => 'Соединенные Штаты',
                                    'places' => '80',
                                ],
                                [
                                    'img' => 'barca.jpeg',
                                    'name' => 'Испания',
                                    'places' => '92',
                                ],
                                [
                                    'img' => 'amsterdam.jpg',
                                    'name' => 'Нидерланды',
                                    'places' => '44',
                                ],
                                [
                                    'img' => 'tokyo.jpeg',
                                    'name' => 'Япония',
                                    'places' => '54',
                                ],
                                [
                                    'img' => 'paris.jpg',
                                    'name' => 'Франция',
                                    'places' => '94',
                                ],
                                [
                                    'img' => 'singapo.jpg',
                                    'name' => 'Сингапур',
                                    'places' => '23',
                                ],
                                [
                                    'img' => 'sydney.jpg',
                                    'name' => 'Австралия',
                                    'places' => '32',
                                ],
                            ];
                        @endphp

                        @foreach($countries as $country)
                        <div class="slick-item">
                            <div class="cities__item hover__box">
                                <div class="cities__thumb hover__box__thumb">
                                    <a href="{{ route('country') }}">
                                        <img src="{{ asset('theme/images/city/' . $country['img']) }}" alt="{{ $country['name'] }}">
                                    </a>
                                </div>
                                <h4 class="cities__name">{{ $country['name'] }}</h4>
                                <div class="cities__info">
                                    <p class="cities__number">{{ $country['places'] }} отеля</p>
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

        <div class="frequently-asked">
            <div class="container">
                <div class="title">
                    <h2>Часто задаваемые вопросы</h2>
                    <p>Есть вопросы? У нас есть ответы.</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="asked-item">
                            <h3> Как ты обычно рассчитываешь бюджет путешествия? Из чего он складывается?</h3>
                            <p>Бюджет складывается из стоимости дороги, стоимости отелей и трат на месте. Обычно я начинаю с покупки билетов, но обязательно перед их приобретением смотрю отели на эти даты. Цены на проживание могут отбить все желание поехать именно в это место.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="asked-item">
                            <h3>Как правильно рассчитать примерные траты на месте?</h3>
                            <p>Траты на месте - это довольно обширная статья расходов. В нее входит и транспорт, и экскурсии, и развлечения, и питание. На стоимость всего этого сильно влияет выбранное место отдыха. В Азии можно отлично провести время c 20$ в кармане в день, а в западной Европе так уже не получится. В среднем, с учетом развлечений, транспорта, еды я закладываю на одного человека от 50 до 150$ в день.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="asked-item">
                            <h3>На чем основываешься при выборе нового направления для путешествия?</h3>
                            <p>На своем желании и на дешевых билетах. С желанием, думаю, понятно. Захотел в Стамбул и поехал. С билетами интереснее. Часто попадаются предложения, мимо которых не пройти. Ну как не купить билет в Перу за 20000 рублей туда и обратно? И вот ты уже с билетом планируешь поездку. Но в этом кроется ошибка, почти всегда билеты и дорога – не самая большая статья расходов.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="asked-item">
                            <h3>Как планировать маршруты?</h3>
                            <p>Этот вопрос открывает ящик Пандоры. Планирование маршрута – это адский ад, тонна информации и убийство времени. Нет рецептов по планированию, надо все изучать и постоянно перепланировать. Поэтому коротко ответить на вопрос можно тремя словами: “в адовых муках”.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonial">
            <div class="container">
                <h2 class="title title-border-bottom align-center offset-item">Наши отзывы</h2>
                <div class="slick-sliders offset-item">
                    <div class="slick-slider testimonial-slider layout-02 slider-pd30" data-item="2" data-arrows="true" data-itemScroll="2" data-dots="true" data-centerPadding="30" data-tabletitem="1" data-tabletscroll="1" data-mobileitem="1" data-mobilescroll="1" data-mobilearrows="false">
                        <div class="testimonial-item">
                            <div class="avatar">
                                <img src="{{ asset('theme/images/avatars/male-2.jpg') }}" alt="Avatar">
                                <img src="{{ asset('theme/images/assets/quote-active.png') }}" alt="Quote" class="quote">
                            </div>
                            <div class="testimonial-info">
                                <p>Море впечатлений! Супер эмоции! Я не ожидала, что будет так классно и креативно. Путешествие в Черногорию было для меня большим открытием. Ожидания не просто оправдались, а они превысили всё что я могла себе представить.</p>
                                <div class="testimonial-meta">
                                    <b>Илья Масурбаниев</b>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="avatar">
                                <img src="{{ asset('theme/images/avatars/female-1.jpg') }}" alt="Avatar">
                                <img src="{{ asset('theme/images/assets/quote-active.png') }}" alt="Quote" class="quote">
                            </div>
                            <div class="testimonial-info">
                                <p>Эта поездочка хоть и коротенькая, но такая насыщенная, такая интересная! Никогда не думала, что так смогу влюбиться в Хорватию. Замечательное солнце, замечательные пляжи, замечательные люди и отлично проведенное время!</p>
                                <div class="testimonial-meta">
                                    <b>Инна Гальсалес</b>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="avatar">
                                <img src="{{ asset('theme/images/avatars/female-3.jpg') }}" alt="Avatar">
                                <img src="{{ asset('theme/images/assets/quote-active.png') }}" alt="Quote" class="quote">
                            </div>
                            <div class="testimonial-info">
                                <p>Впечатления, которые ни youtube, ни телевизор не покажут. Это надо видеть, ощущать этот колорит, просто погружаться в атмосферу. И я хочу вернуться сюда еще раз.А вы еще сидите дома? Отправляйтесь срочно в путешествия!</p>
                                <div class="testimonial-meta">
                                    <b>Алла Кун</b>
                                </div>
                            </div>
                        </div>
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

        <div class="blogs">
            <div class="container">
                <h2 class="title title-border-bottom align-center offset-item">Наш блог</h2>
                <div class="news__content offset-item">
                    <div class="row">
                        @php
                            $blogs = [
                                ['img' => 'blog-02.jpg', 'tag' => '#food&drink', 'title' => '10 лучших классических закусочных на Манхэттене'],
                                ['img' => 'thumb-01.jpg', 'tag' => '#lifestyle', 'title' => '50 лучших книг в дорогу'],
                                ['img' => 'thumb-10.jpg', 'tag' => '#place_to_stay', 'title' => 'Заброшенный отель в Японии'],
                            ];
                        @endphp

                        @foreach($blogs as $blog)
                        <div class="col-md-4">
                            <article class="post hover__box">
                                <div class="post__thumb hover__box__thumb">
                                    <a href="#">
                                        <img src="{{ asset('theme/images/blog/' . $blog['img']) }}" alt="Food & Drink">
                                    </a>
                                </div>
                                <div class="post__info">
                                    <ul class="post__category">
                                        <li><a href="#">{{ $blog['tag'] }}</a></li>
                                    </ul>
                                    <h3 class="post__title">
                                        <a href="#">{{ $blog['title'] }}</a>
                                    </h3>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                    <div class="align-center button-wrap">
                        <a href="#" class="btn btn-border">Болье постов <i class="las la-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
