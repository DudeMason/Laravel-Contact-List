@extends('layouts.master')

@section('content')
  @include('partials.errors')
  <body>
    <div class="pa3 flex items-center">
      <button class="dib menuButton bg-animate hover-bg-white hover-black" onclick="window.location.href = '/list';">
        <span>⏎</span>
      </button>
    </div>
    <div class="mw6 center pa3 sans-serif">
      <div class="pa2 mb3 striped--near-white">
        <div class="pl2">
          <h2>Add a Contact</h2>
          <br/>
          <form action="{{ route('contact.add') }}" method='post'>

            <div class="form-group col-sm-7">
              <label for='name'>Name:</label>
              <br/>
              <input class="mb4 form-control" type='text' name='name' id='name' value='' placeholder="Name"/>
            </div>

            <div class="form-group col-sm-7">
              <label for='phone'>Phone:</label>
              <br/>
              <input class="form-control" type='text' name='phone' id='phone' value='' placeholder="Phone"/>
            </div>
            <div class="form-group col-sm-10">
              <label for='email'>Email:</label>
              <br/>
              <input class="form-control" type='text' name='email' id='email' value='' placeholder="Email"/>
            </div>
            <div class="form-group col-sm-12">
              <label for='address'>Address:</label>
              <br/>
              <input class="form-control" type='text' name='address' id='address' value='' placeholder="Address"/>
            </div>
            <p>
              <input type='hidden' name='id' id='id' value=''/>
            </p>

            {{ csrf_field() }}
            <button type='submit' class='btn btn-primary'>Save</button>

          </form>
        </div>
      </div>
    </div>
  </body>
@endsection
