@extends('layouts.app')

@section('content')

<div class="container-fluid mt-3">

  <div class="row">

    <div class="col-sm-3"></div>

    <div class="col-sm-6">
      <form method="POST" action="/properties">
        @csrf
      <div class="form-group">
         <label for="name">Property Name</label>
         <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
       </div>

      <div class="form-group">
        <label for="location">Location</label>
        <input type="text" class="form-control" id="location" placeholder="Location" name="location" required>
      </div>

      <div class="form-group">
       <label for="price">Price</label>
       <input type="text" class="form-control" id="price" placeholder="Price" value="0.0" name="price" required>
     </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" rows="3" name="description" required></textarea>
      </div>

      <div class="form-group">
       <label for="image">Display Image</label>
       <input type="text" class="form-control" id="image" placeholder="Image URL" name="image" required>
     </div>

     <button type="submit" class="btn btn-primary">Save</button>

      </form>
    </div>

    <div class="col-sm-3">

    </div>
  </div>

</div>

@endsection
