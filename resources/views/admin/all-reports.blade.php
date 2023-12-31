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
              <th>patient id</th>
              <th>Blood_Group</th>
              <th>Fever</th>
              <th>Flu</th>
              <th>Appetite</th>
              <th>Cholestrol</th>
              <th>BP</th>
              <th>Status</th>
              <th>Action</th>
             <th><a href="{{URL::to('/exceladmin')}}" class="btn btn-warning">Download Excel</a></th>
            </tr>
            @foreach($patientreports as $p)
            <tr>
              <td>{{$p->patient_name}}</td>
              <td>{{$p->Blood_Group}}</td>
              <td>{{$p->Fever}}</td>
              <td>{{$p->Flu}}</td>
              <td>{{$p->Appetite}}</td>
              <td>{{$p->Cholestrol}}</td>
              <td>{{$p->BP}}</td>
              <td>{{$p->status}}</td>
              <td>
                <a href="{{ URL::to('/delete/'. $p->id) }}" onclick="return confirm('are you sure to CANCEL this')" class="btn btn-danger">CANCEL</a>

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