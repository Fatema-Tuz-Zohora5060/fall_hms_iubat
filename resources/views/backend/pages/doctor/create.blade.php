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
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" >

    </div>



    <div>
        <label for="number">Number</label>
        <input type="text" class="form-control" name="doctorNumber" placeholder="Enter your number" required>

    </div>





    <div>
        <label for="address">Address</label>
        <input type="text" class="form-control" name="doctorAddress" placeholder="Enter your address">
    </div>
    <div>
        <label for="address">Fees</label>
        <input type="text" class="form-control" name="fees" placeholder="enter your fees">
    </div>


    <input type="submit" class="mt-3 btn btn-info" value="submit">
</form>


</div>





@endsection