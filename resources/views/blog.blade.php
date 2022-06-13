@extends('layouts.master')
@section('title', 'Cardoor - Блог')
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('blog'))
@section('title-header', 'Блог')


@section('content')

    @include('includes.header-page')

    @include('includes.articles')
    <div class="page-pagi">{{ $posts->links() }}</div>
@endsection