@extends('layouts.master')
@section('title', 'Cardoor - '.$post->header)
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('blog'))
@section('title-header', $post->header)

@section('content')

@include('includes.header-page')

    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="car-details-content">
                        <picture>
                            <sourse srcset="{{ Storage::url('posts/' . $post->img_webp)}}" type="image/webp">
                            <img src="{{ Storage::url('posts/' . $post->img)}}" alt="{{$post->header}}">
                        </picture>
                        <div class="car-details-info blog-content">
                            {!! $post->text !!}

                            <div class="review-area">
                                <h3>Напишите ваш комментарий</h3>
                                <div class="review-form">
                                    <form action="" method="post">
                                        @csrf
                                        @guest
                                        <div class="form-group">
                                            <label>Ваше имя</label>
                                            <input type="text" required  name='name' class="form-control" value="{{ old('name') }}" placeholder="Ведите ваше имя">   
                                            @include('includes.error', ['field'=>'name'])
                                        </div>
                                        <div class="form-group">
                                            <label>Ваш email</label>
                                            <input type="email" required  name='email' class="form-control" value="{{ old('email') }}" placeholder="Ведите ваш email">   
                                            @include('includes.error', ['field'=>'email'])
                                        </div>
                                        @endguest
                                        <div class="form-group">
                                            <label>Комментарий</label>
                                            <textarea type="text" name='comment' class="form-control" placeholder="Напишите ваш комментарий" required='required'>{{ old('comment') }}</textarea>
                                            @include('includes.error', ['field'=>'comment'])
                                        </div>

                                        <div class="readmore-btn">
                                            <button type="submit">Добавить комментарий</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection