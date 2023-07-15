@extends('backend.layouts.auth.app')

@section('title', 'Sign Up')

@section('content')
<div class="card-body p-sm-5 m-sm-3 flex-grow-0">
    <h1 class="mb-0 fs-3">{{ __('Sign Up') }}</h1>
    <div class="fs-exact-14 text-muted mt-2 pt-1 mb-5 pb-2">{{ __('Fill out the form to create a new account.') }}</div>
    <form method="POST" action="{{ route('dashboard.register') }}" class="needs-validation" novalidate="">
        @csrf

        {{-- Full Name --}}
        <div class="mb-4">
            <label for="name" class="form-label">{{ __('Full name') }}</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" autofocus
                required />
            @error('name')
            <div class="invalid-feedback">{{ __($message) }}</div>
            @enderror
        </div>

        {{-- Email Address --}}
        <div class="mb-4">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                required />
            @error('email')
            <div class="invalid-feedback">{{ __($message) }}</div>
            @enderror
        </div>

        {{-- Password --}}
        <div class="mb-4">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input type="password" name="password" id="password"
                class="form-control @error('password') is-invalid @enderror" required />
            @error('password')
            <div class="invalid-feedback">{{ __($message) }}</div>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-primary btn-lg w-100">{{ __('Sign Up') }}</button>
        </div>
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
        {{ __('Already have an account?') }}
        @if (Route::has('login'))
        <a href="{{ route('dashboard.login') }}">{{ __('Sign in') }}</a>
        @endif
    </div>
</div>
@endsection