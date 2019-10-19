@extends('layouts.app')

@section('title', 'Pricing')
@section('keywords', 'Pricing')
@section('description', 'Pricing')

@section('content')
<div class="d-flex justify-content-center" style="margin-top:107px;">
    <img class="zaika" src="/img/zaika.jpg" alt="zaika">
</div>

<ul class="categories-list">
    <li>
         <a href="#" class="main-btn">category 1</a>
    </li>
    <li>
    <a href="#" class="main-btn">category 2</a>
    </li>
    <li>
    <a href="#" class="main-btn">category 3</a>
    </li>
    <li>
    <a href="#" class="main-btn">category 4</a>
    </li>
    <li>
    <a href="#" class="main-btn">category 5</a>
    </li>
    <li>
    <a href="#" class="main-btn">category 6</a>
    </li>
    <li>
    <a href="#" class="main-btn">category 7</a>
    </li>
</ul>

<div class="pricing-item row">
    <div class="price-block col-xs-12 col-md-6">
        <h3 class="block-title">Category</h3>
        <div class="price">
            <p class="price-price"><span class="currency">$</span>250</p>
            <p class="time"></p>
        </div>
        <p class="bottom-text">
            срок готовности 1-2 месяца
        </p>
    </div>
    <div class="content col-xs-12 col-md-6">
        <ul class="pricing-item-list">
            <li>образ в обмотке</li>
            <li>один образ в костюмчике и с одним реквизитом (костюмчик и реквизит на выбор)</li>
            <li>фото с родителями</li>
            <li> до 20-ти фото в обработке (на выбор фотографа)</li>
            <li>результат на флешке в подарочной упаковке</li>
        </ul>
        <!-- <a href="#" class="main-btn">Перейти</a> -->
    </div>
</div>

<ul id="lightgallery" class="grid portfolio-list">
    <li class="horizontal gallery-item design" data-src="https://tehnot.com/wp-content/uploads/2017/03/android-o-00.jpg"
        data-sub-html="<h4>Fading Light</h4>">
        <a href="">
            <img class="img-responsive" src="https://tehnot.com/wp-content/uploads/2017/03/android-o-00.jpg">
            <span class="img-title">123</span>
        </a>
    </li>

    <li class="horizontal gallery-item design" data-src="https://tehnot.com/wp-content/uploads/2017/03/android-o-00.jpg"
        data-sub-html="<h4>Fading Light</h4>">
        <a href="">
            <img class="img-responsive" src="https://tehnot.com/wp-content/uploads/2017/03/android-o-00.jpg">
            <span class="img-title">123</span>
        </a>
    </li>

    <li class="horizontal gallery-item design" data-src="https://tehnot.com/wp-content/uploads/2017/03/android-o-00.jpg"
        data-sub-html="<h4>Fading Light</h4>">
        <a href="">
            <img class="img-responsive" src="https://tehnot.com/wp-content/uploads/2017/03/android-o-00.jpg">
            <span class="img-title">123</span>
        </a>
    </li>

    <li class="horizontal gallery-item design" data-src="https://tehnot.com/wp-content/uploads/2017/03/android-o-00.jpg"
        data-sub-html="<h4>Fading Light</h4>">
        <a href="">
            <img class="img-responsive" src="https://tehnot.com/wp-content/uploads/2017/03/android-o-00.jpg">
            <span class="img-title">123</span>
        </a>
    </li>

    <li class="horizontal gallery-item design" data-src="https://tehnot.com/wp-content/uploads/2017/03/android-o-00.jpg"
        data-sub-html="<h4>Fading Light</h4>">
        <a href="">
            <img class="img-responsive" src="https://tehnot.com/wp-content/uploads/2017/03/android-o-00.jpg">
            <span class="img-title">123</span>
        </a>
    </li>
</ul>
@endsection
