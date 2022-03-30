@extends('layouts.master')
@section('title', 'Cardoor')
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('index'))

@section('content')
    
@include('includes.slider')
@include('includes.about')
@include('includes.partner')
@include('includes.service')
@include('includes.fanfact')
@include('includes.choose-car')
@include('includes.pricing')
@include('includes.testimonials')
@include('includes.articles')

@endsection
   