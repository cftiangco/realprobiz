@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-sm-1"></div>

    <div class="col-sm-10">
      <div style="float:right;">
        <a href="/properties/{{ $id }}/list/create" class="btn btn-primary btn-sm">Add New Image</a>
      </div>
      <table class="table table-bordered mt-5">
        <thead class="thead">
          <tr>
            <th scope="col">Order</th>
            <th scope="col">Image</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($lists as $list)
          <tr>
            <td>{{ $list->order }}</td>
            <td>
              <img src="{{ $list->img }}" alt="{{ $list->img }}" width="200">
            </td>
            <td>
              <a href="/properties/lists/{{ $id }}/edit/{{ $list->id }}" class="btn btn-warning">Edit</a>
            </td>
            <td>
              <form action="/properties/{{ $id }}/lists/{{ $list->id }}/delete" method="POST">
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
