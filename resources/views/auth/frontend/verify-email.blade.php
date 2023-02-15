@extends('backend.layouts.auth.app')

@section('title', 'Email Verification')

@section('content')
    <div class="card-body p-sm-5 m-sm-3 flex-grow-0">
        <h1 class="mb-0 fs-3">{{ __('Confirm email address') }}</h1>
        @if (session('status') == 'verification-link-sent')
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
                    {{ __('A confirmation email was sent to the') }}
                    <strong>{{ __('stroyka@example.com') }}</strong>.
                </div>
            </div>
        @endif
        <p class="pt-2">{{ __('Before proceeding, we must verify the authenticity of your inbox.') }}</p>
        <p>{{ __('Check the mailbox! After receiving the email, click on the link provided to confirm the email address.') }}
        </p>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div class="pt-3">
                <button type="submit" class="btn btn-primary btn-lg w-100">{{ __('Resend Verification Email') }}</button>
            </div>
        </form>
        <p class="mb-0 sa-text--sm">
            {{ __('Back to') }}
            @if (Route::has('login'))
                <a href="{{ route('login') }}">{{ __('Sign in') }}</a>
            @endif
            {{ __('page.') }}
        </p>
    </div>
@endsection
