@extends('layouts.app')

@section('title', 'Home')
@section('keywords', 'Home')
@section('description', 'Home')

@section('content')
<section class="home-header" style="margin-top:147px;">

    <div class="home-header-promo">

        <!-- <img class="fade-in" src="/img/zaika.jpg" alt="zaika">s -->

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
            <h3 class="pricing-tables-title">Виды фотосессий</h3>
        </div>
        <div class="row">
            @foreach ($category as $item)
            <div class="col-md-6">
                <div class="pricing-item">
                    <div class="price-block centreted bg-image" style="background-image: url({{ $item->getPhoto() }})">

                    </div>
                    <div class="content">
                        <a href="{{ route('pricingShow', ['slug' => $item->slug]) }}" class="main-btn">{{ $item->name }}</a>
                    </div>
                </div>
            </div>
            @endforeach
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
