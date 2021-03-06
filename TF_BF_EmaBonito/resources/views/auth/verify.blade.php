@extends('master.main')

@section('content')
<div class="container-fluid" style="padding:0; margin:0">
    <div class="row" style="padding:0; margin:0; justify-content:space-between; align-items:center;">
        @component('components.lines', ['side' => 'left'])
        @endcomponent
        <div class="col-md-8">
            <h1 class="text-center">{{ __('Verify Your Email Address') }}</h1>
            <div class="card">
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>

        @component('components.lines', ['side' => 'right'])
        @endcomponent
    </div>
</div>
@endsection
