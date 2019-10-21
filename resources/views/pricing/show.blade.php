@extends('layouts.app')

@section('title', $category->title)
@section('keywords', $category->meta_keywords)
@section('description', $category->meta_description)

@section('content')
<div class="d-flex justify-content-center" style="margin-top:107px;">
    <img class="zaika" src="/img/zaika.jpg" alt="zaika">
</div>
<div class="container" style="margin-bottom:20px;">
    <ul class="categories-list">
        @foreach($categories as $category)
        <li>
            <a href="{{ route('pricingShow', ['slug' => $category->slug]) }}" class="main-btn">{{ $category->name }}</a>
        </li>
        @endforeach
    </ul>

    <div class="d-flex-juctify-center">
        <div class="pricing-item">
            <div class="price-block">
                <h3 class="block-title">{{ $category->name }}</h3>
                <div class="price">
                    <p class="price-price"><span class="currency">$</span>{{ $category->price }}</p>
                    <p class="time"></p>
                </div>
                <p class="bottom-text">
                    срок готовности {{ $category->time }}
                </p>
            </div>
            <div class="content">
                {!! $category->content !!}
            </div>
        </div>

        <div class="pricing-item">
            <div class="price-block">
                <h3 class="block-title">{{ $category->name }}</h3>
                <div class="price">
                    <p class="price-price"><span class="currency">$</span>{{ $category->price }}</p>
                    <p class="time"></p>
                </div>
                <p class="bottom-text">
                    срок готовности {{ $category->time }}
                </p>
            </div>
            <div class="content">
                {!! $category->content !!}
            </div>
        </div>

        <div class="pricing-item">
            <div class="price-block">
                <h3 class="block-title">{{ $category->name }}</h3>
                <div class="price">
                    <p class="price-price"><span class="currency">$</span>{{ $category->price }}</p>
                    <p class="time"></p>
                </div>
                <p class="bottom-text">
                    срок готовности {{ $category->time }}
                </p>
            </div>
            <div class="content">
                {!! $category->content !!}
            </div>
        </div>
    </div>

    <ul id="imageGallery">
    @foreach($gallery as $item)
        <li data-thumb="https://mobimg.b-cdn.net/pic/v2/gallery/preview/gomer_simpson_homer_simpson-multfilmy-simpsony_the_simpsons-24399.jpg"
            data-src="https://mobimg.b-cdn.net/pic/v2/gallery/preview/gomer_simpson_homer_simpson-multfilmy-simpsony_the_simpsons-24399.jpg">
            <img
                src="https://mobimg.b-cdn.net/pic/v2/gallery/preview/gomer_simpson_homer_simpson-multfilmy-simpsony_the_simpsons-24399.jpg" />
        </li>
        @endforeach
    </ul>

    <!-- <ul id="lightgallery" class="grid portfolio-list">
        @foreach($gallery as $item)
        <li class="horizontal gallery-item design" data-src="{{ $item->getPhoto() }}"
            data-sub-html="<h4>{{ $item->name }}</h4>">
            <a href="">
                <img class="img-responsive" src="{{ $item->getPhoto() }}">
                <span class="img-title">{{ $item->name }}</span>
            </a>
        </li>
        @endforeach
    </ul> -->
    <!-- <div id="pagination">
        {{ $gallery->links() }}
    </div> -->
</div>
@endsection
