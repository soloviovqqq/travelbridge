<header id="header" class="site-header @if($transparentHeader) home-header @endif">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-12">
                <div class="site d-flex justify-content-between">
                    <div class="site__brand">
                        <a title="Logo" href="/" class="site__brand__logo">
                            @if($transparentHeader)
                                <img src="{{ asset('theme/images/assets/logo.png') }}" class="">
                            @else
                                <img src="{{ asset('theme/images/assets/logo_blue.png') }}" class="">
                            @endif
                        </a>
                    </div>
                    <div class="site__menu d-flex align-items-center">
                        <a title="Menu Icon" href="#" class="site__menu__icon">
                            <i class="las la-bars la-24-black"></i>
                        </a>
                        <div class="popup-background"></div>
                        <div class="popup popup--left">
                            <a title="Close" href="#" class="popup__close">
                                <i class="las la-times la-24-black"></i>
                            </a>
                            <div class="popup__content">
                                <div class="popup__menu popup__box">
                                    <ul>
                                        <li>
                                            <a href="{{ route('home') }}" title="Главная">Главная</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('group-tours') }}" title="Операторские туры">Операторские туры</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('tours') }}" title="Рекламные туры">Рекламные туры</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('agents') }}" title="Агентам">Агентам</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}" title="Контакты">О компании</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}" title="Контакты">Контакты</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-12">
                <div class="right-header align-right">
                    <nav class="main-menu">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}" title="Главная">Главная</a>
                            </li>
                            <li>
                                <a href="{{ route('group-tours') }}" title="Операторские туры">Операторские туры</a>
                            </li>
                            <li>
                                <a href="{{ route('tours') }}" title="Рекламные туры">Рекламные туры</a>
                            </li>
                            <li>
                                <a href="{{ route('agents') }}" title="Агентам">Агентам</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}" title="Контакты">О компании</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" title="Контакты">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
