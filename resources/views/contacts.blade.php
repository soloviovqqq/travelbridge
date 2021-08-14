@extends('layout.main')

@section('content')
    <main id="main" class="site-main contact-main">
        <div class="page-title page-title--small align-left" style="background-image: url(theme/images/bg/bg-about.png);">
            <div class="container">
                <div class="page-title__content">
                    <h1 class="page-title__name">Наши контакты</h1>
                    <p class="page-title__slogan">Мы ждем вашего звока</p>
                </div>
            </div>
        </div>
        <div class="site-content site-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-text">
                            <div class="contact-box">
                                <h3>Наши контакты</h3>
                                <p>г. Киев, ул. Богдана Хмельницкого 3 А</p>
                                <p>+38 (066) 367 93 18</p>
                                <p>+38 (050) 959 89 88</p>
                                <p>book@travelbridge.com.ua</p>
                                <p>travelbridge@ukr.net</p>
                            </div>
                            <div class="footer__top__nav footer__top__nav--contact">
                            <ul>
                                <li class="facebook">
                                    <a title="Facebook" href="https://www.facebook.com/travelbridge.ua" target="_blank">
                                        <i class="la la-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a title="Instagram" href="https://www.instagram.com/travelbridge.ua" target="_blank">
                                        <i class="la la-instagram"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a title="Twitter" href="https://t.me/travelbridge" target="_blank">
                                        <i class="la la-telegram"></i>
                                    </a>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                            <h2>Get in touch with us</h2>
                            <form action="#" method="POST" class="form-underline">
                                <div class="field-inline">
                                    <div class="field-input">
                                        <input type="text" name="first_name" value="" placeholder="First Name">
                                    </div>
                                    <div class="field-input">
                                        <input type="text" name="last_name" value="" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="field-input">
                                    <input type="email" name="email" value="" placeholder="Email">
                                </div>
                                <div class="field-input">
                                    <input type="tel" name="tel" value="" placeholder="Phone Number">
                                </div>
                                <div class="field-textarea">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="field-submit">
                                    <input type="submit" value="Send Message" class="btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
