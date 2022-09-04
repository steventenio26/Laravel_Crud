@extends('layout')

@section('content')
<form action="{{ route('cars.update', $car->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label class="form-label">Car Name</label>
      <input type="text" name="car_name" value="{{ $car->car_name }}" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Car Brand</label>
      <input type="text" name="car_brand" value="{{ $car->car_brand }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection