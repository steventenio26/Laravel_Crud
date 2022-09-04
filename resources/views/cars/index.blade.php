@extends('layout')

@section('content')
    <a href="{{ route('cars.create') }}" class="btn btn-primary">Add Car</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Car Name</th>
            <th scope="col">Car Brand</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($crud as $item)
          <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->car_name }}</td>
            <td>{{ $item->car_brand}}</td>
            <td>
                <form action="{{ route('cars.edit', $item->id) }}" method="post">
                    @method('GET')
                    @csrf
                    <button type="submit" class="btn btn-warning">Edit</button>
                </form>
            </td>
            <td>
                <form action="{{ route('cars.destroy', $item->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection