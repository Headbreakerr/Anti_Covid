@extends('main-website.components.master')

@section('content')

   @include('main-website.components.navbar')

   <div class="container">
    <table class="table">
        <tr>
            <th>first name</th>
            <th>last name</th>
            <th>hospital name</th>
            <th>vaccine name</th>
            <th>time</th>
            <th>date</th>
            <th>massage</th>
            <th>phone</th>
            <th>status</th>
            <th>action</th>
        </tr>
        @foreach($appoint as $f)
        <tr>
            <td>{{$f->first_name}}</td>
            <td>{{$f->last_name}}</td>
            <td>{{$f->hospitalname}}</td>
            <td>{{$f->vaccinename}}</td>
            <td>{{$f->time}}</td>
            <td>{{$f->date}}</td>
            <td>{{$f->massage}}</td>
            <td>{{$f->phone}}</td>
            <td>{{$f->status}}</td>
            <td>
              <a href="{{ URL::to('/delete/'. $f->id) }}" onclick="return confirm('are you sure to delete this')" class="btn btn-danger" >Cancel</a>
            </td>
        </tr>
        @endforeach
    </table>
  </div>
   
   <div class="mt-5"></div>
   
   @include('main-website.components.footer')

   @endsection