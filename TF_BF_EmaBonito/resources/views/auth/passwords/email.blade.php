@extends('master.main')

@section('content')
<div class="container-fluid" style="padding:0; margin:0">
    <div class="row" style="padding:0; margin:0; justify-content:space-between; align-items:center;">

        @component('components.lines', ['side' => 'left'])
        @endcomponent

        <div class="col-md-8">
            <h1 class="text-center">{{ __('Reset Password') }}</h1>
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
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
