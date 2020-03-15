@extends('layouts.master')

@section('content')
@include('partials.navbar')
@include('partials.errors')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Name Change') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('name.update') }}">
                        @csrf

                        <div class="form-group row">

                          <label for="currentName" class="col-md-4 col-form-label text-md-right">{{ __('Current Name') }}</label>

                          <div class="col-md-6">
                            <input id='currentName' value='{{$user->name}}' class="form-control" readonly/>
                          </div>

                        </div>

                        <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('New Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
