@extends('layouts.app')

@section('title', 'Stocks')
@section('keywords', 'Stocks')
@section('description', 'Stocks')

@section('content')
<div>
    <div class="gallery-page-title" style="margin-top: 107px;">
        <div class="container">
            <h2 class="title">Акции</h2>
        </div>
    </div>

    <section class="stocks" style="overflow: hidden;">
        <div class="container">
            <div>
                <!-- start item -->
                <div class="stock_item">
                    <div class="stock_media">
                        <img src="https://template66362.motopreview.com/mt-demo/66300/66362/mt-content/uploads/2018/01/mt-1300-blog-img1.jpg"
                            alt="">
                    </div>
                    <div class="stock_content">
                        <h3 class="stock_title">METHODS OF THE RECRUITMENT</h3>
                        <span class="stock_time">31.01.2018 - 31.01.2019</span>
                        <p class="stock_descr">Search of staff is not an easy task. According to the departmental heads'
                            of
                            personnel management words, in order to find a personnel who will correspond to the relevant
                            customer needs and requirements, it is necessary to carry out a great job.</p>
                    </div>
                </div>
                <hr>
            </div><!-- end item -->

            <div class="stock_item">
                <div class="stock_media">
                    <img src="https://template66362.motopreview.com/mt-demo/66300/66362/mt-content/uploads/2018/01/mt-1300-blog-img1.jpg"
                        alt="">
                </div>
                <div class="stock_content">
                    <h3 class="stock_title">METHODS OF THE RECRUITMENT</h3>
                    <span class="stock_time">31.01.2018 - 31.01.2019</span>
                    <p class="stock_descr">Search of staff is not an easy task. According to the departmental heads' of
                        personnel management words, in order to find a personnel who will correspond to the relevant
                        customer needs and requirements, it is necessary to carry out a great job.</p>
                </div>
            </div>

            <hr>

            <div class="stock_item">
                <div class="stock_media">
                    <img src="https://template66362.motopreview.com/mt-demo/66300/66362/mt-content/uploads/2018/01/mt-1300-blog-img1.jpg"
                        alt="">
                </div>
                <div class="stock_content">
                    <h3 class="stock_title">METHODS OF THE RECRUITMENT</h3>
                    <span class="stock_time">31.01.2018 - 31.01.2019</span>
                    <p class="stock_descr">Search of staff is not an easy task. According to the departmental heads' of
                        personnel management words, in order to find a personnel who will correspond to the relevant
                        customer needs and requirements, it is necessary to carry out a great job.</p>
                </div>
                <hr>
            </div>
        </div>
    </section>
</div>
@endsection
