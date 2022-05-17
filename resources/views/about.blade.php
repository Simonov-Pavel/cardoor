@extends('layouts.master')
@section('title', 'Cardoor - about')
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('about'))
@section('title-header', 'О нас')

@section('content')

@include('includes.header-page')
    <!--== About Page Content Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>О нас</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">{!! $about->description !!}</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-image">
                        <picture>
                            <sourse srcset="{{ Storage::url('about/' . $about->img_webp)}}" type="image/webp">
                            <img src="{{ Storage::url('about/' . $about->img)}}" alt="Car-img" style="width: 100%">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="our-facility" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h2>{{ $about->conditions_header }}</h2>
                </div>
                <div class="single-our-facility">
                    
                    {!! $about->conditions_rental !!}
                </div> 
            </div>
        </div>
    </section>
    <!--== Our Facility Content End ==-->

    @include('includes.partner')
    @include('includes.testimonials')

    @endsection