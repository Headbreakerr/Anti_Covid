
@extends('main-website.components.master')

@section('content')

   @include('main-website.components.navbar')
   <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Appointment</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Appointment <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
  @include('main-website.components.oppointment')

   @include('main-website.components.footer')

   @endsection
   
		