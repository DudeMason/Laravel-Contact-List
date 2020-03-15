@extends('layouts.master')

@section('content')
  @include('partials.navbar')
  @include('partials.alerts')
  <body>
    <div class="mw6 center pa3 sans-serif">
      <h1 class="mb4">Laravel Contact List</h1>
      <h4 class="mb4">Welcome</h4>
      <p>
        Please login or register
      </p>
    </div>
  </body>
@endsection
