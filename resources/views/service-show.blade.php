@extends('layouts.master')
@section('title', 'Cardoor - '.$service->header)
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
                        <h2>{{$service->header}}</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <picture>
                        <source srcset="{{ Storage::url('service/'.$service->img_webp) }}" type="image/webp">
                        <img src="{{ Storage::url('service/'.$service->img) }}" alt="{{$service->header}}" style="margin:0 auto">
                    </picture>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">{!!$service->description!!}</div>
            </div>
        </div>
    </section>
    @include('includes.partner')
    @include('includes.testimonials')

    @endsection