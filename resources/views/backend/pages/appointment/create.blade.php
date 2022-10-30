@extends("backend.master")

@section('content')
<h1>Patient Appointment</h1>


<form action="">

<div>
    <label for="name">Enter your Name</label>
    <input type="text" class="form-control" id="name" placeholder="enter your name">
    
</div>

<div>
    <label for="mobile number">Enter your mobile number</label>
    <input type="text" class="form-control" id="mobile number" placeholder="mobile number">
    
</div>
<div>
    <label for="doctor name">Enter your doctor name</label>
    <input type="text" class="form-control" id="mobile number" >
    
</div>
<div>
    <label for="doctor picture">doctor picture/label>
    <input type="file" class="form-control" id="doctor picture" >
    
</div>
<div>
    <label for="branch name">Enter branch name</label>
    <input type="text" class="form-control" id="branch name" placeholder="branch name">
    
    
    <select name="" id="branch name">
        <option value="">uttara</option>
        <option value="">banani</option>
        <option value="">gulshan</option>
    </select>
    
    
  
</div>
<div>
<input type="submit" class="mt-3">
</div>



</form>



@endsection