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
            <th>phone</th>
            <th>date</th>
            <th>time</th>
            <th>vaccine name</th>
            <th>action</th>
        </tr>
       @foreach($patientdata as $p)
       <tr>
        <td>{{$p->first_name}}</td>
        <td>{{$p->phone}}</td>
        <td>{{$p->date}}</td>
        <td>{{$p->time}}</td>
        <td>{{$p->vaccinename}}</td>
        <td>
        <a href="{{ URL::to('/delete/'. $p->id) }}" onclick="return confirm('are you sure to CANCEL this')" class="btn btn-danger" >CANCEL</a>

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