<section id="choose-car" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Наши автомобили</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row popular-car-gird">
                    @foreach($cars as $car)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-popular-car">
                            <div class="p-car-thumbnails">
                                <a class="car-hover" href="{{ Storage::url('cars/' . $car->img) }}">
                                    <picture>
                                        <sourse srcset="{{ Storage::url('cars/' . $car->img_webp)}}" type="image/webp">
                                        <img src="{{ Storage::url('cars/' . $car->img)}}" alt="{{$car->model}}">
                                    </picture>
                                </a>
                            </div>
                            <div class="p-car-content">
                                <h3>
                                    <a href="#">{{ $car->model }}</a>
                                    <span class="price"><i class="fa fa-tag"></i> ${{$car->price}}/day</span>
                                </h3>
                                <h5>{{$car->body->title}}</h5>
                                <div class="p-car-feature">
                                    <a title="Год выпуска">{{$car->brithday}}</a>
                                    <a title="Тип двигателя">{{$car->engine->title}}</a>
                                    <a title="Тип коробки передач">{{$car->transmission->title}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <div style="display:flex"><a href="" class="btn btn-success" style="margin:0 auto">Смотреть все автомобили</a></div>
                
                <!-- Filters -->
                <div class="choose-content-wrap">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular_cars" role="tab" aria-selected="true">popular Cars</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newest_cars" role="tab" aria-selected="false">newest cars</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#office_map" role="tab" aria-selected="false">Our Office</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                            <div class="popular-cars-wrap">
                                <div class="popucar-menu text-center">
                                    <a href="#" data-filter="*" class="active">all</a>
                                    <a href="#" data-filter=".con">Conver</a>
                                    <a href="#" data-filter=".hat">Truck</a>
                                    <a href="#" data-filter=".mpv">MPV</a>
                                    <a href="#" data-filter=".sedan">Sedan</a>
                                    <a href="#" data-filter=".suv">SUV</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Filters -->

            </div>
        </div>
    </div>
</section>