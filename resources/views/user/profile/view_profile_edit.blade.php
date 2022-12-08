@extends('user.user_master')
@section('user')

<div class="container mt-5">
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">User Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $editData->name}}" >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" value="{{ $editData->email}}" >
          </div>
        <div class="mb-3 ">
            <label for="formFile" class="form-label">User image</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3 ">
            <img src="{{ (!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path) : url('upload/noimages.jpg')}}" class="card-img-top"  style="width: 100px; height:100px">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection
