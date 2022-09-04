@extends('layout')

@section('content')
<form action="{{ route('cars.store') }}" method="POST">
  @csrf
    <div class="mb-3">
      <label class="form-label">Car Name</label>
      <input type="text" name="car_name" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Car Brand</label>
      <input type="text" name="car_brand" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection