@extends('main-website.components.master')

@section('content')

   @include('main-website.components.navbar')
   @include('main-website.components.home')
   @include('main-website.components.service')
   @include('main-website.components.about-dr')
   @include('main-website.components.consultant')
   @include('main-website.components.departments')
   @include('main-website.components.hospitals')
   
   @include('main-website.components.oppointment')
   
   <div class="mt-5"></div>
   
   @include('main-website.components.footer')

   @endsection