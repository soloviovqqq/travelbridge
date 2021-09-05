@extends('layout.main')

@section('content')
    <main id="main" class="site-main">
        <div class="page-title page-title--small align-left" style="background-image: url(theme/images/bg/bg-about.png);">
            <div class="container">
                <div class="page-title__content">
                    <h1 class="page-title__name">Агентам</h1>
                    <p class="page-title__slogan">Tell you about us</p>
                </div>
            </div>
        </div>
        <div class="site-content">
            <div class="container">
                <div class="company-info flex-inline">
                    <div class="ci-content mb-5">
                        {!! $agency_text !!}
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
