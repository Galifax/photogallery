@extends('layouts.app')

@section('title', 'Pricing')
@section('keywords', 'Pricing')
@section('description', 'Pricing')

@section('content')
<div class="page-title" style="margin-top: 107px;">
    <div class="container-fluid" style="height:100%">
        <div class="row" style="height:100%">
            <div class="col-md-6 d-none d-md-block"></div>
            <div class="col-md-6 row align-items-center">
                <div>
                    <h2 class="pricing-title">
                        We Offer Fair and Affordable Prices
                    </h2>
                    <span class="pricing-subtitle">so everybody could have an opportunity to receive professional
                        maintenance help any time!</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="pricing">
    <div class="container">
        <div class="pricing-tables">
            <h3 class="pricing-tables-title">PRICING TABLES</h3>
            <p class="pricing-tables-text">Check our pricing tables to know what options is right for you.</p>
            <p class="pricing-tables-text">You can contact our Customer Service representative to calculate approximate
                price for your project depending on your area and amount of work that needs to be done.</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="pricing-item">
                    <div class="price-block">

                        <h3 class="block-title">Пакет минимальный</h3>
                        <div class="price">
                            <p class="price-price"><span class="currency">$</span>250</p>
                            <p class="time"></p>
                        </div>
                        <p class="bottom-text">
                        срок готовности 1-2 месяца
                        </p>
                    </div>
                    <div class="content">
                        <ul class="pricing-item-list">
                            <li>образ в обмотке</li>
                            <li>один образ в костюмчике и с одним реквизитом (костюмчик и реквизит на выбор)</li>
                            <li>фото с родителями</li>
                            <li> до 20-ти фото в обработке (на выбор фотографа)</li>
                            <li>результат на флешке в подарочной упаковке</li>
                        </ul>
                        <p>


                        </p>
                        <!-- <button class="main-btn">MAKE AN APPOINTMENT</button> -->
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="pricing-item">
                    <div class="price-block">
                        <h3 class="block-title">Пакет комфорт</h3>
                        <div class="price">
                            <p class="price-price"><span class="currency">$</span>450</p>
                            <p class="time"></p>
                        </div>
                        <p class="bottom-text">
                            срок готовности 2-3 месяца
                        </p>
                    </div>
                    <div class="content">
                        <ul class="pricing-item-list">
                            <li>образ в обмотке</li>
                            <li>два образа в костюмчике с двумя реквизитами (костюмчик и реквизит на выбор)</li>
                            <li>фото с родителями</li>
                            <li>до 20-ти фото в обработке (на выбор фотографа)</li>
                            <li>мини-бук 15*15</li>
                            <li>результат на флешке в подарочной упаковке</li>
                        </ul>
                        <!-- <button class="main-btn">MAKE AN APPOINTMENT</button> -->
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="pricing-item">
                    <div class="price-block">
                        <h3 class="block-title">Пакет оптимальный </h3>
                        <div class="price">
                            <p class="price-price"><span class="currency">$</span>550</p>
                            <p class="time"></p>
                        </div>
                        <p class="bottom-text">
                            срок готовности 2-3 месяца
                        </p>
                    </div>
                    <div class="content">
                        <ul class="pricing-item-list">
                            <li>образ в обмотке</li>
                            <li>три образа в костюмчике с тремя реквизитами (костюмчик и реквизит на выбор)</li>
                            <li>фото с родителями</li>
                            <li>до 30-ти фото в обработке (на выбор фотографа)</li>
                            <li>мини-бук 25*25</li>
                            <li>результат на флешке в подарочной упаковке</li>
                        </ul>
                        <!-- <button class="main-btn">MAKE AN APPOINTMENT</button> -->
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="pricing-item">
                    <div class="price-block">
                        <h3 class="block-title">Пакет премиум</h3>
                        <div class="price">
                            <p class="price-price"><span class="currency">$</span>750</p>
                            <p class="time"></p>
                        </div>
                        <p class="bottom-text">
                             срок готовности 2-3 месяца
                        </p>
                    </div>
                    <div class="content">
                        <ul class="pricing-item-list">
                            <li>образ в обмотке</li>
                            <li>три образа в костюмчике с тремя реквизитами (костюмчик и реквизит на выбор)</li>
                            <li>фото с родителями</li>
                            <li>до 30-ти фото в обработке (на выбор фотографа)</li>
                            <li>фото-книга на 10 разворотов</li>
                            <li> результат на флешке в подарочной упаковке +подарок от фотографа</li>
                        </ul>
                        <!-- <button class="main-btn">MAKE AN APPOINTMENT</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .price-block {
        background-color: #d1c8bc;
        text-align: center;
    }

    .price-block .price {
        background-image: url('./img/mt-1300-pricing-table-bg.png');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .price-price {
        font-weight: 700;
        font-style: normal;
        font-family: 'Roboto Mono', monospace;
        color: #ffffff;
        font-size: 48px;
        line-height: 1.3;
        letter-spacing: 5px;
        margin: 0;
    }

    .price-block .price-price .currency {
        font-size: 26px;
    }

    .bottom-text {
        font-weight: 400;
        font-style: normal;
        font-family: 'Roboto Mono', monospace;
        color: #fff;
        font-size: 16px;
        line-height: 1.9;
        letter-spacing: 0px;
        padding: 30px;
        margin: 0px;
    }

    .price-block .time {
        font-weight: 400;
        font-style: normal;
        font-family: 'Roboto Mono', monospace;
        color: #ffffff;
        font-size: 14px;
        line-height: 1.4;
        letter-spacing: 0px;
    }

    .block-title {
        font-weight: 400;
        font-style: normal;
        font-family: 'Roboto Mono', monospace;
        color: #ffffff;
        font-size: 18px;
        line-height: 1.8;
        letter-spacing: 1px;
        padding: 30px;
        margin: 0px;
        text-align: center;
    }


    .pricing-item .content {
        padding: 30px;
        border: 1px solid #e7e7e7;
    }

    .pricing-item .content .main-btn {
        width: 100%;
        margin-top: 30px;
    }

    .pricing-item-list {
        list-style-type: none;
        padding: 0;
    }

    .pricing-item-list li {
        font-weight: 400;
        font-style: normal;
        font-family: 'Roboto Mono', monospace;
        color: #7f7f7f;
        font-size: 16px;
        line-height: 1.9;
        letter-spacing: 0px;
        padding: 0 0 0 21px;
        margin-bottom: 5px;
        position: relative;
    }

    .pricing-item-list li:before {
        position: absolute;
        display: inline-block;
        top: 50%;
        left: 0;
        -webkit-transform: translate(0, -50%);
        transform: translate(0, -50%);
        z-index: 0;
        font: 14px/14px FontAwesome;
        color: #d1c8bc;
        content: "\f00c";
        text-align: center;
    }

    .pricing-tables {
        text-align: center;
        margin-top: 80px;
    }

    .pricing-tables .pricing-tables-title {
        font-weight: 700;
        font-style: normal;
        font-family: 'Roboto Mono', monospace;
        color: #1e1d24;
        font-size: 24px;
        line-height: 1.3;
        letter-spacing: 7px;
        margin-bottom: 30px;
    }

    .pricing-tables .pricing-tables-text {
        font-weight: 400;
        font-style: normal;
        font-family: 'Roboto Mono', monospace;
        color: #7f7f7f;
        font-size: 16px;
        line-height: 1.9;
        letter-spacing: 0px;
        margin-bottom: 30px;
    }

    .page-title {
        background-image: url('./img/mt-1300-pricing-bg-1.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        height: 514px;
    }

    .pricing-title {
        font-weight: 700;
        font-style: normal;
        font-family: 'Roboto Mono', monospace;
        color: #1e1d24;
        font-size: calc(10px + 4vmin);
        line-height: 1.3;
        letter-spacing: 5px;
    }

    .pricing-subtitle {
        font-weight: 400;
        font-style: normal;
        font-size: 16px;
        line-height: 1.9;
        letter-spacing: 0px;
    }


    .main-btn {
        font-family: 'Roboto Mono', monospace;
        font-weight: 700;
        font-style: normal;
        color: #ffffff;
        background-color: #616165;
        border-color: #616165;
        font-size: 14px;
        padding: 17px 29px;
        position: relative;
        text-align: center;
        z-index: 1;
        -webkit-backface-visibility: hidden;
        transition: .3s;
        line-height: 18px;
        border: 1px solid;
        letter-spacing: .56px;
        cursor: pointer;

    }

    .main-btn:hover,
    .main-btn:active,
    .main-btn:focus {
        color: #ffffff;
        background-color: #d1c8bc;
        border-color: #d1c8bc;
        outline: none;
    }

</style>
@endsection
