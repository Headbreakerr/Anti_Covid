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
                        @foreach($hospital as $p)
                        <tr>
                            <td>{{$p->name}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->phone}}</td>
                            <td>{{$p->address}}</td>
                            <td>
                                <a href="{{ URL::to('/deletead/'. $p->id) }}" onclick="return confirm('are you sure to CANCEL this')" class="btn btn-danger">CANCEL</a>
                                <button class="add btn btn-primary"
                                 data-name="{{ $p->name}}" 
                                 data-address="{{ $p->address}}" 
                                 data-phone="{{ $p->phone}}" 
                                 data-email="{{ $p->email}}" 
                                 data-password="{{ $p->password}}"
                                 data-role="{{ $p->role}}"
                                 data-image="{{ $p->image}}"
                                 >Add Hospital</button>
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
    
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
          $('.add').click(function(){
                var name = $(this).attr("data-name");
                var address = $(this).attr("data-address");
                var phone = $(this).attr("data-phone");
                var email = $(this).attr("data-email");
                var password = $(this).attr("data-password");
                var role = $(this).attr("data-role");
                var image = $(this).attr("data-image");
                $.ajax({
                    url:'/hospital-approvel-request',
                    type:'post',
                    data:{
                        name : name,
                        address : address,
                        phone : phone,
                        email : email,
                        password : password,
                        role : role,
                        image : image,
                        '_token' : '{{csrf_token()}}'
                    },
                    success:function(){
                        alert('data has been inserted')
                    }
                })
            })
    </script>
    <!-- End custom js for this page -->
</body>

</html>