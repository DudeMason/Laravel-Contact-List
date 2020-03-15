@extends('layouts.master')

@section('content')
@include('partials.navbar')
@include('partials.alerts')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">User Dashboard</div>

                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif

                      {{ $user->name }} -- <a href="{{ route('nameChange') }}">Change Name</a>
                      <br/>
                      <a href="{{ route('emailChange') }}">Change Email</a>
                      <br/>
                      <a href="{{ route('passwordReset') }}">Change Password</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
