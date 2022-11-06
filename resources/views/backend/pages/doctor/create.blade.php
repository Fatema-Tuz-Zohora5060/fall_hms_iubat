@extends('backend.master')


@section('content')




<form action="{{route('doctor.store')}}" method="post">
      @csrf
        <div>
            <label for="name">name</label>
            <input type="text" class="form-control" name="doctorName" placeholder="name">

        </div>

        <div>
            <label for="number">number</label>
            <input type="text" class="form-control" name="doctorNumber" placeholder="number">

        </div>
        <div>
            <label for="address">address</label>
            <input type="text" class="form-control" name="doctorAddress" placeholder="address">
        </div>
        <div>
            <label for="address">Fees</label>
            <input type="text" class="form-control" name="fees" placeholder="fees">
        </div>


        <input type="submit" class="mt-3 btn btn-info" value="submit">
    </form>


</div>





@endsection

