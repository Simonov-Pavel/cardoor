@extends('layouts.master')
@section('title', 'Cardoor - Блог')
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('blog'))
@section('title-header', 'Блог')


@section('content')

    @include('includes.header-page')

    <div id="blog-page-content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <article class="single-article">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-1.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">Wliquam sit amet urna eullam</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">By :: <span>Admin</span></a>
                                                <a href="#" class="commnet">Comments :: <span>10</span></a>
                                            </div>

                                            <div class="article-date">25 <span class="month">jan</span></div>

                                            <p>Wlam aiber vestibulum fringilla oremedad ipsum dolor sit amet consectetur adipisicing elit sed doned eiusmod tempored incididunt ut labore et dolore magna aliquaa enimd ad minim veniad.</p>

                                            <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-12">
                    <article class="single-article middle">
                        <div class="row">
                            <div class="col-lg-5 d-xl-none">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-2.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">Wliquam sit amet urna eullam</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">By :: <span>Admin</span></a>
                                                <a href="#" class="commnet">Comments :: <span>10</span></a>
                                            </div>

                                            <div class="article-date">25 <span class="month">jan</span></div>

                                            <p>Wlam aiber vestibulum fringilla oremedad ipsum dolor sit amet consectetur adipisicing elit sed doned eiusmod tempored incididunt ut labore et dolore magna aliquaa enimd ad minim veniad.</p>

                                            <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-xl-block">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-2.jpg" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-12">
                    <article class="single-article">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-3.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">Wliquam sit amet urna eullam</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">By :: <span>Admin</span></a>
                                                <a href="#" class="commnet">Comments :: <span>10</span></a>
                                            </div>

                                            <div class="article-date">25 <span class="month">jan</span></div>

                                            <p>Wlam aiber vestibulum fringilla oremedad ipsum dolor sit amet consectetur adipisicing elit sed doned eiusmod tempored incididunt ut labore et dolore magna aliquaa enimd ad minim veniad.</p>

                                            <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-12">
                    <article class="single-article middle">
                        <div class="row">
                            <div class="col-lg-5 d-xl-none">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-4.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">Wliquam sit amet urna eullam</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">By :: <span>Admin</span></a>
                                                <a href="#" class="commnet">Comments :: <span>10</span></a>
                                            </div>

                                            <div class="article-date">25 <span class="month">jan</span></div>

                                            <p>Wlam aiber vestibulum fringilla oremedad ipsum dolor sit amet consectetur adipisicing elit sed doned eiusmod tempored incididunt ut labore et dolore magna aliquaa enimd ad minim veniad.</p>

                                            <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-xl-block">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-4.jpg" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="page-pagi">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection