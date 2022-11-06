@extends('backend.master')
@section('content')
<form action="{{route('specialist.add')}}" method="post">
    @csrf 
        
        <div>
            <label for="specialized_id">User Id</label>
            <input type="text" class="form-control" name="specialized_id" placeholder="pecialized_id">

            </div>

        <div>
            <label for="specialized_name">Doctor Id</label>
            <input type="text" class="form-control" name="specialized_name" placeholder="specialized_department">

        </div>
        <div>
            <label for="specialized_department">Fees</label>
            <input type="text" class="form-control" name="specialized_department" placeholder="specialized_department">

        </div>
       
<input type="submit" class="mt-3 btn btn-info" value="submit">


    </form>


</div>


@endsection


