@extends('layouts.master')

@section('content')
  @include('partials.nav')
  @include('partials.errors')
  <body>
    <div class="mw6 center pa3 sans-serif">
      <div class="pa2 mb3 striped--near-white">
        <div class="pl2">
          <form id='editForm' action="{{ route('contact.update') }}" method='post' route='contact.edit'>

            <div class="form-group col-sm-7">
              <label for='name'>Name:</label>
              <br/>
              <input class="mb4 form-control" type='text' name='name' id='name' value='{{ $contact->name }}'/>
            </div>

            <div class="form-group col-sm-7">
              <label for='phone'>Phone:</label>
              <br/>
              <input class="form-control" type='text' name='phone' id='phone' value='{{$contact->phone}}'/>
            </div>
            <div class="form-group col-sm-10">
              <label for='email'>Email:</label>
              <br/>
              <input class="form-control" type='text' name='email' id='email' value='{{$contact->email}}'/>
            </div>
            <div class="form-group col-sm-12">
              <label for='address'>Address:</label>
              <br/>
              <input class="form-control" type='text' name='address' id='address' value='{{$contact->address}}'/>
            </div>
            <div>
              <input type='hidden' name='id' id='id' value='{{$contact->id}}'/>
            </div>

            {{ csrf_field() }}
            <button type='submit' class='btn btn-primary'>Save</button>

          </form>
        </div>
      </div>
      <button class='btn btn-light' onclick="window.location.href = '{{ route('contact', ['id' => $contact->id]) }}';">Cancel</button>
      <button class='editContact hover-white' onclick="window.location.href = '{{ route('contact', ['id' => $contact->id]) }}';">✎ Edit Contact</button>
    </div>
  </body>
@endsection
