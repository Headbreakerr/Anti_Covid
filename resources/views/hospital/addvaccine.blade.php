<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('hospital.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('hospital.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('hospital.navbar')
        <!-- partial -->
        <div class="main-panel">
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Vaccine</h4>
                    <p class="card-description"> Add Vaccine </p>
                    <form class="forms-sample" action="{{route('vaccine')}}" method="post">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Vaccine Name</label>
                        <input type="text" style="color: black;" class="form-control" id="exampleInputName1" placeholder="Vaccine Name" name="vname">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Vaccine Manufacturing</label>
                        <input type="text" style="color: black;" class="form-control" id="exampleInputEmail3" placeholder="Vaccine Manufacturing" name="vmanu">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
        
        

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  @include('hospital.js')
    <!-- End custom js for this page -->
  </body>
</html>