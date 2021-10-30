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
                                <p>Украина, г. Киев, 04119, ул. Дегтяревская 11, оф 3</p>
                                <p>book@travelbridge.com.ua</p>
                                <p>travelbridge@ukr.net</p>
                                <p>Звонок/ Viber/ WhatsApp/Telegram</p>
                                <p>+38 (066) 367 93 18</p>
                                <p>+38 (095) 128 70 77</p>
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
                            <form action="{{ route('contact.send-message') }}" method="post" class="form-underline">
                                @csrf
                                <div class="field-input is-invalid">
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Ваше имя"
                                           class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="field-input">
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Ваш email"
                                           class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="field-input">
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Ваш номер телефона"
                                           class="form-control @error('phone') is-invalid @enderror">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="field-textarea">
                                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" placeholder="Ваше сообщение">{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="field-submit mb-4">
                                    <input type="submit" value="Отправить сообщение" class="btn">
                                </div>
                                @if(Session::has('message'))
                                    <div class="alert alert-info" role="alert">
                                        {{ Session::get('message') }}
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
