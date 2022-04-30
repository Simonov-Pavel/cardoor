@extends('layouts.master')
@section('title', 'Cardoor - Контакты')
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('contact'))
@section('title-header', 'Наши контакты')
@section('custom-js')
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script>
        $('[data-mask]').inputmask()
    </script>
@endsection

@section('content')
    
@include('includes.header-page')

    <!--== Contact Page Area Start ==-->
    <div class="contact-page-wrao section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d555.6693509134135!2d101.60399481416644!3d56.14539151701966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ce34e88d1c1ffbb%3A0x15ce59675e7edd5a!2z0JDQktCi0J7QlNCV0JvQng!5e0!3m2!1sru!2sbd!4v1651322827918!5m2!1sru!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                
            </div>
            <div class="row m-3">
            <div class="col-lg-10">
                    <div>
                        <ul style="font-size:20px">
                            <li><i class="fa fa-map-marker" style="width:30px"></i> {{ $contact->address }}</li>
                            <li><i class="fa fa-mobile" style="width:30px"></i> <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></li>
                            <li><i class="fa fa-envelope" style="width:30px"></i> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></li>
                        </ul>
                    </div>
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