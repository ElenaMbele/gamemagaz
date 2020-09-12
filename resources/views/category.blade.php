@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="content-top">
            <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
            <div class="slider"><img src="{{asset('img/slider.png')}}" alt="Image" class="image-main"></div>
        </div>
        <div class="content-middle">
            <div class="content-head__container">
                <div class="content-head__title-wrap">
                    <div class="content-head__title-wrap__title bcg-title">Игры в разделе {{$category->name}}</div>
                </div>
                <div class="content-head__search-block">
                    <div class="search-container">
                        <form class="search-container__form">
                            <input type="text" class="search-container__form__input">
                            <button class="search-container__form__btn">search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-main__container">
                <div class="products-category__list">
                    @foreach($categoriesProducts as $item)
                    <div class="products-category__list__item">
                        <div class="products-category__list__item__title-product"><a href="{{route('order', ['product' => $item])}}">{{$item->name}}</a></div>
{{--                        <div class="products-category__list__item__thumbnail"><a href="#" class="products-category__list__item__thumbnail__link"><img src="{{$item->image}}" alt="Preview-image"></a></div>--}}
                        <div class="products-category__list__item__thumbnail"><a href="{{route('order', ['product' => $item])}}" class="products-category__list__item__thumbnail__link"><img src="../{{"storage/" . $item->image}}" alt="Preview-image"></a></div>
                        <div class="products-category__list__item__description"><span class="products-price">{{$item->price}} руб.</span><a href="{{route('order', ['product' => $item])}}" class="btn btn-blue">Купить</a></div>
                    </div>
                    @endforeach
{{--                    <div class="products-category__list__item">--}}
{{--                        <div class="products-category__list__item__title-product"><a href="#">Deus Ex: Mankind Divided</a></div>--}}
{{--                        <div class="products-category__list__item__thumbnail"><a href="#" class="products-category__list__item__thumbnail__link"><img src="img/cover/game-3.jpg" alt="Preview-image"></a></div>--}}
{{--                        <div class="products-category__list__item__description"><span class="products-price">400 руб.</span><a href="#" class="btn btn-blue">Купить</a></div>--}}
{{--                    </div>--}}
{{--                    <div class="products-category__list__item">--}}
{{--                        <div class="products-category__list__item__title-product"><a href="#">The Witcher 3: Wild Hunt</a></div>--}}
{{--                        <div class="products-category__list__item__thumbnail"><a href="#" class="products-category__list__item__thumbnail__link"><img src="img/cover/game-1.jpg" alt="Preview-image"></a></div>--}}
{{--                        <div class="products-category__list__item__description"><span class="products-price">400 руб.</span><a href="#" class="btn btn-blue">Купить</a></div>--}}
{{--                    </div>--}}
{{--                    <div class="products-category__list__item">--}}
{{--                        <div class="products-category__list__item__title-product"><a href="#">Rocket League</a></div>--}}
{{--                        <div class="products-category__list__item__thumbnail"><a href="#" class="products-category__list__item__thumbnail__link"><img src="img/cover/game-7.jpg" alt="Preview-image"></a></div>--}}
{{--                        <div class="products-category__list__item__description"><span class="products-price">400 руб.</span><a href="#" class="btn btn-blue">Купить</a></div>--}}
{{--                    </div>--}}
{{--                    <div class="products-category__list__item">--}}
{{--                        <div class="products-category__list__item__title-product"><a href="#">Dishonored 2</a></div>--}}
{{--                        <div class="products-category__list__item__thumbnail"><a href="#" class="products-category__list__item__thumbnail__link"><img src="img/cover/game-8.jpg" alt="Preview-image"></a></div>--}}
{{--                        <div class="products-category__list__item__description"><span class="products-price">400 руб.</span><a href="#" class="btn btn-blue">Купить</a></div>--}}
{{--                    </div>--}}
{{--                    <div class="products-category__list__item">--}}
{{--                        <div class="products-category__list__item__title-product"><a href="#">This War of Mine</a></div>--}}
{{--                        <div class="products-category__list__item__thumbnail"><a href="#" class="products-category__list__item__thumbnail__link"><img src="img/cover/game-9.jpg" alt="Preview-image"></a></div>--}}
{{--                        <div class="products-category__list__item__description"><span class="products-price">400 руб.</span><a href="#" class="btn btn-blue">Купить</a></div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="content-footer__container">
                <ul class="page-nav">
                    <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-nav__item"><a href="#" class="page-nav__item__link">1</a></li>
                    <li class="page-nav__item"><a href="#" class="page-nav__item__link">2</a></li>
                    <li class="page-nav__item"><a href="#" class="page-nav__item__link">3</a></li>
                    <li class="page-nav__item"><a href="#" class="page-nav__item__link">4</a></li>
                    <li class="page-nav__item"><a href="#" class="page-nav__item__link">5</a></li>
                    <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="content-bottom"></div>
    </div>
    </div>

@endsection
