@extends('layouts.app')

@section('title', 'Gallery')
@section('keywords', 'Gallery')
@section('description', 'Gallery')

@section('content')
<div class="gallery-page-title" style="margin-top: 107px;">
    <div class="container">
        <h2 class="title">gallery</h2>
    </div>
</div>

<section class="gallery" style="overflow: hidden;">
    <div class="container">
        <h3 class="section-title">
            OUR GALLERY
        </h3>


        <div class="filter-actions">
            <button type="button" class="filter-btn main-btn" data-filter="*">All</button>
            <button type="button" class="filter-btn main-btn" data-filter=".design">Design</button>
            <button type="button" class="filter-btn main-btn" data-filter=".branding">Branding</button>
        </div>


        <ul id="lightgallery" class="grid portfolio-list">
            <li class="horizontal gallery-item design" data-src="./img/gall/mt-1300-home_gallery_1-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_1-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </li>
            <li class="horizontal gallery-item design" data-src="./img/gall/mt-1300-home_gallery_2-1.jpg"
                data-sub-html="<h4>Fading Light</h4>">
                <a href="">
                    <img class="img-responsive" src="./img/gall/mt-1300-home_gallery_2-1.jpg">
                    <span class="img-title">Creativity</span>
                </a>
            </li>
            <li class="big gallery-item filter3" data-src="./img/gall/mt-1300-home_gallery_3-1.jpg"
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

        <div class="load-more">
            <button class="main-btn">Load More</button>
        </div>
    </div>

    <div class="welcome-promo">
        <div class="container">
            <h3 class="promo-title">Welcom to my world of images.</h3>
            <button class="main-btn">Load More</button>
        </div>
    </div>
</section>
@endsection
