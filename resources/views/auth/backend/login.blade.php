@extends('backend.layouts.auth.app')

@section('title', 'Sign In')

@section('content')
<div class="card-body p-sm-5 m-sm-3 flex-grow-0">
    <h1 class="mb-0 fs-3">{{ __('Sign In') }}</h1>
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
            {{ session('status') }}
        </div>
    </div>
    @endif
    <div class="fs-exact-14 text-muted mt-2 pt-1 mb-5 pb-2">{{ __('Log in to your account to continue.') }}</div>
    <form method="POST" action="{{ route('dashboard.login') }}" class="needs-validation" novalidate="">
        @csrf

        {{-- Email Address --}}
        <div class="mb-4">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" autofocus required />
            @error('email')
            <div class="invalid-feedback">{{ __($message) }}</div>
            @enderror
        </div>

        {{-- Password --}}
        <div class="mb-4">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input type="password" name="password" id="password"
                class="form-control @error('email') is-invalid @enderror" required />
            @error('password')
            <div class="invalid-feedback">{{ __($message) }}</div>
            @enderror
        </div>

        {{-- Remember Me --}}
        <div class="mb-4 row py-2 flex-wrap">
            <div class="col-auto me-auto">
                <label class="form-check mb-0" for="remember_me">
                    <input type="checkbox" name="remember_me" id="remember_me" class="form-check-input" />
                    <span class="form-check-label">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="col-auto d-flex align-items-center">
                @if (Route::has('password.request'))
                <a href="{{ route('dashboard.password.request') }}">{{ __('Forgot password?') }}</a>
                @endif
            </div>
        </div>
        <div><button type="submit" class="btn btn-primary btn-lg w-100">{{ __('Sign In') }}</button></div>
    </form>
</div>
<div class="sa-divider sa-divider--has-text">
    <div class="sa-divider__text">{{ __('Or continue with') }}</div>
</div>
<div class="card-body p-sm-5 m-sm-3 flex-grow-0">
    <div class="d-flex flex-wrap me-n3 mt-n3">
        <button type="button" class="btn btn-secondary flex-grow-1 me-3 mt-3">{{ __('Google') }}</button>
        <button type="button" class="btn btn-secondary flex-grow-1 me-3 mt-3">{{ __('Facebook') }}</button>
        <button type="button" class="btn btn-secondary flex-grow-1 me-3 mt-3">{{ __('Twitter') }}</button>
    </div>
    <div class="form-group mb-0 mt-4 pt-2 text-center text-muted">
        {{ __('Don\'t have an account?') }}
        @if (Route::has('dashboard.register'))
        <a href="{{ route('dashboard.register') }}">{{ __('Sign up') }}</a>
        @endif
    </div>
</div>
@endsection