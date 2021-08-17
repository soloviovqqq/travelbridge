@extends('layout.main')

@push('scripts')
    <script defer>
        $(document).on('click', '.show-gallery', function () {
            $('.slick-active .place-slider__item a').click();
        });
    </script>
@endpush

@section('content')
    <main id="main" class="site-main single single-02">
        <div class="place">
            <div class="slick-sliders">
                <div class="slick-slider" data-item="1"  data-itemScroll="1" data-dots="false" data-infinite="false" data-centerMode="false" data-centerPadding="0">
                    <div class="place-slider__item"><a class="venobox" href="theme/images/listing/large-01.jpg" data-gall="pls_slider"><img src="theme/images/listing/large-01.jpg" alt="slider-01"></a></div>
                    <div class="place-slider__item"><a class="venobox" href="theme/images/listing/gallery-01.jpg" data-gall="pls_slider"><img src="theme/images/listing/gallery-01.jpg" alt="slider-01"></a></div>
                    <div class="place-slider__item"><a class="venobox" href="theme/images/listing/gallery-02.jpg" data-gall="pls_slider"><img src="theme/images/listing/gallery-02.jpg" alt="slider-02"></a></div>
                </div>

                <div class="place-share">
                    <a title="Share" href="#" class="share">
                        <i class="la la-share-square la-24"></i>
                    </a>
                    <div class="social-share">
                        <div class="list-social-icon">
                            <a class="facebook" onclick="window.open('https://www.facebook.com/sharer.php?u=https%3A%2F%2Fwp.getgolo.com%2Fplace%2Fthe-louvre%2F','sharer', 'toolbar=0,status=0');" href="javascript:void(0)"> <i class="fab fa-facebook-f"></i> </a>
                            <a class="linkedin" onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fwp.getgolo.com%2Fplace%2Fthe-louvre%2F&amp;title=The+Louvre','sharer','scrollbars=yes');popUp.focus();return false;" href="javascript:void(0)"> <i class="fab fa-linkedin-in"></i> </a>
                            <a class="twitter" onclick="popUp=window.open('https://twitter.com/share?url=https%3A%2F%2Fwp.getgolo.com%2Fplace%2Fthe-louvre%2F','sharer','scrollbars=yes');popUp.focus();return false;" href="javascript:void(0)"> <i class="fas fa-link"></i> </a>
                        </div>
                    </div>
                </div>

                <div class="place-gallery">
                    <a title="Gallery" href="#" class="show-gallery">
                        <i class="la la-image"></i>
                        Галерея
                    </a>
                    <a title="Video" href="https://www.youtube.com/watch?v=JN3_cyOVnA0" class="venobox" data-autoplay="true" data-vbtype="video">
                        <i class="la la-play-circle"></i>
                        Видео обзор
                    </a>
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
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="place__left">
                            <div class="place__box--npd">
                                <h1>Гастро тур "Мамамия"</h1>
                                <div class="place__meta">
                                    <div class="place__currency">$$</div>
                                    <div class="place__category">
                                        <a title="Restaurant" href="#">Гастро тур</a>
                                    </div>
                                    <div class="place__category">
                                        <a title="Bar" href="#">Рим</a>
                                    </div>
                                </div>
                            </div>

                            <div class="place__box-overview">
                                <div class="place__desc">The Grade I-listed British Library is the largest national library in the world with over 150 million catalogued items held inside, some dating back as far as 2000 BC. It’s home to 15th-century editions of Chaucer’s Canterbury Tales, original song sheets penned by the Beatles and the memorandum written by Lord Nelson two days before the Battle of Trafalgar. It also receives a copy of every single book published in the UK and Ireland. The Grade I-listed British Library is the largest national library in the world with over 150 million catalogued items held inside, some dating back as far as 2000 BC. It’s home to 15th-century editions of Chaucer’s Canterbury Tales, original song sheets penned by the Beatles and the memorandum written by Lord Nelson two days before the Battle of Trafalgar. It also receives a copy of every single book published in the UK and Ireland.</div><!-- .place__desc -->
                                <a href="#" class="show-more" title="Show More">Подробнее</a>
                            </div>

                            <div class="place__box place__box-open">
                                <h3 class="place__title--additional">Расписание тура:</h3>
                                <table class="open-table">
                                    <tbody>
                                    <tr>
                                        <td class="day">1 выезд</td>
                                        <td class="time">10.05.2021 - 15.05.2021</td>
                                        <td>10 мест</td>
                                    </tr>
                                    <tr>
                                        <td class="day">2 выезд</td>
                                        <td class="time">10.06.2021 - 15.06.2021</td>
                                        <td>12 мест</td>
                                    </tr>
                                    <tr>
                                        <td class="day">3 выезд</td>
                                        <td class="time">10.07.2021 - 15.07.2021</td>
                                        <td>15 мест</td>
                                    </tr>
                                    <tr>
                                        <td class="day">4 выезд</td>
                                        <td class="time">10.08.2021 - 15.08.2021</td>
                                        <td>20 мест</td>
                                    </tr>
                                    <tr>
                                        <td class="day">5 выезд</td>
                                        <td class="time">10.09.2021 - 15.09.2021</td>
                                        <td>20 мест</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="place__box">
                                <h3>Программа тура:</h3>
                                <ul class="faqs-accordion">
                                    <li>
                                        <h4>День 1 (прилет, встреча):</h4>
                                        <div class="desc">
                                            <p>Прилет в Аэропорт Тбилиси. Встреча в зале прилета — трансфер в отель 3*.</p>
                                            <p>Отель 3* расположен в Старом городе Тбилиси, всего в 100 м от церкви Метехи и в 15 минутах ходьбы от площади Свободы. В 8 минутах ходьбы находятся собор Самеба и оживленная улица Шардин, где вы найдете множество баров и кафе. К услугам гостей номера с кондиционером и бесплатным Wi—Fi. В каждом номере есть телевизор со спутниковыми каналами, мини-бар, сейф и отделанная плиткой ванная комната с туалетно-косметическими принадлежностями и тапочками. По утрам для гостей сервируется завтрак в ресторане отеля 3*.</p>
                                            <p>По дороге в Тбилиси хачапури и вино!!! Приветственный ужин в традиционном грузинском ресторане, с грузинскими песнями, с грузинским тамадой (ведущий застолье). Все блюда и грузинское вино в неограниченном количестве!</p>
                                        </div>
                                    </li>
                                    <li>
                                        <h4>День 2 (что-то там активное):</h4>
                                        <div class="desc">
                                            <p>Text.</p></div>
                                    </li>
                                    <li>
                                        <h4>День 3 (что-то там веселое):</h4>
                                        <div class="desc">
                                            <p>Text.</p></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar sidebar-shadow sidebar-sticky">
                            <aside class=" widget-sb-detail">
                                <div class="business-info">
                                    <h3 class="text-center mb-4">Краткая информация</h3>
                                    <ul>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <span>10.05.2021 - 15.09.2021</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-building"></i>
                                            <span>Тбилиси(1н), Батуми(3н)</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-utensils"></i>
                                            <span>Питание ВВ + 3 обеда или 3 ужина</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-prescription-bottle-alt"></i>
                                            <span>covid тест за 72 часов</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-child"></i>
                                            <span>Бронирования ДЕТЕЙ (от 5 лет)</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-dollar-sign"></i>
                                            <span>1/DBL — 255 Евро</span>
                                        </li>
                                    </ul>
                                    <div class="mt-4">
                                        <p>Свяжитесь с нами:</p>
                                        <div class="button-wrap mt-2">
                                            <div class="button"><a href="#" class="btn">Позвонить</a></div>
                                            <div class="button"><a href="#" class="btn btn-border">Написать</a></div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="similar-places">
            <div class="container">
                <h2 class="similar-places__title title">Похожие туры</h2>
                <div class="similar-places__content">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
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
                        </div>
                        <div class="col-lg-3 col-md-6">
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
                        </div>
                        <div class="col-lg-3 col-md-6">
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
                        </div>
                        <div class="col-lg-3 col-md-6">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection