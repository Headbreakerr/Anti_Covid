

<!-- opointment -->
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 py-5 pr-md-5">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	          	<span class="subheading">Consultation</span>
	            <h2 class="mb-4">Free Consultation</h2>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	          </div>
	          <form action="{{route('appointment')}}" method="post" class="appointment-form ftco-animate">
				@csrf
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name" name="fname">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Last Name" name="lname">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="hname" id="" class="form-control">
                      	<option value="">Select Your Hospital</option>
						  @foreach($hospitaldata as $h)
                      	<option name="hname" style="color: black;" value="{{$h->name}}">{{$h->name}}</option>
						  @endforeach
                      </select>
                    </div>
		              </div>
		    				</div>
							<div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="vname" id="" class="form-control">
                      	<option value="">Select Your Vaccine</option>
						  @foreach($vaccinedata as $v)
                      	<option name="vname" style="color: black;" value="{{$v->vaccinename}}">{{$v->vaccinename}}</option>
						  @endforeach
                      </select>
                    </div>
		              </div>
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="ion-md-calendar"></span></div>
									<input type="text" class="form-control appointment_date" placeholder="Date" name="date">
								</div>
		    				</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Phone" name="phone">
							</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control appointment_time" placeholder="Time" name="time">
	            		</div>
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="massage" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="appointment" class="btn btn-secondary py-3 px-4">
		            </div>
	    				</div>
	    			</form>
    			</div>
    			<div class="col-lg-6 p-5 bg-counter aside-stretch">
						<h3 class="vr">About Dr.Care Facts</h3>
    				<div class="row pt-4 mt-1">
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
		                <strong class="number" data-number="4500">0</strong>
		                <span>Happy Patients</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
		                <strong class="number" data-number="84">0</strong>
		                <span>Number of Doctors</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Number of Staffs</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>