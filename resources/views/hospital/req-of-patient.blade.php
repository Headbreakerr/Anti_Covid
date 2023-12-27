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
        <div class="container">
    <table class="table">
    <tr>
            <th>name</th>
            <th>vaccine name</th>
            <th>massage</th>
            <th>phone</th>
            <th>status</th>
            <th>action</th>
        </tr>
        @foreach($patientdata as $f)
        <tr>
            <td>{{$f->first_name}}</td>
            <td>{{$f->vaccinename}}</td>
            <td>{{$f->massage}}</td>
            <td>{{$f->phone}}</td>
            <td>{{$f->status}}</td>
            <td>
              <a href="{{ URL::to('/reject/'. $f->id) }}" onclick="return confirm('are you sure to reject this')" class="btn btn-danger" >reject</a>
              <a href="{{ URL::to('/approved/'. $f->id) }}" onclick="return confirm('are you sure to approved this')" class="btn btn-danger" >approved</a>
            </td>
        </tr>
        @endforeach
     
    </table>
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