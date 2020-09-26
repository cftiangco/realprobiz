@extends('layout.master')

@section('content')

<div class="container-fluid mt-3">

  <div class="row">

    <div class="col-sm-3"></div>

    <div class="col-sm-6">
      <form method="POST" action="/properties" enctype="multipart/form-data">

        @csrf

      <div class="form-group">
         <label for="name">Property Name</label>
         <input type="text" class="form-control" id="name" placeholder="Name" name="name">
       </div>

      <div class="form-group">    <div class="col-sm-3"></div>
        <label for="location">Location</label>
        <input type="text" class="form-control" id="location" placeholder="Location" name="location">
      </div>

      <div class="form-group">
       <label for="price">Price</label>
       <input type="text" class="form-control" id="price" placeholder="Price" value="0.0" name="price">
     </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
      </div>

      <div class="form-group">
       <label for="fileupload">Display Image</label>
       <input type="file" class="form-control" id="fileupload" placeholder="Image" name="fileupload">
     </div>

     <button type="submit" class="btn btn-primary">Save</button>

      </form>
    </div>

    <div class="col-sm-3">

    </div>
  </div>

</div>

@endsection
