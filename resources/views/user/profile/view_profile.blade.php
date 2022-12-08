@extends('user.user_master')
@section('user')

<div class="card" style="width: 18rem;">
    <img src="{{ (!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path) : url('upload/noimages.jpg')}}" class="card-img-top" >
    <div class="card-body">
      <h5 class="card-title">{{$user->name}}</h5>
      <p class="card-text">{{ $user->email}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

@endsection
