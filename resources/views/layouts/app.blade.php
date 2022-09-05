<!DOCTYPE html>
<html lang="ru">
@include('inc.head')
<body>
<div class="main-wrapper">
@include('inc.header')
    <div class="middle">
        @include('inc.sidebar')
        <div class="main-content">
            <div class="content-top">
                <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
                <div class="slider"><img src="{{asset('img/slider.png')}}" type="Image" class="image-main" alt=""></div>
            </div>
            @yield('main_content')
            @yield('about')
            @yield('news')
            @yield('orders')
            @yield('login')
            @yield('register')
            <div class="content-bottom"></div>
        </div>
    </div>
    @include('inc.footer')
</div>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
