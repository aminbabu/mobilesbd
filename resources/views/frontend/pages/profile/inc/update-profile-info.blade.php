<div class="card rounded-0 border user-profile-card">
    <div class="card-body">
        <h2 class="h3 fw-semibold">{{ __('Profile information') }}</h2>
        <p>{{ __('Update your account\'s profile information and email address.') }}</p>

        <form id="sendVerification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="POST" action="{{ route('profile.update') }}" class="needs-validation" novalidate="">
            @csrf
            @method('patch')

            <div class="row g-2">
                <div class="col-sm-6">
                    {{-- Full Name --}}
                    <div>
                        <label for="name" class="form-label">{{ __('Full Name') }}</label>
                        <input type="text" name="name" id="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name', __($user->name)) }}" required />
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    {{-- Email Address --}}
                    <div>
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input type="email" name="email" id="email"
                            class="form-control @error('name') is-invalid @enderror @if ($user->hasVerifiedEmail()) is-verified @endif"
                            value="{{ old('name', __($user->email)) }}"
                            @unless($user->email_verified_at) disabled @endunless required />
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="text-end mt-3">
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                    <button type="button" class="btn btn-sm btn-outline-secondary"
                        onclick="event.preventDefault();
                    document.getElementById('sendVerification').submit();">
                        {{ __('Send Verification Email') }}
                    </button>
                @endif
                <button type="submit" class="btn btn-sm btn-primary ms-2">{{ __('Save') }}</button>
            </div>
        </form>
    </div>
</div>
