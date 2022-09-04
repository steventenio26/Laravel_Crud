@extends('layout')

@section('content')
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Account
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
        </div>
        <form action="{{ route('accounts.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                    <div class="mb-3">
                    <label class="form-label">Firstname</label>
                    <input type="text" name="firstname" class="form-control">
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Lastname</label>
                    <input type="text" name="lastname" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($crud as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->firstname}}</td>
          <td>{{$item->lastname}}</td>
          <td>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal1{{$item->id}}">
    Edit
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal1{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Edit Account</h5>
        </div>
        <form action="{{ route('accounts.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                    <div class="mb-3">
                    <label class="form-label">Firstname</label>
                    <input type="text" name="firstname" value="{{ $item->firstname }}" class="form-control">
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Lastname</label>
                    <input type="text" name="lastname" value="{{ $item->lastname }}" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
          </td>
          <td>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2{{$item->id}}">
    Delete
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal2{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">Delete Account</h5>
        </div>
        <form action="{{route('accounts.destroy', $item->id)}}" method="post">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                <p>Are you sure you want to delete this account?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection