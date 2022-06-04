@extends('layouts.master')
@section('title', 'Cardoor')
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('index'))
@section('custom-css')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
@endsection
@section('custom-js')
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script>
        $('#startRent').inputmask('dd.mm.yyyy', { 'placeholder': 'dd.mm.yyyy' });
        $('#endRent').inputmask('dd.mm.yyyy', { 'placeholder': 'dd.mm.yyyy' });
        $( "#startRent" ).datepicker();
        $( "#startRent" ).datepicker( "option", "dateFormat", "dd.mm.yy" );
        $( "#endRent" ).datepicker();
        $( "#endRent" ).datepicker( "option", "dateFormat", "dd.mm.yy" );
    </script>
@endsection

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
   