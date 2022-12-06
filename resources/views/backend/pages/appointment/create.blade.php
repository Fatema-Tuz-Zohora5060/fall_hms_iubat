@extends("backend.master")

@section('content')
<h1>Patient Appointment</h1>

<div class="container">

    <form action="{{route('appointment.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      
        <div>
            <label for="name">Name</label>
            <input type="string" class="form-control" name="name" placeholder="name">
        </div>

         <div>
            <label for="mobile">Mobile Number</label>
            <input type="string" class="form-control" name="mobile" placeholder="number">
         </div>

         <div>
            <label for="date">Date</label>
            <input type="date" class="form-control" name="date" placeholder="date">
         </div>
         <div>
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" placeholder="address">
         </div>
         <div>
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="email">
         </div>
         <div>
            <label for="doctor_id">Doctor Name</label>

            <select name="doctor_name" id="" class="form-control">
                @foreach($doctors as $doctor)
                <option value="{{$doctor->id}}">{{$doctor->doctor_name}}</option>
                @endforeach
            </select>
        </div>
        
        










</div>


<input type="submit" class="mt-3 btn btn-info" value="submit">


</form>


</div>

@endsection