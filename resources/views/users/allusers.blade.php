@extends('layouts.navbar')


@section('content')

<h3 class="text-center my-5 mb-3">All Users</h3>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">UserName</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Created_at</th>
     
    
    </tr>
  </thead>
  <tbody>
  <?php $c=1; ?>
    @foreach($users as $user)
    <?php if ($user->role_id==1){
      $role="admin";
    }elseif($user->role_id==2){
      $role="moderator";
    }else{
      $role="user";
    }
    ?>
    <tr>
      <th scope="row">{{$c}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$role}}</td>
      <td>{{$user->created_at}}</td>
    </tr>
    <?php $c=$c+1; ?>
    @endforeach
  </tbody>
</table>
</div>

@endsection