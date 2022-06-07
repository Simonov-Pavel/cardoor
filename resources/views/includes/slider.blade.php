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
                                    <form action="{{route('car')}}" method="GET">
                                        <div class="bookinput-item">
                                            <input name='startRent' type="text" id="startRent"  class="form-pattern" value="{{ old('startRent', isset($_GET['startRent'])? $_GET['startRent'] : null) }}"  required placeholder="Дата аренды" autocomplete="off" data-inputmask-alias="datetime" data-inputmask-inputformat="dd.mm.yyyy" data-mask pattern="\d{2}[.]+\d{2}[.]+\d{4}" title="Допускаются только цифры и точка в формате - дд.мм.гггг - (например : 08.03.2000)">
                                            @include('includes.error', ['field'=>'startRent'])
                                        </div>
                                        <div class="bookinput-item">
                                            <input name='endRent' type="text" id="endRent" class="form-pattern" value="{{ old('endRent', isset($_GET['endRent'])? $_GET['endRent'] : null) }}" required placeholder="Дата возврата" autocomplete="off" data-inputmask-alias="datetime" data-inputmask-inputformat="dd.mm.yyyy" data-mask pattern="\d{2}[.]+\d{2}[.]+\d{4}" title="Допускаются только цифры и точка в формате - дд.мм.гггг - (например : 08.03.2000)">
                                            @include('includes.error', ['field'=>'endRent'])
                                        </div>

                                        <div class="bookcar-btn bookinput-item">
                                            <button type="submit">Подобрать</button>
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