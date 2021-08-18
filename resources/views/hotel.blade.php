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
                    @for($i = 1; $i <= 5;$i++)
                        <div class="place-slider__item">
                            <a class="venobox" href="{{ asset("theme/images/hotels/Martinez_hotel$i.jpeg") }}" data-gall="pls_slider">
                                <img src="{{ asset("theme/images/hotels/Martinez_hotel$i.jpeg") }}" alt="slider-01">
                            </a>
                        </div>
                    @endfor
                </div>

                <div class="place-gallery">
                    <a title="Gallery" href="#" class="show-gallery">
                        <i class="la la-image"></i>
                        Галерея
                    </a>
                    <a title="Video" href="https://youtu.be/7a3HnTH41pc" class="venobox" data-autoplay="true" data-vbtype="video">
                        <i class="la la-play-circle"></i>
                        Видео
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

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="place__left">
                            <div class="place__box place__box--npd">
                                <h1 class="position-relative">Hôtel Martinez, by Hyatt</h1>
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
                            <div class="place__box place__box-hightlight">
                                <div class="hightlight-grid">
                                    <div class="place__amenities">
                                        <img src="theme/images/icons/amenities/wf.svg" alt="Free wifi">
                                        <span>Wifi</span>
                                    </div>
                                    <div class="place__amenities">
                                        <img src="theme/images/icons/amenities/cld.svg" alt="Reservations">
                                        <span>Reservations</span>
                                    </div>
                                    <div class="place__amenities">
                                        <img src="theme/images/icons/amenities/card.svg" alt="Credit cards">
                                        <span>Credit cards</span>
                                    </div>
                                    <div class="place__amenities">
                                        <img src="theme/images/icons/amenities/smk.svg" alt="Non smoking">
                                        <span>Non smoking</span>
                                    </div>
                                    <div class="place__amenities">
                                        <img src="theme/images/icons/amenities/air.svg" alt="Reservations">
                                        <span>Air conditioner</span>
                                    </div>
                                    <a href="#book-now" title="More" class="hightlight-count open-popup">+(4)</a>

                                    <div class="popup-wrap" id="book-now">
                                        <div class="popup-bg popupbg-close"></div>
                                        <div class="popup-middle">
                                            <a title="Close" href="#" class="popup-close">
                                                <i class="la la-times"></i>
                                            </a>
                                            <h3>Amenities</h3>
                                            <div class="popup-content">
                                                <div class="hightlight-flex">
                                                    <div class="place__amenities">
                                                        <img src="theme/images/icons/amenities/wf.svg" alt="Free wifi">
                                                        <span>Wifi</span>
                                                    </div>
                                                    <div class="place__amenities">
                                                        <img src="theme/images/icons/amenities/cld.svg" alt="Reservations">
                                                        <span>Reservations</span>
                                                    </div>
                                                    <div class="place__amenities">
                                                        <img src="theme/images/icons/amenities/card.svg" alt="Credit cards">
                                                        <span>Credit cards</span>
                                                    </div>
                                                    <div class="place__amenities">
                                                        <img src="theme/images/icons/amenities/smk.svg" alt="Non smoking">
                                                        <span>Non smoking</span>
                                                    </div>
                                                    <div class="place__amenities">
                                                        <img src="theme/images/icons/amenities/air.svg" alt="Air conditioner">
                                                        <span>Air conditioner</span>
                                                    </div>
                                                    <div class="place__amenities">
                                                        <img src="theme/images/icons/amenities/car.svg" alt="Car parking">
                                                        <span>Car parking</span>
                                                    </div>
                                                    <div class="place__amenities">
                                                        <img src="theme/images/icons/amenities/ct.svg" alt="Cocktails">
                                                        <span>Cocktails</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                <h3>Контактная информация</h3>
                                <ul class="place__contact">
                                    <li>
                                        <i class="la la-phone"></i>
                                        <a title="00 343 7859" href="tel:003437859">00 343 7859</a>
                                    </li>
                                    <li>
                                        <i class="la la-globe"></i>
                                        <a title="www.abcsite.com" href="www.abcsite.com">www.abcsite.com</a>
                                    </li>
                                    <li>
                                        <i class="la la-facebook-f"></i>
                                        <a title="fb.com/abc" href="fb.com/abc">facebook.com/getgolo</a>
                                    </li>
                                    <li>
                                        <i class="la la-instagram"></i>
                                        <a title="instagram.com/abc" href="instagram.com/abc">instagram.com/getgolo</a>
                                    </li>
                                </ul>
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
                    <div class="col-lg-4">
                        <div class="sidebar sidebar--shop sidebar--border">
                            <div class="widget-reservation-mini">
                                <h3>Make a reservation</h3>
                                <a href="#" class="open-wg btn">Request</a>
                            </div>
                            <aside class="widget widget-shadow widget-reservation">
                                <h3>Make a reservation</h3>
                                <form action="#" method="POST" class="form-underline">
                                    <div class="field-select has-sub field-guest">
                                        <span class="sl-icon"><i class="la la-user-friends"></i></span>
                                        <input type="text" placeholder="Guest" readonly>
                                        <i class="la la-angle-down"></i>
                                        <div class="field-sub">
                                            <ul>
                                                <li>
                                                    <span>Adults</span>
                                                    <div class="shop-details__quantity">
															<span class="minus">
																<i class="la la-minus"></i>
															</span>
                                                        <input type="number" name="quantity" value="0" class="qty number_adults">
                                                        <span class="plus">
																<i class="la la-plus"></i>
															</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span>Childrens</span>
                                                    <div class="shop-details__quantity">
															<span class="minus">
																<i class="la la-minus"></i>
															</span>
                                                        <input type="number" name="quantity" value="0" class="qty number_childrens">
                                                        <span class="plus">
																<i class="la la-plus"></i>
															</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="field-select field-date">
                                        <span class="sl-icon"><i class="la la-calendar-alt"></i></span>
                                        <input type="text" placeholder="Date" class="datepicker">
                                        <i class="la la-angle-down"></i>
                                    </div>
                                    <div class="field-select has-sub field-time">
                                        <span class="sl-icon"><i class="la la-clock"></i></span>
                                        <input type="text" placeholder="Time" readonly>
                                        <i class="la la-angle-down"></i>
                                        <div class="field-sub">
                                            <ul>
                                                <li><a href="#">12:00 AM</a></li>
                                                <li><a href="#">12:30 AM</a></li>
                                                <li><a href="#">1:00 AM</a></li>
                                                <li><a href="#">1:30 AM</a></li>
                                                <li><a href="#">2:00 AM</a></li>
                                                <li><a href="#">2:30 AM</a></li>
                                                <li><a href="#">3:00 AM</a></li>
                                                <li><a href="#">3:30 AM</a></li>
                                                <li><a href="#">4:00 AM</a></li>
                                                <li><a href="#">4:30 AM</a></li>
                                                <li><a href="#">5:00 AM</a></li>
                                                <li><a href="#">5:30 AM</a></li>
                                                <li><a href="#">6:00 AM</a></li>
                                                <li><a href="#">6:30 AM</a></li>
                                                <li><a href="#">7:00 AM</a></li>
                                                <li><a href="#">7:30 AM</a></li>
                                                <li><a href="#">8:00 AM</a></li>
                                                <li><a href="#">8:30 AM</a></li>
                                                <li><a href="#">9:00 AM</a></li>
                                                <li><a href="#">9:30 AM</a></li>
                                                <li><a href="#">10:00 AM</a></li>
                                                <li><a href="#">10:30 AM</a></li>
                                                <li><a href="#">11:00 AM</a></li>
                                                <li><a href="#">11:30 AM</a></li>
                                                <li><a href="#">12:00 PM</a></li>
                                                <li><a href="#">12:30 PM</a></li>
                                                <li><a href="#">1:00 PM</a></li>
                                                <li><a href="#">1:30 PM</a></li>
                                                <li><a href="#">2:00 PM</a></li>
                                                <li><a href="#">2:30 PM</a></li>
                                                <li><a href="#">3:00 PM</a></li>
                                                <li><a href="#">3:30 PM</a></li>
                                                <li><a href="#">4:00 PM</a></li>
                                                <li><a href="#">4:30 PM</a></li>
                                                <li><a href="#">5:00 PM</a></li>
                                                <li><a href="#">5:30 PM</a></li>
                                                <li><a href="#">6:00 PM</a></li>
                                                <li><a href="#">6:30 PM</a></li>
                                                <li><a href="#">7:00 PM</a></li>
                                                <li><a href="#">7:30 PM</a></li>
                                                <li><a href="#">8:00 PM</a></li>
                                                <li><a href="#">8:30 PM</a></li>
                                                <li><a href="#">9:00 PM</a></li>
                                                <li><a href="#">9:30 PM</a></li>
                                                <li><a href="#">10:00 PM</a></li>
                                                <li><a href="#">10:30 PM</a></li>
                                                <li><a href="#">11:00 PM</a></li>
                                                <li><a href="#">11:30 PM</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <input type="submit" name="submit" value="Request a book">
                                    <p class="note">You won't be charged yet</p>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
            $hotels = [
                ['name' => 'L\'Esterel', 'image' => 'L_Esterel.jpeg', 'rating' => 4.5, 'price' => 3],
                ['name' => 'Okko Hotels Cannes Centre', 'image' => 'Okko_Hotels.jpeg', 'rating' => 4.9, 'price' => 2],
                ['name' => 'Hotel Cannes Croisette', 'image' => 'Hotel_Croisette.jpeg', 'rating' => 9.1, 'price' => 4],
                ['name' => 'Citadines Croisette', 'image' => 'Hotel_Citadines_Croisette.jpeg', 'rating' => 7.4, 'price' => 3],
            ];
        @endphp

        <div class="similar-places">
            <div class="container">
                <h2 class="similar-places__title title">Похожие отели</h2>
                <div class="similar-places__content">
                    <div class="row">
                        @foreach($hotels as $hotel)
                            <div class="col-lg-3 col-md-6">
                                <div class="place-item">
                                    <div class="places-item hover__box">
                                        <div class="places-item__thumb hover__box__thumb">
                                            <a title="barca" href="{{ route('hotel') }}">
                                                <img src="{{ asset("theme/images/hotels/" . $hotel['image']) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="places-item__info">
                                            <h3><a href="{{ route('hotel') }}">{{ $hotel['name'] }}</a></h3>
                                            <div class="places-item__meta">
                                                <div class="places-item__reviews">
                                            <span class="places-item__number">
                                                <span class="places-item__number">
                                                    {{ $hotel['rating'] }}
                                                    <i class="la la-star"></i>
                                                </span>
                                            </span>
                                                </div>
                                                <div class="places-item__currency">
                                                    @for($i = 0; $i < $hotel['price']; $i++)$@endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection