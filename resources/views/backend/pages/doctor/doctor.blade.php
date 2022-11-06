@extends('backend.master')

@section('content')

 
 <a class="btn btn-success" href="{{route('doctor.create')}}">Registration Form</a>
 <h1>login</h1><table class="table">
 <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">DoctorName</th>
      <th scope="col">Number</th>
      <th scope="col">Address</th>
     
    </tr>
  </thead>
  <tbody>

  @foreach($dogs as $data)



    <tr>
      <th scope="row">1</th>
      <td>{{$data->doctor_name}}</td>
       <td>{{$data->number}}</td>
       <td>{{$data->address}}</td>
         <td> 
                <a href="" class="btn btn-danger">Delete</a>
              </td>
     
      
    </tr>

    @endforeach
     
  </tbody>
</table>

     </div>
    















</form>



@endsection