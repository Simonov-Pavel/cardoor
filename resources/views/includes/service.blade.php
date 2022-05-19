@if(isset($services))
<section id="service-area" class="section-padding">
    <div class="container">
		<div class="row">
    		<div class="col-lg-12">
        		<div class="section-title  text-center">
            		<h2>Наши услуги</h2>
                	<span class="title-line"><i class="fa fa-car"></i></span>
        		</div>
    		</div>
		</div>
           
		<div class="row">
			@foreach($services as $service)
			<div class="col-lg-4 text-center">
				<div class="service-item">
					<a href="">
						<figure>
							<picture>
                            	<source srcset="{{ Storage::url('service/'.$service->img_webp) }}" type="image/webp">
                            	<img src="{{ Storage::url('service/'.$service->img) }}" alt="{{$service->header}}">
                        	</picture>
							<figcaption><h3>{{$service->header}}</h3></figcaption>
						</figure>
					</a>
				</div>
			</div>
			@endforeach	
		</div>
    </div>
</section>
@endif