@extends('layouts.master')
@section('title', 'Cardoor - Наши машины')
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('car'))
@section('title-header', 'Наши машины')

@section('content')

    @include('includes.header-page')
  
    <section id="car-list-area">
        <div class="container">
            <div class="sort">@include('includes.sort-car')</div>
            <div class="car">@include('includes.car')</div>
        </div>
    </section>
@endsection