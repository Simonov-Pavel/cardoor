<section id="slider-area">
    <div class="single-slide-item overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        <div class="display-table">
                            <div class="display-table-cell">
                                @if(isset($banner->title))
                                    <h1 class="text-uppercase">{{$banner->title}}</h1>
                                @endif
                                @if(isset($banner->text_up) || isset($banner->text_down))
                                    <p class="text-uppercase">@if(isset($banner->text_up)){{$banner->text_up}}@endif
                                
                                    @if(isset($banner->text_down))
                                        <br>{{ $banner->text_down }}
                                    @endif
                                    </p>
                                @endif
                                <div class="book-ur-car">
                                    <form action="index2.html">
                                        <div class="pick-location bookinput-item">
                                            <select class="custom-select">
                                              <option selected>Pick Location</option>
                                              <option value="1">Dhaka</option>
                                              <option value="2">Comilla</option>
                                              <option value="3">Barishal</option>
                                              <option value="3">Rangpur</option>
                                            </select>
                                        </div>

                                        <div class="pick-date bookinput-item">
                                            <input id="startDate2" placeholder="Pick Date" />
                                        </div>

                                        <div class="retern-date bookinput-item">
                                            <input id="endDate2" placeholder="Return Date" />
                                        </div>

                                        <div class="car-choose bookinput-item">
                                            <select class="custom-select">
                                              <option selected>Choose Car</option>
                                              <option value="1">BMW</option>
                                              <option value="2">Audi</option>
                                              <option value="3">Lexus</option>
                                            </select>
                                        </div>

                                        <div class="bookcar-btn bookinput-item">
                                            <button type="submit">Book Car</button>
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