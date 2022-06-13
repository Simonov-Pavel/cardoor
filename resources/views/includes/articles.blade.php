@if($posts->count() != 0)
    <section id="tips-article-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Советы и статьи</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-12">
                    <article class="single-article @if(($loop->iteration)%2 == 0) middle @endif">
                        <div class="row">
                            <div class="col-lg-5 @if(($loop->iteration)%2 == 0) d-xl-none @endif">
                                <div class="article-thumb">
                                    <picture>
                                        <sourse srcset="{{ Storage::url('posts/' . $post->img_webp)}}" type="image/webp">
                                        <img src="{{ Storage::url('posts/' . $post->img)}}" alt="{{$post->header}}">
                                    </picture>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">{{$post->header}}</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">Автор :: <span>Админ</span></a>
                                                <a href="#" class="commnet">Комментарии :: <span>10</span></a>
                                            </div>

                                            <div class="article-date">{{$post->created_at->day}} <span class="month">{{ $post->created_at->shortMonthName }}</span></div>

                                            {!!$post->text_preview!!}

                                            <a href="article-details.html" class="readmore-btn">Подробнее <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(($loop->iteration)%2 == 0)
                            <div class="col-lg-5 d-none d-xl-block">
                                <div class="article-thumb">
                                    <picture>
                                        <sourse srcset="{{ Storage::url('posts/' . $post->img_webp)}}" type="image/webp">
                                        <img src="{{ Storage::url('posts/' . $post->img)}}" alt="{{$post->header}}">
                                    </picture>
                                </div>
                            </div>
                            @endif
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endif