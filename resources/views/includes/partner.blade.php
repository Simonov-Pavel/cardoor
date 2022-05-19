@if(isset($partners))
<section id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        @foreach($partners as $partner)
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                <picture>
                                    <sourse srcset="{{ Storage::url('partner/' . $partner->img_webp)}}" type="image/webp">
                                    <img src="{{ Storage::url('partner/' . $partner->img)}}" alt="{{$partner->title}}">
                                </picture>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</section>
@endif