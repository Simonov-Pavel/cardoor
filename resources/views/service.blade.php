@extends('layouts.master')
@section('title', 'Cardoor - service')
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('service'))
@section('title-header', 'Наши услуги')

@section('content')

@include('includes.header-page')
    @if(isset($service_description))
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>{{$service_description->header}}</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">{!!$service_description->description!!}</div>
            </div>
        </div>
    </section>
    @endif
    <section>
        <div class="container">
            <div class="row">
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<figure>
						    <picture>
                                <img src="{{ asset('assets/img/home-2-about.png')}}" alt="Car-img" style="width: 100%">
                            </picture>
						    <figcaption><h3>ПРОКАТ АВТОМОБИЛЕЙ</h3></figcaption>
						</figure>
					</div>
				</div>
                <div class="col-lg-4 text-center">
					<div class="service-item">
						<figure>
						<picture>
                            <img src="{{ asset('assets/img/home-2-about.png')}}" alt="Car-img" style="width: 100%">
                        </picture>
						<figcaption><h3>ПРОКАТ АВТОМОБИЛЕЙ</h3></figcaption>
						</figure>
					</div>
				</div>
                <div class="col-lg-4 text-center">
					<div class="service-item">
						<figure>
						<picture>
                            <img src="{{ asset('assets/img/home-2-about.png')}}" alt="Car-img" style="width: 100%">
                        </picture>
						<figcaption><h3>ПРОКАТ АВТОМОБИЛЕЙ</h3></figcaption>
						</figure>
					</div>
				</div>
                <div class="col-lg-4 text-center">
					<div class="service-item">
						<figure>
						<picture>
                            <img src="{{ asset('assets/img/home-2-about.png')}}" alt="Car-img" style="width: 100%">
                        </picture>
						<figcaption><h3>ПРОКАТ АВТОМОБИЛЕЙ</h3></figcaption>
						</figure>
					</div>
				</div>
                <div class="col-lg-4 text-center">
					<div class="service-item">
						<figure>
						<picture>
                            <img src="{{ asset('assets/img/home-2-about.png')}}" alt="Car-img" style="width: 100%">
                        </picture>
						<figcaption><h3>ПРОКАТ АВТОМОБИЛЕЙ</h3></figcaption>
						</figure>
					</div>
				</div>
                
			</div>
        </div>
    </section>

    @include('includes.partner')
    @include('includes.testimonials')

    @endsection
    