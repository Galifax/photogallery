@extends('layouts.app')

@section('title', 'Stocks')
@section('keywords', 'Stocks')
@section('description', 'Stocks')

@section('content')
<div>
    <div class="d-flex justify-content-center" style="margin-top:107px;">
        <img class="zaika" src="/img/zaika.jpg" alt="zaika">
    </div>

    <section class="stocks" style="overflow: hidden;">
        <div class="container">
            @foreach($stocks as $stock)
            <div class="stock_item">
                <div class="stock_media">
                    <img src="{{ $stock->getPhoto() }}" alt="">
                </div>
                <div class="stock_content">
                    <h3 class="stock_title">{{ $stock->name }}</h3>
                    <span class="stock_time">{{ $stock->time_from }} - {{ $stock->time_to }}</span>
                    <p class="stock_descr">{!! $stock->announce !!}</p>

                    <div class="collapse" id="collapseExample{{ $stock->id }}">
                        <p class="stock_descr">{!! $stock->content !!}</p>
                    </div>
                    <a class="show-more" data-toggle="collapse" href="#collapseExample{{ $stock->id }}" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            Узнать больше
                    </a>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </section>
</div>
@endsection
