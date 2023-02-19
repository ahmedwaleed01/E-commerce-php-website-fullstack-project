@extends('layouts.navbar')


@section('content')


<div class="container my-5">
    <h3 class="text-center">ADD Moderator</h3>
   <form action="{{route('storem')}}">
    @csrf 
   <div>
    <h5> <label for="username">Name</label></h5>
    <input type="text" class="form-control w-50 my-3 @error('name') is-invalid @enderror"  id="name" name="name">
    @error('name')
    <div class="alert  w-50 alert-danger">{{ $message }}</div>
    @enderror
   </div>
  <div class="my-3">
      <h5> <label for="staticEmail" class="col-form-label">Email</label></h5>
      <input type="text"  class="form-control w-50 @error('email') is-invalid @enderror" id="email"  name="email">
      @error('email')
    <div class="alert  w-50 my-3 alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="my-3 mb-3">
    <h5><label for="inputPassword" class="col-sm-2 col-form-label">Password</label></h5>
    <input type="password" class="form-control w-50 @error('password') is-invalid @enderror"  id="password" name="password"> 
    @error('password')
    <div class="alert  w-50 my-3 alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="my-3 mb-3">
  <select class="form-select w-50" aria-label="Default select example" name='role'>
  <option selected>Select Role</option>

 <option value="2">Moderator</option>

</select>
  </div>
    <button class="btn btn-warning" type="submit">ADD</button>

   </form>
</div>
@endsection