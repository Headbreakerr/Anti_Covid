@extends('main-website.components.master')

@section('content')

   @include('main-website.components.navbar')


   <div class="container">
       <!-- Table Header -->
<div class="bg-primary text-white text-center p-2">
Patient Details
</div>

@foreach($reports as $r)
        <div class="container">
            <!-- Main Table -->
            <div class="row mt-4">
              <!-- First Column -->
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Patient ID
                  </div>
                  <div class="col-md-12 text-center">{{ Auth::user()->id }}</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Patient Name
                  </div>
                  <div class="col-md-12 text-center">{{ Auth::user()->name }}</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Phone No.
                  </div>
                  <div class="col-md-12 text-center">{{ Auth::user()->phone }}</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Report ID
                  </div>
                  <div class="col-md-12 text-center">{{$r->id}}</div>
                </div>
              </div> 
              </div>
        </div>
        </div>
       
   </div>
   <div class="container">
       <!-- Table Header -->
<div class="bg-primary text-white text-center p-2">
  Sample Report
</div>
        <div class="container">
            <!-- Main Table -->
            <div class="row mt-4">
              <!-- First Column -->
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                   Blood Group
                  </div>
                  <div class="col-md-12 text-center">{{$r->Blood_Group}}</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Fever
                  </div>
                  <div class="col-md-12 text-center">{{$r->Fever}}</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Flu
                  </div>
                  <div class="col-md-12 text-center">{{$r->Flu}}</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Cough
                  </div>
                  <div class="col-md-12 text-center">{{$r->Cough}}</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Loss in Appetite
                  </div>
                  <div class="col-md-12 text-center">{{$r->Appetite}}</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Cholestrol
                  </div>
                  <div class="col-md-12 text-center">{{$r->Cholestrol}}</div>
                </div>
              </div> 
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Blood Pressure
                  </div>
                  <div class="col-md-12 text-center">{{$r->BP}}</div>
                </div>
              </div> 
              </div>
        </div>
        </div>
        <div class="container">
       <!-- Table Header -->
<div class="bg-primary text-white text-center p-2">
  Result
</div>
<div class="container mt-4">
  <div class="row">
    <div class="col-md-6 mb-3">
      <p class="font-weight-bold">Covid Result</p>
    </div>
    <div class="col-md-6 mb-3">
        <p class='text-success'>{{$r->status}}</p>
    </div>
    
</div>
@endforeach

  
</div>
<div class="bg-primary text-white text-center p-3">
  
</div>
   </div>
   @include('main-website.components.footer')

   @endsection