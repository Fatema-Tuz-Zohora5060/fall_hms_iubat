@extends('frontend.master')
@section('content')


<form action="{{route('appointment.form.submit')}}" method='post'>
  <div class="container">
  @csrf
  <div class="row g-3">
    
    <div class="col-12 col-sm-12">
      <input type="text" name="name" class="form-control border-2" placeholder="Your Name">
    </div>
    <div class="col-12 col-sm-12">
      <input type="text" name="mobile" class="form-control border-2" placeholder="Your Mobile" style="height: 55px;">
    </div>
    <div class="col-12 col-sm-12">
      <div class="col-sm-12" id="time" data-target-input="nearest">
        <input type="date" name="date" class="form-control border-2 datetimepicker-input" placeholder="Choose Date" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
      </div>
      <div class="col-12 col-sm-12">
        <input type="text" name="address" class="form-control border-2 datetimepicker-input" placeholder="address" style="height: 55px;">
      </div>


      
      <div class="col-12 col-sm-12
      
      
      
      
      
      
      
      
      
      ">
          <input type="email" name="email" class="form-control border-2" placeholder="Your Email" style="height: 55px;">
        </div>
        







        <div class="col-12">
          <button class="btn btn-primary w-20 py-3" type="submit">Book Appointment</button>
        </div>
      </div>
    </div>
  </div>
  </div>
</form>



@endsection