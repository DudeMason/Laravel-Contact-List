@extends('layouts.master')

@section('content')
  @include('partials.navbar')
  @include('partials.alerts')
  <body>
    <div class="mw6 center pa3 sans-serif">
      <h1 class="mb4">Contacts</h1>

      @if (!$contacts->count())
      <div>
        You don't have any contacts!
        <br/>
        <br/>
        Click the addition button below to add a new contact!
      </div>
      @else
        @foreach($contacts as $contact)
          <div class="pa2 mb3 striped--near-white">

            <a href="{{ route('contact', ['id' => $contact->id]) }}">
              <b class="b mb2">{{ $contact->name }}</b>
            </a>

          </div>
        @endforeach
      @endif
      <button class='addContact hover-white' onclick="window.location.href = '/add';">+</button>
    </div>
  </body>
@endsection
