@extends('layouts.app')
@section('content')
 @include('partials.messages')
    <div class="container mt-4">
      <div class="row justify-content-center">
       <div class=" col-md-6 ">
         <form method="POST">
            @csrf
           <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text " class="form-control" name="name"   placeholder="Enter Name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text " class="form-control" name="email"  placeholder="Enter Email">
   
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text " class="form-control" name="phone" placeholder="Enter Phone">
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text " class="form-control" name="address"  placeholder="Enter Address">
    
    
  </div>
  
  <input type="submit" class="btn btn-primary" value="submit">
</form>
       </div>
      </div>
 
</div>
@endsection