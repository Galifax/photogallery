@extends('layouts.app')

@section('title', 'Contacts')
@section('keywords', 'Contacts')
@section('description', 'Contacts')

@section('content')
<iframe
    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d20309.075323923767!2d30.4721233!3d50.4851493!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1570607856770!5m2!1sru!2sua"
    width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
<div class="container">
    <div class="row contacts">
        <div class="col-md-4">
            <div class="contact-item">
                <div class="row flex-nowrap">
                    <div class="col-xs-4">
                        <img src="/img/contacts/mt-1300-contacts-img1.png">
                    </div>
                    <div class="col-xs-8 d-flex align-items-center">
                        <ul class="contact-list">
                            <li class="contact-list-title">
                                Phone:
                            </li>
                            <li class="contact-list-item">
                                <a href="">(719) 445-2808;</a>
                            </li>
                            <li class="contact-list-item">
                                <a href="">​​​​​​​(719) 445-2809</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-item">
                <div class="row flex-nowrap">
                    <div class="col-xs-4">
                        <img src="/img/contacts/mt-1300-contacts-img2.png">
                    </div>
                    <div class="col-xs-8 d-flex align-items-center">
                        <ul class="contact-list">
                            <li class="contact-list-title">
                                Address:
                            </li>
                            <li class="contact-list-item">
                                4578 Marmora Road, Glasgow
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-item">
                <div class="row flex-nowrap">
                    <div class="col-xs-4">
                        <img src="/img/contacts/mt-1300-contacts-img3.png">
                    </div>
                    <div class="col-xs-8 d-flex align-items-center">
                        <ul class="contact-list">
                            <li class="contact-list-title">
                                E-mail:
                            </li>
                            <li class="contact-list-item">
                                <a href="">info@demolink.org</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contacts row  -->

    <form>
        <input name="Name" Placeholder="Your Name" type="text">   
        <input name="E-mail" Placeholder="Your  E-mail" type="text">  
        <input name="Website" Placeholder="Your Website" type="text">  
        <input name="Company" Placeholder="Your Company" type="text">  
        <textarea name="Message" Placeholder="Your Message" id="" rows="4"></textarea>
        <div class="form-actions">
        <button class="main-btn">SEND MESSAGE</button>
        </div>
    </form>
</div>
@endsection
