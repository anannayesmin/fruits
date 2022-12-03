@extends('backend.master')
@section('contents')

<form action="{{route('product.form')}}" method="POST">
@csrf


  <div class="row">
    <div class="col">
      <input type="text" name="first_name" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" name="last_name" class="form-control" placeholder="Last name">
    </div>
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection