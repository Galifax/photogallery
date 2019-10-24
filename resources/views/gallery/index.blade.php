@extends('layouts.app')

@section('title', 'Gallery')
@section('keywords', 'Gallery')
@section('description', 'Gallery')

@section('content')
<div class="d-flex justify-content-center" style="margin-top:147px;">
        <!-- <img class="zaika" src="/img/zaika.jpg" alt="zaika"> -->
    </div>

<section class="gallery" style="overflow: hidden;">
    <div class="container">
        <h3 class="section-title">
        
        </h3>
        {{--        <div class="filter-actions">--}}
        {{--            <button type="button" class="filter-btn main-btn" data-filter="*">All</button>--}}
        {{--            <button type="button" class="filter-btn main-btn" data-filter=".design">Design</button>--}}
        {{--            <button type="button" class="filter-btn main-btn" data-filter=".branding">Branding</button>--}}
        {{--        </div>--}}




        <ul id="lightgallery" class="grid portfolio-list">
            @foreach($galleries as $photo)
                <li class="horizontal gallery-item design" data-src="{{ $photo->getPhoto() }}"
                    data-sub-html="<h4>{{ $photo->name }}</h4>">
                    <a href="">
                        <img class="img-responsive" src="{{ $photo->getPhoto() }}">
                        <span class="img-title">{{ $photo->name }}</span>
                    </a>
                </li>
            @endforeach
        </ul>

        <div id="pagination">
            {{ $galleries->links() }}
        </div>


{{--        <div class="load-more">--}}
{{--            <button class="main-btn">Load More</button>--}}
{{--        </div>--}}
    </div>

    <!-- <div class="welcome-promo">
        <div class="container">
            <h3 class="promo-title">Welcom to my world of images.</h3>
            <button class="main-btn">Load More</button>
        </div>
    </div> -->
</section>
@endsection
