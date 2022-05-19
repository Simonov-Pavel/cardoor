@extends('layouts.master')
@section('title', 'Cardoor - service')
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('service'))
@section('title-header', 'Наши услуги')

@section('content')

@include('includes.header-page')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Мы предоставляем широкий спектр услуг</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('includes.partner')
    @include('includes.testimonials')

    @endsection