@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <form method="POST" action="/background">
      @csrf
    <input type="hidden" name="_method" value="PUT">

    <div class="form-row mt-1">
      <div class="col-sm-2">
        <input type="text" class="form-control" value="{{ $images[0]->id }}" name="img_id_1" readonly>
      </div>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Image URL" name="img1" value="{{ $images[0]->img }}" required>
      </div>
    </div>

    <div class="form-row mt-1">
      <div class="col-sm-2">
        <input type="text" class="form-control" value="{{ $images[1]->id }}" name="img_id_2" readonly>
      </div>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Image URL" value="{{ $images[1]->img }}" name="img2" required>
      </div>
    </div>

    <div class="form-row mt-1">
      <div class="col-sm-2">
        <input type="text" class="form-control"value="{{ $images[2]->id }}" name="img_id_3" readonly>
      </div>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Image URL" value="{{ $images[2]->img }}" name="img3" required>
      </div>
    </div>

    <div class="form-row mt-1">
      <div class="col-sm-2">
        <input type="text" class="form-control" value="{{ $images[3]->id }}" name="img_id_4" readonly>
      </div>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Image URL" value="{{ $images[3]->img }}" name="img4" required>
      </div>
    </div>

    <div class="form-row mt-1">
      <div class="col-sm-2">
        <input type="text" class="form-control" value="{{ $images[4]->id }}" name="img_id_5" readonly>
      </div>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Image URL" value="{{ $images[4]->img }}" name="img5" required>
      </div>
    </div>

    <br>

    <button type="submit" class="btn btn-primary float-right">Update</button>

  </form>

</div>
@endsection
