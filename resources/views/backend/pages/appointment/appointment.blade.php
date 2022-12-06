@extends('backend.master')

@section('content')
<h1>Appointment List</h1>

<a class="btn btn-success" href="{{route('appointment.create')}}">Registration Form</a>
<table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile</th>
            <th scope="col">Date</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th scope="col">Doctor Name</th>
            
           <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

      
       
        @foreach($apps as $key=>$data)
        
        <tr>
           
       
            <th scope="row">{{$key +1}}</th>

            
            <td>{{$data->mobile}}</td>
            <td>{{$data->date}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->doctor->doctor_name}}</td>
          
          
            
            
    
            <td>
                 <a href="" class="btn btn-primary">
                   View
                </a>
                <a href="{{route('admin.appointment.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                <a href="" class="btn btn-warning">Edit</a>

            </td>

        </tr>
        @endforeach
    </table>


@endsection