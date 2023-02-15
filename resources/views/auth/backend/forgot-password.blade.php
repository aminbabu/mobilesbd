@extends('backend.layouts.auth.app')

@section('title', 'Forgot Password')

@section('content')
    <div class="card-body p-sm-5 m-sm-3 flex-grow-0">
        <h1 class="mb-0 fs-3">{{ __('Forgot password?') }}</h1>
        <div class="fs-exact-14 text-muted mt-2 pt-1 mb-5 pb-2">
            {{ __('Enter the email address associated with your account and we will send a link to reset your password.') }}
        </div>

        @if (session('status'))
            <div class="alert alert-success alert-sa-has-icon mt-4 mb-4" role="alert">
                <div class="alert-sa-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-check-circle">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                <div class="alert-sa-content">
                    {{ __('We have emailed your password reset link to ') }}
                    <strong>{{ session('email') }}</strong>.
                </div>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.password.email') }}" class="needs-validation" novalidate="">
            @csrf

            {{-- Email Address --}}
            <div class="mb-4">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input type="email" name="email" id="email"
                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus
                    required />
                @error('email')
                    <div class="invalid-feedback">{{ __($message) }}</div>
                @enderror
            </div>


            <div>
                <button type="submit" class="btn btn-primary btn-lg w-100">{{ __('Reset Password') }}</button>
            </div>
        </form>

        <div class="form-group mb-0 mt-4 pt-2 text-center text-muted">
            {{ __('Remember your password?') }}
            @if (Route::has('admin.login'))
                <a href="{{ route('admin.login') }}">{{ __('Sign in') }}</a>
            @endif
        </div>
    </div>
@endsection
