@extends('layouts.app')

@section('title', 'About')
@section('keywords', 'About')
@section('description', 'About')

@section('content')
<div>
    <!-- <div class="gallery-page-title" style="margin-top: 107px;">
        <div class="container">
            <h2 class="title">О себе</h2>
        </div>
    </div> -->

    <section class="stocks" style="overflow: hidden;min-height: calc(100vh - 336px);">
        <div class="d-flex justify-content-center" style="margin-top:107px;">
            <img class="zaika" src="/img/zaika.jpg" alt="zaika">
        </div>
        <div class="container">
            {!! $about->text !!}
        </div>
    </section>
</div>
@endsection
