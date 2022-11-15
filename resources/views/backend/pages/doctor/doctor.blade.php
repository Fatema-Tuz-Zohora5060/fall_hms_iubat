@extends('backend.master')

@section('content')


<a class="btn btn-success" href="{{route('doctor.create')}}">Registration Form</a>
<h1>login</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">DoctorName</th>
      <th scope="col">Image</th>
      <th scope="col">Number</th>
      <th scope="col">Address</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($dogs as $key=>$data)

    <tr>
      <th scope="row">{{$key + $dogs->firstItem()}}</th>
      <td>{{$data->doctor_name}}</td>
      <td><img width="100px" src="{{url('/uploads/'.$data->image)}}" alt="image"></td>
      <td>{{$data->number}}</td>
      <td>{{$data->address}}</td>
      <td>
        <a href="" class="btn btn-danger">Delete</a>
      </td>


    </tr>

    @endforeach

  </tbody>
</table>

{{$dogs->links()}}

</div>


</form>

@endsection