<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
        <div class="container">
    <table class="table">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>address</th>
            <th>action</th>
        </tr>
       @foreach($hospitaldata as $p)
       <tr>
        <td>{{$p->name}}</td>
        <td>{{$p->email}}</td>
        <td>{{$p->phone}}</td>
        <td>{{$p->address}}</td>
        <td>
        <a href="{{ URL::to('/deletead/'. $p->id) }}" onclick="return confirm('are you sure to CANCEL this')" class="btn btn-danger" >CANCEL</a>

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
  @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>