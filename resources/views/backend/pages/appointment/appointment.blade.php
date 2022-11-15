@extends('backend.master')

@section('content')
<h1>Appointment List</h1>

<a class="btn btn-success" href="{{url('appointment/create')}}">Registration Form</a>
<table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Doctor Name</th>
            <th scope="col">image</th>
            <th scope="col">User_id</th>
            <th scope="col">Fees</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

{{-- {{$data->doctors->doctor_name}} --}}
       
        @foreach($apps as $key=>$data)
        
        <tr>
       
            <th scope="row">{{$key +1}}</th>

            <td>{{$data->doctor->doctor_name}}</td>
            <td>{{$data->image}}</td>
            <td>{{$data->user_id}}</td>
            <td>{{$data->fees}}</td>
            
    
            <td>
                 <a href="" class="btn btn-primary">
                   View
                </a>
                <a href="" class="btn btn-danger">Delete</a>
                <a href="" class="btn btn-warning">Edit</a>

            </td>

        </tr>
        @endforeach
    </table>


@endsection