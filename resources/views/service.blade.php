@extends('layouts.master')
@section('title', 'Cardoor - service')
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('service'))
@section('title-header', 'Наши услуги')

@section('content')

@include('includes.header-page')
    <!--== About Page Content Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Наши услуги</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <h3>Мы предоставляем широкий спектр услуг</h3>
            </div>
        </div>
    </section>
    
    <section id="our-facility" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h2></h2>
                </div>
                <div class="single-our-facility">
                    
                </div> 
            </div>
        </div>
    </section>
    <!--== Our Facility Content End ==-->

    @include('includes.partner')
    @include('includes.testimonials')

    @endsection