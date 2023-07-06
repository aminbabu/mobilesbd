{{-- Update Info. Alert --}}
@if (session('status') === 'profile-updated')
    <div class="alert alert-success alert-sa-has-icon alert-dismissible-aminate mb-5 fade show" role="alert">
        <div class="alert-sa-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-check-circle">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
        </div>
        <div class="alert-sa-content">
            {{ __('The profile details have been updated!') }}
        </div>
        <button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- Update Avatar Alert --}}
@if (session('status') === 'avatar-updated')
    <div class="alert alert-success alert-sa-has-icon alert-dismissible-aminate mb-5 fade show" role="alert">
        <div class="alert-sa-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-check-circle">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
        </div>
        <div class="alert-sa-content">
            {{ __('The profile image has been updated!') }}
        </div>
        <button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- Update Passwrod Alert --}}
@if (session('status') === 'password-updated')
    <div class="alert alert-success alert-sa-has-icon alert-dismissible-aminate mb-5 fade show" role="alert">
        <div class="alert-sa-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-check-circle">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
        </div>
        <div class="alert-sa-content">
            {{ __('The pasword has been updated!') }}
        </div>
        <button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- Account Deletion Alert --}}
@if ($errors->accountDelition->has('delete_password') ?? session('warning') === 'verification-needed')
    <div class="alert alert-danger alert-sa-has-icon alert-dismissible-aminate mb-5 fade show" role="alert">
        <div class="alert-sa-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-info">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="16" x2="12" y2="12"></line>
                <line x1="12" y1="8" x2="12.01" y2="8"></line>
            </svg>
        </div>
        <div class="alert-sa-content">
            {{ __($errors->accountDelition->first('delete_password')) ?? __('Please verify your email address!') }}
        </div>
        <button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- Verification Email Send Alert --}}
@if (session('status') === 'verification-link-sent')
    <div class="alert alert-success alert-sa-has-icon alert-dismissible-aminate mb-5 fade show" role="alert">
        <div class="alert-sa-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-check-circle">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
        </div>
        <div class="alert-sa-content">

            {{ __('A new verification link has been sent to your email address.') }}
        </div>
        <button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
