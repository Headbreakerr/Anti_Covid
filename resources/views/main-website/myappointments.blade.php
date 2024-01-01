@extends('main-website.components.master') @section('content')
@include('main-website.components.navbar')

<div class="container my-5 w-75" style="font-size: smaller">
    <div class="table-responsive">
        <table class="table">
            <tr class="bg-secondary border">
                <th>Name</th>
                <th>Hospital</th>
                <th>Vaccine</th>
                <th>Time</th>
                <th>Date</th>
                <th>Message</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach($appoint as $f)
            <tr>
                <td>{{$f->first_name}} {{$f->last_name}}</td>
                <td>{{$f->hospitalname}}</td>
                <td>{{$f->vaccinename}}</td>
                <td>{{$f->time}}</td>
                <td>{{$f->date}}</td>
                <td>{{$f->massage}}</td>
                <td>{{$f->phone}}</td>
                <td>{{$f->status}}</td>
                <td>
                    <a
                        href="{{ URL::to('/deleteapp/'. $f->id) }}"
                        onclick="return confirm('are you sure to delete this')"
                        class="btn btn-danger"
                        >Cancel</a
                    >
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

<div class="mt-5"></div>

@include('main-website.components.footer') @endsection
