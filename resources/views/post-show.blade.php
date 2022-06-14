@extends('layouts.master')
@section('title', 'Cardoor - '.$post->header)
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('blog'))
@section('title-header', $post->header)
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
@endsection
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

                            <div class="mt-50 p-0">
                                <h4 class="mb-2">Комментарий:</h4>
                        
                                <div class="shadow-sm">
                                    <div class="comments">
                                        <div>
                                    
                                            <div class="mb-15 direct-chat-left float-left">
                                                <div class="clearfix">
                                                    <span class="float-left">Павел</span>
                                                    <span class="float-right">22.02</span>
                                                </div>
                                                <picture>
                                                    <source srcset="#" type="image/webp">
                                                    <img class="direct-chat-img" src="#" alt="user - Pavel">
                                                </picture>
                                                <div class="reply">
                                                    <div class="direct-chat-text">text ansver</div>
                                                    <div style="margin:0 10px">
                                                        <a class="reply-button @guest notAuth @endguest"  href="#" id="#" data-name="Pavel" title="Ответить"><i class="fa fa-reply" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        
                                            <div class="direct-chat-msg float-right">
                                                <div class="clearfix">
                                                    <span class="direct-chat-name float-right">Anton</span>
                                                    <span class="direct-chat-timestamp float-left">21.08</span>
                                                </div>
                                                <picture>
                                                    <source srcset="#" type="image/webp">
                                                    <img class="direct-chat-img" src="#" alt="user - Anton">
                                                </picture>
                                                <div class="direct-chat-text">Answer</div>
                                            </div>
                                            
                                        </div>    
                                    </div>
                                </div>
                        
                                <form action="#" method="post">
                                    @csrf

                                    <div class="row">
                                        <div class="col-12">
                                            <small class="reply-comment"></small>
                                            <input class="parent_id" type="hidden" name="parent_id" value="NULL">
                                            <input type="hidden" name="commentable_id" value="#">
                                            <input type="hidden" name="commentable_type" value="App\Models\Post">
                                            <textarea name="message" id="message" class="message form-control" required placeholder="Начинайте писать ваш комментарий к данной статье"></textarea>
                                            @include('includes.error', ['field'=>'message'])
                                        </div>
                                
                                        <div class="readmore-btn">
                                            <button type="submit" class="mt-15 add-comment" data-user="3" data-post="3">Добавить</button>
                                        </div>
                                    </div>
                                </form>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection