@extends('layout.master')

@section('content')

<div class="container-fluid mt-3">

  <div class="row">

    <div class="col-sm-3"></div>

    <div class="col-sm-6">
      <form method="POST" action="/properties/edit/{{ $property->id }}" enctype="multipart/form-data">
      @method('put')
      @csrf
      <input type="hidden" placeholder="Name" name="id" value="{{ $property->id }}">
      <div class="form-group">
         <label for="name">Property Name</label>
         <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ $property->name }}" required>
       </div>

      <div class="form-group">    <div class="col-sm-3"></div>
        <label for="location">Location</label>
        <input type="text" class="form-control" id="location" placeholder="Location" name="location" value="{{ $property->location }}" required>
      </div>

      <div class="form-group">
       <label for="price">Price</label>
       <input type="text" class="form-control" id="price" placeholder="Price" value="{{ $property->price }}" name="price" required>
     </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" rows="3" name="description" required>{{ $property->description }}</textarea>
      </div>

      <div class="form-group">
       <label for="image">Display Image</label>
       <input type="text" class="form-control" id="image" placeholder="Image URL" name="image" value=" {{ $property->img }}" required>
     </div>

     <button type="submit" class="btn btn-primary">Update</button>
     <a href="/properties/lists/{{ $property->id }}" class="btn btn-warning">Add of List Images</a>

    </form>
    </div>

    <div class="col-sm-3">

    </div>
  </div>

</div>

@endsection
