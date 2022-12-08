@extends('user.user_master')
@section('user')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="container mt-5">
    <form method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">User Name</label>
          <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{ $editData->name}}" >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $editData->email}}" >
          </div>
        <div class="mb-3 ">
            <label for="formFile" class="form-label">User image</label>
            <input class="form-control" name="profile_photo_path" type="file" id="image">
        </div>
        <div class="mb-3 ">
            <img id="showImage" src="{{ (!empty($editData->profile_photo_path)) ? url('upload/user_images/'.$editData->profile_photo_path) : url('upload/noimages.jpg')}}" class="card-img-top"  style="width: 100px; height:100px">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader= new FileReader();
            reader.onload=function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataUrl(e.target.files['0']);
        })
    })

</script>


@endsection
