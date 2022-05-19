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
            <div class="row">
                <div class="col-lg-12">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas dignissimos consequatur, est nemo pariatur similique expedita, blanditiis alias iusto sapiente nesciunt voluptates, laborum ducimus odit. Sequi similique, consequuntur maxime accusamus, aspernatur voluptates architecto minus soluta facere obcaecati odit? Dolore quaerat magni incidunt explicabo ullam quisquam expedita accusamus id dolores libero!</p>
                </div>
            </div>
        </div>
    </section>
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