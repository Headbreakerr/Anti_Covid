	<!--doctors  -->
    <section class="ftco-section ftco-no-pt">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Hospital</span>
            <h2 class="mb-4">Our Hospital</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>	
		<div class="row">
					@foreach($hospitaldata as $h)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images1/{{$h->image}});"><img src="{{$h->image}}" alt="" width="100%" height="100%"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>{{$h->name}}</h3>
								<span class="position mb-2">{{$h->address}}</span>
								<div class="faded">
									<p>{{$h->phone}}</p>
									@if(Route::has('login'))
									@auth
									<button type="button" class="btn btn-primary" ><a href="{{route('appoint')}}" class="btn btn-primary ">Book Appointment</a></button>
									@else
									<button type="button" class="btn btn-primary" ><a href="{{route('register')}}" class="btn btn-primary ">Book Appointment</a></button>
									@endauth
									@endif
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>