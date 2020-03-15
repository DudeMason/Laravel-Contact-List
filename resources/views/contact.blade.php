@extends('layouts.master')

@section('content')
  @include('partials.nav')
  @include('partials.alerts')
  <body>
    <div class="mw6 center pa3 sans-serif">
        <h1 class="mb4">{{ $contact->name }}</h1>

        <div class="pa2 mb3 striped--near-white">
          <div class="pl2">
              @if ($contact->phone)
                <a class="mb2" style='margin: 10px; padding: 5px;' href="tel:{{$contact->phone}}">
                  <span style='vertical-align: middle; font-size: 21px;'>✆</span>
                  &nbsp; {{ $contact->phone }}
                </a>
                <hr/>
              @else
                <p class="mb2" style='margin: 10px; padding: 5px;'>
                  <button type="button" class="btn btn-light" onclick="window.location.href = '{{ route('contact.edit', ['id' => $contact->id]) }}';">
                    <span style='vertical-align: middle; font-size: 22px;'>✆</span> Add phone number
                  </button>
                </p>
                <hr/>
              @endif

              @if ($contact->email)
                <a class="mb2" style='margin: 10px; padding: 5px;' href="mailto:{{$contact->email}}">
                  <span style='vertical-align: middle; font-size: 25px;'>✉︎</span>
                  &nbsp; {{ $contact->email }}
                </a>
                <hr/>
              @endif
              @if ($contact->address)
                <a class="mb2" style='margin: 10px; padding: 5px;' href="https://maps.google.com/?q={{$contact->address}}" target="_blank" rel="noopener noreferrer">
                  <span style='vertical-align: middle; font-size: 24px;'>⍟</span>
                  &nbsp; {{ $contact->address }}
                </a>
                <hr/>
              @endif
          </div>
        </div>
        <button class='editContact hover-white' onclick="window.location.href = '{{ route('contact.edit', ['id' => $contact->id]) }}';">✎ Edit Contact</button>
    </div>
  </body>
@endsection
