<section id="footer-area">
    <div class="footer-widget-area">
        <div class="container">
            <div class="row" style="justify-content:space-between">
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h2>о нас</h2>
                        <div class="widget-body">
                            <picture>
                                <source srcset="{{ Storage::url('contact/'.$contact->img_webp) }}" type="image/webp">
                                <img src="{{ Storage::url('contact/'.$contact->img) }}" alt="logo">
                            </picture>
                            <p>{{$contact->description}}</p>
                            <!--noindex-->
                            <div class="newsletter-area">
                                <form action="index.html">
                                    <input type="email" placeholder="Подпишитесь на нашу рассылку">
                                    <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                </form>
                            </div>
                            <!--/noindex-->
                        </div>
                    </div>
                </div>
                @if($posts->count() != 0)
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h2>последнии посты</h2>
                        <div class="widget-body">
                            <ul class="recent-post">
                                <li>
                                    <a href="#">
                                        Hello Bangladesh! 
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Lorem ipsum dolor sit amet
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Hello Bangladesh! 
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        consectetur adipisicing elit?
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h2>Контакты</h2>
                        <div class="widget-body">
                            <p>Можете с нами связаться по контактам ниже</p>

                            <ul class="get-touch">
                                <li><i class="fa fa-map-marker"></i> {{$contact->address}}</li>
                                <li><i class="fa fa-mobile"></i> <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></li>
                                <li><i class="fa fa-envelope"></i> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></li>
                            </ul>
                            <a href="{{ $contact->map }}" class="map-show" target="_blank">Посмотреть на карте</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                </div>
            </div>
        </div>
    </div>
</section>