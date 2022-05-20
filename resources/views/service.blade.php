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
    
    @if(isset($services))
    <section>
        <div class="container">
            <div class="row">
				@foreach($services as $service)
				<div class="col-lg-4 text-center">
					<div class="service-item">
                        <a href="{{ route('service-show', $service) }}">
						    <figure>
							    <picture>
                            	    <source srcset="{{ Storage::url('service/'.$service->img_webp) }}" type="image/webp">
                            	    <img src="{{ Storage::url('service/'.$service->img) }}" alt="{{$service->header}}">
                        	    </picture>
							    <figcaption><h3>{{$service->header}}</h3></figcaption>
						    </figure>
					    </a>
					</div>
				</div>
                @endforeach
			</div>
            <div class="mb-5" style="width:fit-content;margin:0 auto">{{ $services->links() }}</div>
        </div>
    </section>
    @endif
    @include('includes.partner')
    @include('includes.testimonials')

    @endsection
    