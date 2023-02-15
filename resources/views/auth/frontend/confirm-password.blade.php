@extends('backend.layouts.auth.app')

@section('title', 'Password Confirmation')

@section('content')
    <div class="card-body p-sm-5 m-sm-3 flex-grow-0">
        <h1 class="mb-0 fs-3">{{ __('Forgot password?') }}</h1>
        <div class="fs-exact-14 text-muted mt-2 pt-1 mb-5 pb-2">
            {{ __('Enter the email address associated with your account and we will send a link to reset your password.') }}
        </div>
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="mb-4">
                <label class="form-label">{{ __('Password') }}</label>
                <input type="password" class="form-control" autocomplete="current-password" />
            </div>
            <div><button type="submit" class="btn btn-primary btn-lg w-100">{{ __('Confirm') }}</button></div>
        </form>
    </div>
@endsection
