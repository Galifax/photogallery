@extends('layouts.app')

@section('title', 'Home')
@section('keywords', 'Home')
@section('description', 'Home')

@section('content')
<section class="home-header" style="margin-top:107px;">
    <!-- <div class="home-header-logo">
        <img src="/img/mt-1300-home-logo.png" alt="">
    </div> -->
    <!-- <nav class="home-nav">
        <ul class="home-nav-list closed">
            <li class="home-nav-list-item"><a href="{{ route('home') }}">Главная</a></li>
            <li class="home-nav-list-item"><a href="{{ route('about') }}">о себе</a></li>
            <li class="home-nav-list-item"><a href="{{ route('gallery') }}">портфолио</a></li>
            <li class="home-nav-list-item"><a href="{{ route('pricing') }}">цены</a></li>
            <li class="home-nav-list-item"><a href="{{ route('stocks') }}">акции</a></li>
            <li class="home-nav-list-item"><a href="{{ route('contacts') }}">контакты</a></li>
        </ul>
        <button class="home-menu-btn">Меню</button>
    </nav> -->

  

    <div class="home-header-promo">

        <img class="fade-in" src="/img/zaika.jpg" alt="zaika">

        <h2 class="home-header-promo-title">
            ДОБРО ПОЖАЛОВАТЬ <br>
            <span>В МИР БЕСКОНЕЧНОЙ ЛЮБВИ И СЧАСТЬЯ !!!</span>
        </h2>
        <p class="home-header-promo-text">Рада приветствовать Вас на моем сайте. Я Зырина Юлиана семейный фотограф и
            фотограф новорожденных. Создаю неповторимую память в фото-историю Вашей семьи, ведь благодаря фото можно
            остановить время, которое так быстротечно и сохранить в памяти неповторимые моменты. Очень приятно со
            временем пересматривать фото, вспоминать и снова переживать те эмоции. В каждую фотосессию я вкладываю
            частичку своей души и очень благодарна каждой семье за выбор и доверие.
        </p>
    </div>
</section>

<section class="pricing">
    <div class="container">
        <div class="pricing-tables">
            <h3 class="pricing-tables-title">Category Title</h3>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="pricing-item">
                    <div class="price-block centreted">

                        <!-- <h3 class="block-title">Пакет минимальный</h3> -->
                        <p class="price-price">Kategory</p>
                        <!-- <div class="price">
                            <p class="price-price"><span class="currency">$</span>250</p>
                            <p class="time"></p>
                        </div> -->
                        <!-- <p class="bottom-text">
                        срок готовности 1-2 месяца
                        </p> -->
                    </div>
                    <div class="content">
                        <!-- <ul class="pricing-item-list">
                            <li>образ в обмотке</li>
                            <li>один образ в костюмчике и с одним реквизитом (костюмчик и реквизит на выбор)</li>
                            <li>фото с родителями</li>
                            <li> до 20-ти фото в обработке (на выбор фотографа)</li>
                            <li>результат на флешке в подарочной упаковке</li>
                        </ul> -->
                        <a href="#" class="main-btn">Перейти</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <div id="lightgalleryIndex" class="row index-small-gall">
            <div class="col-md-2 col-sm-4 gallery-item" data-src="./img/gall/mt-1300-home_gallery_3-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_3-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 gallery-item" data-src="./img/gall/mt-1300-home_gallery_2-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_2-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 gallery-item" data-src="./img/gall/mt-1300-home_gallery_4-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_4-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 gallery-item" data-src="./img/gall/mt-1300-home_gallery_5-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_5-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 gallery-item" data-src="./img/gall/mt-1300-home_gallery_6-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_6-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 gallery-item" data-src="./img/gall/mt-1300-home_gallery_7-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_7-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </div>
        </div> -->
@endsection
