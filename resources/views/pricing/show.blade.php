@extends('layouts.app')

@section('title', $category->title)
@section('keywords', $category->meta_keywords)
@section('description', $category->meta_description)

@section('content')
<div class="d-flex justify-content-center" style="margin-top:107px;">
    <img class="zaika" src="/img/zaika.jpg" alt="zaika">
</div>
<div class="container">
    <ul class="categories-list">
        @foreach($categories as $item)
        <li>
            <a href="{{ route('pricingShow', ['slug' => $item->slug]) }}" class="main-btn">{{ $item->name }}</a>
        </li>
        @endforeach
    </ul>

    <div class="pricing-item row">
        <div class="price-block col-xs-12 col-md-6">
            <h3 class="block-title">{{ $category->name }}</h3>
            <div class="price">
                <p class="price-price"><span class="currency">$</span>{{ $category->price }}</p>
                <p class="time"></p>
            </div>
            <p class="bottom-text">
                срок готовности {{ $category->time }}
            </p>
        </div>
        <div class="content col-xs-12 col-md-6">
            {!! $category->content !!}
        </div>
    </div>

    <ul id="lightgallery" class="grid portfolio-list">
        @foreach($gallery as $item)
        <li class="horizontal gallery-item design" data-src="{{ $item->getPhoto() }}"
            data-sub-html="<h4>{{ $item->name }}</h4>">
            <a href="">
                <img class="img-responsive" src="{{ $item->getPhoto() }}">
                <span class="img-title">{{ $item->name }}</span>
            </a>
        </li>
        @endforeach
    </ul>
    <div id="pagination">
        {{ $gallery->links() }}
    </div>
</div>
@endsection
