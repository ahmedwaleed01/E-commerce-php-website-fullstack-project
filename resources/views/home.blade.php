@extends('layouts.app')


@section('content')
<section>
      <!-- <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0 ">
              <li class="breadcrumb-item "><a href="#"  class="text-dark" style="text-decoration: none;" >Home</a></li>
              <li class="breadcrumb-item "><a href="#" class="text-dark" style="text-decoration: none;">User</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href=""  class="text-dark" style="text-decoration: none;" >User Profile</a></li>
            </ol>
          </nav>
        </div>
      </div> -->
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">{{$user->name}}</h5>
              
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->name}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->email}}</p>
                </div>
              </div>
              <hr>
            </div>
          
 
        </div>
      </div>
    </div>
  </section>
@endsection