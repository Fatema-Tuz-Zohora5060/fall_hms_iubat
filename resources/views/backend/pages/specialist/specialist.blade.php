@extends("backend.master")
@section('content')

<h1>Specialist</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">specialist_at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach($list as $key=>$data)


<tr>
  <th scope="row">{{$key + $list->firstItem()}}</th>

  <td>{{$data->name}}</td>
  <td>{{$data->status}}</td>
  <td>{{$data->specialist_at}}</td>
  <td>
    <a href="" class="btn btn-primary">View</a>
    <a href="" class="btn btn-danger">Delete</a>
    <a href="" class="btn btn-warning">Edit</a>

  </td>

</tr>

@endforeach

  </tbody>

</table>
{{$list->links()}}
<div>
  <a class="btn btn-success" href="{{route('specialist.form')}}">Registration Form</a>
</div>















@endsection