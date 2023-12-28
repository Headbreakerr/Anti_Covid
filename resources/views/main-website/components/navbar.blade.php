	<!-- navbar -->
	<nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
				<div class="col-lg-2 pr-4 align-items-center">
					<a class="navbar-brand" href="">
						<img src="{{ asset('Assets/Img/anti-covid_logo.png') }}" alt="" style="height:40px;">
					</a>
				</div>
			</div>

			<div class="col-lg-10 d-none d-md-block">
				<div class="row d-flex">
					<div class="col-md-4 pr-4 d-flex topper align-items-center">
						<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						<span class="text">Address: West 21th Street</span>
					</div>
					<div class="col-md pr-4 d-flex topper align-items-center">
						<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						<span class="text">Email: email@email.com</span>
					</div>
					<div class="col-md pr-4 d-flex topper align-items-center">
						<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						<span class="text">Phone: + 1235 2355 98</span>
					</div>
				</div>
			</div>
		</div>
		</div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container d-flex align-items-center">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a href="{{route('home')}}" class="nav-link pl-0">Home</a></li>
					<li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
					<li class="nav-item"><a href="{{route('hospital')}}" class="nav-link">Hospital</a></li>
					<li class="nav-item"><a href="{{route('depart')}}" class="nav-link">Departments</a></li>
					<li class="nav-item"><a href="{{route('reports')}}" class="nav-link">reports</a></li>
					<li class="nav-item"><a href="{{route('appoint')}}" class="nav-link">Appointment</a></li>
					<li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
					@if(Route::has('login'))
			@auth
			<li class="nav-item"><a href="{{route('myappoint')}}" class="nav-link">My Appointments</a></li>

			<form action="{{ route('logout') }}" method="post">
				@csrf
				<li class="nav-item"><a href="{{route('logout')}}" class="nav-link"><button type="submit" class="btn btn-secondary">LOGOUT</button></a></li>
			</form>
			@else
			
			<li class="nav-item mx-5">
				<li class="nav-item mt-1 mx-1"><a href="{{route('login')}}" class="btn btn-secondary py-2 px-3">Login</a></li>
				<li class="nav-item mt-1"><a href="{{ route('register')}}" class="btn btn-secondary py-2 px-3">Register</a></li>
			</li>
			
	
			
			@endauth
			@endif
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->