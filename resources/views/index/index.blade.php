@extends('layouts.app')

@section('title', 'Home')
@section('keywords', 'Home')
@section('description', 'Home')

@section('content')
<section class="home-header" style="margin-top:-10px;">
    <div class="home-header-logo">
        <img src="/img/mt-1300-home-logo.png" alt="">
    </div>
    <nav class="home-nav">
        <ul class="home-nav-list closed">
            <li class="home-nav-list-item"><a href="{{ route('home') }}">Главная</a></li>
            <li class="home-nav-list-item"><a href="{{ route('about') }}">о себе</a></li>
            <li class="home-nav-list-item"><a href="{{ route('gallery') }}">портфолио</a></li>
            <li class="home-nav-list-item"><a href="{{ route('pricing') }}">цены</a></li>
            <li class="home-nav-list-item"><a href="{{ route('stocks') }}">акции</a></li>
            <li class="home-nav-list-item"><a href="{{ route('contacts') }}">контакты</a></li>
        </ul>
        <button class="home-menu-btn">Меню</button>
    </nav>



    <div class="home-header-promo">
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

<section class="gallery">
    <div class="container">
        <h3 class="section-title">
            MY LATEST WORKS
        </h3>

        <ul id="lightgallery" class="grid">
            <li class="horizontal gallery-item" data-src="./img/gall/mt-1300-home_gallery_1-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_1-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </li>
            <li class="horizontal gallery-item" data-src="./img/gall/mt-1300-home_gallery_2-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_2-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </li>
            <li class="big gallery-item" data-src="./img/gall/mt-1300-home_gallery_3-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_3-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </li>
            <li class="normal gallery-item" data-src="./img/gall/mt-1300-home_gallery_4-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_4-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </li>
            <li class="normal gallery-item" data-src="./img/gall/mt-1300-home_gallery_5-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_5-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </li>
            <li class="vertical gallery-item" data-src="./img/gall/mt-1300-home_gallery_6-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_6-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </li>
            <li class="big gallery-item" data-src="./img/gall/mt-1300-home_gallery_7-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_7-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </li>
            <li class="horizontal  gallery-item" data-src="./img/gall/mt-1300-home_gallery_8-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_8-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </li>
            <li class="normal gallery-item" data-src="./img/gall/mt-1300-home_gallery_9-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_9-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </li>
            <li class="big gallery-item" data-src="./img/gall/mt-1300-home_gallery_10-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_10-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </li>
            <li class="vertical gallery-item" data-src="./img/gall/mt-1300-home_gallery_11-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_11-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </li>
        </ul>

        <!-- <div class="load-more">
            <button class="main-btn">Load More</button>
        </div> -->
    </div>

    <!-- <div class="subscribe-promo">
        <div class="container">
            <h3 class="promo-title">FOLLOW OUR UPDATES<br>
                <span>
                    Subscribe to receive the hottest news and information about updates and future events!
                </span>
            </h3>
            <input name="E-mail" placeholder="Your e-mail" type="text">
            <button class="main-btn">Subscribe</button>
        </div>
    </div> -->
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
