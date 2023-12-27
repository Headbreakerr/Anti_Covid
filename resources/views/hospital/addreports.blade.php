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
                    <h4 class="card-title">Add reports</h4>
                    <p class="card-description"> Add reports </p>
                    <form class="forms-sample" action="{{route('addreports')}}" method="post">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Blood_Group</label>
                        <input type="text" style="color: black;" class="form-control" id="exampleInputName1" placeholder="Blood_Group" name="bloodgroup">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Fever</label>
                        <input type="text" style="color: black;" class="form-control" id="exampleInputEmail3" placeholder="Fever" name="fever">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Flu </label>
                        <input type="text" style="color: black;" class="form-control" id="exampleInputEmail3" placeholder="Flu" name="flu">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Cough</label>
                        <input type="text" style="color: black;" class="form-control" id="exampleInputEmail3" placeholder="Cough" name="cough">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Appetite</label>
                        <input type="text" style="color: black;" class="form-control" id="exampleInputEmail3" placeholder="Appetite" name="appetite">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Cholestrol</label>
                        <input type="text" style="color: black;" class="form-control" id="exampleInputEmail3" placeholder="Cholestrol" name="cholestrol">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">BP</label>
                        <input type="text" style="color: black;" class="form-control" id="exampleInputEmail3" placeholder="BP" name="bp">
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