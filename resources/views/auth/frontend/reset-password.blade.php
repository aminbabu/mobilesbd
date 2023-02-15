@extends('frontend.layouts.auth.app')

@section('title', 'Reset password')

@section('content')
    <div class="card-body m-sm-3 flex-grow-0">
        <h1 class="mb-0 fs-3">{{ __('Reset password?') }}</h1>
        <div class="fs-exact-14 text-muted mt-2 pt-1 mb-4 pb-2">
            {{ __('Please enter your new password.') }}
        </div>

        <form method="POST" action="{{ route('password.store') }}" class="needs-validation" novalidate="">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            {{-- Email Address --}}
            <div class="mb-4">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input type="email" name="email" id="email"
                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $request->email) }}"
                    autofocus required />
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

            {{-- Confirm password --}}
            <div class="mb-4">
                <label for="password_confirmation" class="form-label">{{ __('Confirm password') }}</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="form-control @error('password_confirmation') is-invalid @enderror" autofocus required />
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ __($message) }}</div>
                @enderror
            </div>


            <div>
                <button type="submit" class="btn btn-primary btn-lg w-100">{{ __('Reset') }}</button>
            </div>
        </form>
    </div>
@endsection
