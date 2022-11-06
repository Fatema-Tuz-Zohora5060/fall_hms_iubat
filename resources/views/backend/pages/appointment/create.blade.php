@extends("backend.master")

@section('content')
<h1>Patient Appointment</h1>

<div class="container">

    <form action="{{route('appointment.store')}}" method="post">
        @csrf
        <div>
            <label for="user_id">User Id</label>
            <input type="text" class="form-control" name="user" placeholder="User Id">

        </div>

        <div>
            <label for="doctor_id">Doctor Id</label>
            <input type="text" class="form-control" name="doctor_id" placeholder="Doctor Id">

        </div>
        <div>
            <label for="fees">Fees</label>
            <input type="text" class="form-control" name="fees" placeholder="Fees">

        </div>
       
<input type="submit" class="mt-3 btn btn-info" value="submit">


    </form>


</div>

@endsection