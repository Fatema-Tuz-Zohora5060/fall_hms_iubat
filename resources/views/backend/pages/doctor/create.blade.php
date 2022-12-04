@extends('backend.master')


@section('content')
<form action="{{route('doctor.store')}}" method="post" enctype="multipart/form-data">



    @if($errors->any())
    @foreach($errors->all() as $message)
    <p class="alert alert-danger">{{$message}}</p>
    @endforeach
    @endif

    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" class="form-control" name="doctorName" placeholder="Enter your name">
    </div>
    <div>
        <label for="name">Specialist</label>

        <select name="specialist" id="" class="form-control">
            @foreach($specials as $data)
            <option value="{{$data->id}}">{{$data->name}}</option>

            @endforeach

        </select>
    </div>

    <div>
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image">
    </div>
    
    <div>
        <label for="number">Number</label>
        <input type="text" class="form-control" name="doctorNumber" placeholder="Enter your number" required>
    </div>


    <div>
        <label for="date">Date</label>
        <input type="date" class="form-control" name="date" placeholder="date" required>
    </div>

    <div>
        <label for="address">Address</label>
        <input type="text" class="form-control" name="Address" placeholder="Enter your address">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email">
    </div>



   
    <input type="submit" class="mt-3 btn btn-info" value="submit">
</form>

  </div>





@endsection