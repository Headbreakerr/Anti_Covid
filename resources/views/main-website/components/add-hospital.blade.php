@extends('main-website.components.master')

@section('content')

@include('main-website.components.hospitalnavbar')
<section class="ftco-section ftco-no-pt ftc-no-pb">
    <h1 style="text-align: center;">Add Hospital</h1>
<form action="{{route('registerh')}}" method="post" enctype="multipart/form-data">
    @csrf
    <table class="table">
        <tr>
            <td>Hospital Name</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>Hospital E-Mail</td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td>Hospital Password</td>
            <td><input type="password" name="password" id=""></td>
        </tr>
        <tr>
            <td>Hospital Phone</td>
            <td><input type="text" name="phone" id=""></td>
        </tr>
        <tr>
            <td>Hospital Address</td>
            <td><input type="text" name="address" id=""></td>
        </tr>
        <tr>
            <td><input type="hidden" name="role" value="hospital" id=""></td>
        </tr>
        <tr>
            <td>Hospital image</td>
            <td><input type="file" name="image" id=""></td>
        </tr>
        <tr>
            <td><input type="submit" value="Add Hospital" class="btn btn-secondary" id=""></td>
        </tr>
        
    </table>
 </form>
</section>

@include('main-website.components.footer')
@endsection

