@extends('master.main')

@section('content')
<div class="container-fluid" style="padding:0; margin:0">
    <div class="row" style="padding:0; margin:0; justify-content:space-between; align-items:center;">

        @component('components.lines', ['side' => 'left'])
        @endcomponent

        <div class="col-md-8">
            <h1 class="text-center">{{ __('Confirm Password') }}</h1>

            <div class="card">
                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @component('components.lines', ['side' => 'right'])
        @endcomponent
    </div>
</div>
@endsection
