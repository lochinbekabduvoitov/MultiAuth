@extends('user.user_master')
@section('user')

<div class="card" style="width: 18rem;">
    <img src="{{ (!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path) : url('upload/noimages.jpg')}}" class="card-img-top" >
    <div class="card-body">
      <h5 class="card-title">User name:{{$user->name}}</h5>
      <p class="card-text"> User email: {{ $user->email}}</p>
      <a href="{{ route('user.profile.edit')}}" class="btn btn-primary">Edit profile</a>
    </div>
  </div>

@endsection
