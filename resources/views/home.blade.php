@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hi Admin welcome to your Dashboard
                </div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Manage Properties</h5>
                    <p class="card-text">You can Add, Edit and Delete Properties in this option</p>
                    <a href="/properties" class="btn btn-primary">Go To Manage Properties</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Content Option</h5>
                    <p class="card-text">You can modify your page content in this page including email</p>
                    <a href="#" class="btn btn-primary">Go To Content Option</a>
                  </div>
                </div>
              </div>
            </div>

        </div>
    </div>
</div>
@endsection
