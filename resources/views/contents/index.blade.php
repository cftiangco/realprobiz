@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="/contents">
      @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id" value="{{ $contents->id }}">

    <div class="form-group">
      <label for="formGroupExampleInput">Headline</label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="headline" placeholder="Example input" value="{{ $contents->headline }}">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Sub Headline</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" name="sub_headline" placeholder="Another input" value="{{ $contents->sub_headline }}">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Description List</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" name="description_list" placeholder="Another input" value="{{ $contents->description_list }}">
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">About Us</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="about_us" rows="3">{{ $contents->about_us }}</textarea>
    </div>

    <div class="form-group">
      <label for="formGroupExampleInput2">Contacts</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" name="contact_us" placeholder="Another input" value="{{ $contents->contact_us }}">
    </div>

    <div class="form-group">
      <label for="formGroupExampleInput2">Email Address</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" name="email_us" placeholder="Another input" value="{{ $contents->email_us }}">
    </div>

    <div class="form-group">
      <label for="formGroupExampleInput2">Address</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" name="address" placeholder="Another input" value="{{ $contents->address }}">
    </div>

    <button type="submit" class="btn btn-primary float-right">Update</button>

  </form>

</div>
@endsection
