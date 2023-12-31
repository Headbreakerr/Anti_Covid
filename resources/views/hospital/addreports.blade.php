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
                        <label for="exampleInputEmail9">Patient Name</label>
                        <!-- <input type="text" style="color: black;" class="form-control" id="exampleInputEmail8" placeholder="Status" name="status"> -->
                        <select name="username" id="exampleInputEmail9" class="text-dark form-control bg-white" >
                          @foreach($users as $u)
                          <option value="{{$u->id}}">{{$u->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Blood_Group</label>
                        <!-- <input type="text"  class="form-control bg-white" id="exampleInputName1" placeholder="Blood_Group" name="bloodgroup"> -->
                        <select type="text"  class="form-control bg-white" id="exampleInputName1" placeholder="Blood_Group" name="bloodgroup">
                          <option value="O+">O+</option>
                          <option value="O-">O-</option>
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B-</option>
                          <option value="AB+">AB+</option>
                          <option value="AB-">AB-</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Fever</label>
                        <!-- <input type="text" style="color: black;" class="bg-white form-control" id="exampleInputEmail2" placeholder="Fever" name="fever"> -->
                        <select class="bg-white form-control" id="exampleInputEmail2" placeholder="Fever" name="fever">
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Flu </label>
                        <!-- <input type="text" style="color: black;" class="bg-white form-control" id="exampleInputEmail3" placeholder="Flu" name="flu"> -->
                        <select class="bg-white form-control" id="exampleInputEmail3" placeholder="Flu" name="flu">
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Cough</label>
                        <!-- <input type="text" style="color: black;" class="form-control bg-white" id="exampleInputEmail4" placeholder="Cough" name="cough"> -->
                        <select class="form-control bg-white" id="exampleInputEmail4" placeholder="Cough" name="cough">
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Loss in Appetite</label>
                        <!-- <input type="text" style="color: black;" class="form-control bg-white" id="exampleInputEmail5" placeholder="Appetite" name="appetite"> -->
                        <select  class="form-control bg-white" id="exampleInputEmail5" placeholder="Appetite" name="appetite">
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Cholestrol Level</label>
                        <!-- <input type="text" style="color: black;" class="form-control bg-white" id="exampleInputEmail6" placeholder="Cholestrol" name="cholestrol"> -->
                        <select  class="form-control bg-white" id="exampleInputEmail6" placeholder="Cholestrol" name="cholestrol">
                          <option value="Mild">Mild</option>
                          <option value="Low">Low</option>
                          <option value="Moderate">Moderate</option>
                          <option value="High">High</option>
                          <option value="Severe">Severe</option>
                          
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Blood Pressure Level</label>
                        <input type="number" min="80" max="200" style="color: black;" class="form-control bg-white" id="exampleInputEmail7" placeholder="BP" name="bp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Status</label>
                        <!-- <input type="text" style="color: black;" class="form-control" id="exampleInputEmail8" placeholder="Status" name="status"> -->
                        <select name="status" id="status" class="text-dark form-control bg-white" >
                          <option value="Positive">Positive</option>
                          <option value="Negative">Negative</option>
                        </select>
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