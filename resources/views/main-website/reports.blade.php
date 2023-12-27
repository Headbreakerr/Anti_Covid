@extends('main-website.components.master')

@section('content')

   @include('main-website.components.navbar')


   <div class="container">
       <!-- Table Header -->
<div class="bg-primary text-white text-center p-2">
Patient Details
</div>

        <div class="container">
            <!-- Main Table -->
            <div class="row mt-4">
              <!-- First Column -->
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Patient ID
                  </div>
                  <div class="col-md-12 text-center">{Patient ID}</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Patient Name
                  </div>
                  <div class="col-md-12 text-center">{Patient Name}</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Phone No.
                  </div>
                  <div class="col-md-12 text-center">{Phone Number}</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Age
                  </div>
                  <div class="col-md-12 text-center">{Age}</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Gender
                  </div>
                  <div class="col-md-12 text-center">{Gender}</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Report ID
                  </div>
                  <div class="col-md-12 text-center">{Report ID}</div>
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
                  <div class="col-md-12 text-center">O+</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Fever
                  </div>
                  <div class="col-md-12 text-center">Yes</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Flu
                  </div>
                  <div class="col-md-12 text-center">No</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Cough
                  </div>
                  <div class="col-md-12 text-center">Yes</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Loss in Appetite
                  </div>
                  <div class="col-md-12 text-center">Yes</div>
                </div>
              </div>  <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Cholestrol
                  </div>
                  <div class="col-md-12 text-center">180</div>
                </div>
              </div> 
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-center font-weight-bold">
                    Blood Pressure
                  </div>
                  <div class="col-md-12 text-center">Low</div>
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
        <p class='text-success'>Negative</p>
    </div>
    
</div>

  
</div>
<div class="bg-primary text-white text-center p-3">
  
</div>
   </div>
   @include('main-website.components.footer')

   @endsection