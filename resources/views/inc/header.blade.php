@section('header')
    <header class="main-header">
    <div class="logotype-container"><a href="/main" class="logotype-link"><img src={{asset('img/logo.png')}} alt="Логотип"></a></div>
    <nav class="main-navigation">
        <ul class="nav-list">
            <li class="nav-list__item"><a href="/main" class="nav-list__item__link">Главная</a></li>
            <li class="nav-list__item"><a href="/orders" class="nav-list__item__link">Мои заказы</a></li>
            <li class="nav-list__item"><a href="/news" class="nav-list__item__link">Новости</a></li>
            <li class="nav-list__item"><a href="/about" class="nav-list__item__link">О компании</a></li>
        </ul>
    </nav>
    <div class="header-contact">
        <div class="header-contact__phone"><a href="/about" class="header-contact__phone-link">Телефон: 33-333-33</a></div>
    </div>
    <div class="header-container">
        <div class="payment-container">
            <div class="payment-basket__status">
                <div class="payment-basket__status__icon-block"><a class="payment-basket__status__icon-block__link"><i class="fa fa-shopping-basket"></i></a></div>
                <div class="payment-basket__status__basket"><span class="payment-basket__status__basket-value">0</span><span class="payment-basket__status__basket-value-descr">товаров</span></div>
            </div>
        </div>
        <div class="authorization-block">
                @if (\Illuminate\Support\Facades\Auth::check())
                <a href="#" class="authorization-block__link">{{Illuminate\Support\Facades\Auth::user()->name}}</a>
                    <a href="{{route('logout')}}" class="authorization-block__link">Выйти</a>
                @else
                    <a href="{{route('register')}}" class="authorization-block__link">Регистрация</a>
                    <a href="{{route('login')}}" class="authorization-block__link">Войти</a>
                @endif

        </div>
    </div>
</header>
