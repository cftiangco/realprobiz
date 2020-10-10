@extends('layout.master')

@section('content')
<div class="container-fluid mt-3">

  <div class="row">

    <div class="col-sm-3"></div>

    <div class="col-sm-6">
      <form method="POST" action="/properties/lists/{{$pid}}/edit/{{ $list->id }}">
        @method('put')
        @csrf
      <div class="form-group">
         <label for="image">Image URL</label>
         <input type="text" class="form-control" id="image" placeholder="URL" name="image" value="{{ $list->img }}">
       </div>

      <div class="form-group">
        <label for="order">List Order</label>
        <input type="number" class="form-control" id="order" placeholder="0" name="order" value="{{ $list->order }}">
      </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>

    <div class="col-sm-3">

    </div>
  </div>

</div>

@endsection
