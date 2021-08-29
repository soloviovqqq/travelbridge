@extends('layout.main')

@push('scripts')
    <script defer>
        $(document).on('click', '.show-gallery', function () {
            $('.slick-active .place-slider__item a').click();
        });
    </script>
@endpush

@section('content')
    <main id="main" class="site-main single single-01">
        <div class="place">
            <div class="slick-sliders">
                <div class="slick-slider" data-item="1" data-itemScroll="1" data-dots="false" data-infinite="false" data-centerMode="false" data-centerPadding="0">
                    <div class="place-slider__item">
                        <img src="{{ asset("theme/images/bg/mald.jpeg") }}" alt="slider-01">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="place__left">
                            <div class="place__box place__box--npd">
                                <h1 class="position-relative">Мальдивы: лучшие отели</h1>
                                <div class="place__meta">
                                    <div class="place__reviews reviews">
                                        <span class="place__reviews__number reviews__number">
                                            9.9
                                            <i class="la la-star"></i>
                                        </span>
                                    </div>
                                    <div class="place__currency">$$$$</div>
                                    <div class="place__category">
                                        <a title="Restaurant" href="#">France</a>
                                        <a title="Bar" href="#">Paris</a>
                                    </div>
                                </div>
                            </div>
                            <div class="place__box place__box-overview">
                                <h3>Описание</h3>
                                <div class="place__desc">
                                    <p>Пятизвездочный отель Martinez - in the Unbound Collection by Hyatt с платным частным пляжем расположен на знаменитом бульваре Круазет в городе Канны. При отеле работает несколько ресторанов и бар Martinez.</p>

                                    <p>Номера отеля Martinez - in the Unbound Collection by Hyatt с современным дизайном интерьера в стиле ар-деко полностью отремонтированы в мае 2018 года. Номера с гостиной зоной и ванной комнатой, отделанной мрамором, оснащены кондиционером. В некоторых номерах есть собственная терраса с видом на Средиземное море.</p>

                                    <p>В ресторане Le Jardin du Martinez, открытом в мае 2018 года, трапезу подают на террасе в тени кипарисов и пальмовых деревьев. В хорошую погоду в саду ресторана проводятся вечеринки в стиле 1930-х годов. В ресторане изысканной кухни La Palme d'Or, удостоенном 2 звезд Мишлен, предлагают блюда по меню, навеянному шедеврами кинематографа. Из обеденного зала открывается вид на бульвар Круазет. Также к услугам гостей ресторан La Plage du Martinez на пляже, где предлагают блюда средиземноморской кухни из местных продуктов и свежих морепродуктов. В баре Martinez, отражающем богатую историю отеля Martinez, подают джин-тоник и разнообразные коктейли, а по вечерам проводят живое кулинарное шоу с приготовлением блюд тепаньяки.</p>
                                </div>
                                <a href="#" class="show-more" title="Show More">Show more</a>
                            </div>

                            <div class="place__box">
                                <h3>Часто задаваемые вопросы</h3>
                                <ul class="faqs-accordion">
                                    <li>
                                        <h4>Когда лучше всего посетить ваш объект для идеального пляжного отдыха?</h4>
                                        <div class="desc"><p>Уважаемый клиент, мы благодарим вас за вашу электронную почту, примите к сведению, что лучшее время для посещения нашей прекрасной собственности - это летнее время, с июня по сентябрь. Мы остаемся в Вашем распоряжении для получения любой информации и с нетерпением ждем возможности приветствовать Вас. С наилучшими пожеланиями.</p></div>
                                    </li>
                                    <li>
                                        <h4>А у вас есть бесплатная парковка?</h4>
                                        <div class="desc"><p>Парковка стоит 48 € в день</p></div>
                                    </li>
                                    <li>
                                        <h4>Добрый день. Какая линия от моря?</h4>
                                        <div class="desc"><p>Фешенебельный отель на 1-й линии у моря.</p></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="container">
                <div class="similar-places__content">
                    <div class="row">
                        @for($i = 1; $i < 9;$i++)
                            <div class="col-lg-3 col-md-6 mb-5">
                                <div class="place-item layout-02 place-hover">
                                    <div class="place-inner">
                                        <div class="place-thumb hover-img">
                                            <a class="entry-thumb" href="">
                                                <img src="{{ asset("theme/images/listing/0$i.jpg") }}" alt=""/>
                                            </a>
                                            <a class="entry-category blue" href="">
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
                                            <h3 class="place-title"><a >Гастро тур "Мамамия"</a></h3>
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
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
