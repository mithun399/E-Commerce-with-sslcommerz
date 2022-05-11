@extends('master')
@section('content')
<h2>Register Page</h2>
<div class="container custom-login">
    <div class="row">
    <div class="col-sm-4 offset-sm-4">
    <form method="POST" action="register">
    @csrf
    <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter email">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

@endsection