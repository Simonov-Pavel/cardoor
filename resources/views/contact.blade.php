@extends('layouts.master')
@section('title', 'Cardoor - Контакты')
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('contact'))
@section('title-header', 'Наши контакты')
@section('custom-css')
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
@endsection
@section('custom-js')
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script>
        $('[data-mask]').inputmask()
    </script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=23118afd-889a-4350-b7c2-9fede61fc90b&lang=ru_RU"></script>
    
    <script src="{{ asset('js/map.js') }}"></script>
@endsection

@section('content')
    
@include('includes.header-page')

    <!--== Contact Page Area Start ==-->
    <div class="contact-page-wrao section-padding">
        <div class="container">
        <div class="row">
                <div class="col-lg-10">
                    <div>
                        <ul style="font-size:20px">
                            <li><i class="fa fa-map-marker" style="width:30px"></i> <a href="https://yandex.ru/maps/-/CCUFBOVVGB" target="_blank">{{ $contact->address }}</a></li>
                            <li><i class="fa fa-mobile" style="width:30px"></i> <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></li>
                            <li><i class="fa fa-envelope" style="width:30px"></i> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row m-3">
                <div class="col-lg-10 m-auto">
                    <div id="map"></div>
                </div>
                
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <form action="{{ route('contact') }}" method="post">
                        @csrf
                            <div class="row">
                                <h2 class="text-center w-100 mb-3" >Напишите нам и мы с вами свяжемся</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                        <input type="text" name='name' placeholder="Укажите ваше имя" required>
                                        @include('includes.error', ['field'=>'name'])
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="subject-input">
                                        <input type="text" name='subject' placeholder="Укажите тему сообщения" required>
                                        @include('includes.error', ['field'=>'subject'])
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="phone-input">
                                        <input type="text" name='phone' placeholder="Укажите ваш телефон" data-inputmask='"mask": "+7(999) 999-99-99"' data-mask value="{{ old('phone') }}"  required>
                                        @include('includes.error', ['field'=>'phone'])
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="email-input">
                                        <input type="email" name='email' placeholder="Укажите ваш email" required>
                                        @include('includes.error', ['field'=>'email'])
                                    </div>
                                </div>
                            </div>

                            <div class="message-input">
                                <textarea name="review" cols="30" rows="5" placeholder="Напишите ваше сообщение"></textarea>
                            </div>

                            <div class="input-submit">
                                <button type="submit">Отправить сообщение</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Contact Page Area End ==-->

    <!--== Map Area Start ==-->
    
    <!--== Map Area End ==-->

@endsection