@extends('layouts.app')
@section('content')
  @include('partials.messages')
    <div class="container">
        <a href="{{ route('addnew') }}"><button  style="float:right" class="btn  my-3 btn-primary">Add New  </button></a>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
       <th scope="col">Action</th>
        <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @php 
    $i=1;
    @endphp
    @foreach($cruds as $crud)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $crud->name }}</td>
      <td>{{ $crud->email }}</td>
      <td>{{ $crud->phone }}</td>
      <td>{{ $crud->address }}</td>
      <td><a href="{{ route('update',$crud->id) }}"><button class="btn btn-primary">Edit</button></a></td>
      <td><a href="{{ route('delete',$crud->id) }}"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
    @endforeach
  </tbody>

</table>
</div>
@endsection