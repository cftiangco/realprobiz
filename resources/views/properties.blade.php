@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-sm-1"></div>

    <div class="col-sm-10">
      <div style="float:right;">
        <a href="/new" class="btn btn-primary btn-sm">New Property</a>
      </div>
      <table class="table table-bordered mt-5">
        <thead class="thead">
          <tr>
            <th scope="col">Property Name</th>
            <th scope="col">Location</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($properties as $property)
          <tr>
            <td>{{ $property->name }}</td>
            <td>{{ $property->location }}</td>
            <td>{{ $property->price }}</td>
            <td>{{ $property->description }}</td>
            <td>
              <img src="{{ $property->img }}" alt="properties" width="200">
            </td>
            <td>
              <a href="/properties/edit/{{ $property->id }}" class="btn btn-warning">Edit</a>
            </td>
            <td>
              <form action="/properties/{{ $property->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="col-sm-1"></div>
  </div>

</div>

@endsection
