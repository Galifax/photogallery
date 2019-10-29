@extends('layouts.app')

@section('title', $category->title)
@section('keywords', $category->meta_keywords)
@section('description', $category->meta_description)

@section('content')
<div class="d-flex justify-content-center" style="margin-top:147px;">
    <!-- <img class="zaika" src="/img/zaika.jpg" alt="zaika"> -->
</div>
<div class="container" style="margin-bottom:20px;">
    <ul class="categories-list">
        @foreach($categories as $item)
        <li>
            <a href="{{ route('pricingShow', ['slug' => $item->slug]) }}" class="main-btn">{{ $item->name }}</a>
        </li>
        @endforeach
    </ul>

    <div class="d-flex-juctify-center">
        @foreach($category->subcategory as $subcategory)
        <div class="pricing-item" >
            <div class="price-block">
                <h3 class="block-title">{{ $subcategory->name }}</h3>
                <div class="price">
                    <p class="price-price"><span class="currency">₴</span>{{ $subcategory->price }}</p>
                    <p class="time"></p>
                </div>
                <p class="bottom-text">
                    срок готовности {{ $subcategory->time }}
                </p>
            </div>
            <div class="content">
                {!! $subcategory->content !!}
            </div>
        </div>
        @endforeach
    </div>

    <div class="hidden-sm">
    <ul id="imageGallery" >
    @foreach($gallery as $item)
        <li class="gallfix" data-thumb="{{ $item->getPhoto() }}"
            data-src="{{ $item->getPhoto() }}">
            <img
                src="{{ $item->getPhoto() }}" width="100%"/>
        </li>
        @endforeach
    </ul>
    </div>
    <div class="show-sm">
    <ul id="lightgallery" class="grid portfolio-list">
            @foreach($gallery as $photo)
                <li class="horizontal gallery-item design" data-src="{{ $photo->getPhoto() }}"
                    data-sub-html="<h4>{{ $photo->name }}</h4>">
                    <a href="">
                        <img class="img-responsive" src="{{ $photo->getPhoto() }}">
                        <span class="img-title">{{ $photo->name }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
        </div>
    <div id="pagination">
        {{ $gallery->links() }}
    </div>
</div>
@endsection
