<div class="card">
    <div class="card-header px-5 py-4 d-flex align-items-center justify-content-between">
        <h2 class="mb-0 fs-exact-18 me-4">{{ __('Profile Information') }}</h2>
        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
        <button type="button" class="btn btn-sm btn-secondary"
            onclick="event.preventDefault();document.getElementById('sendVerification').submit();">
            {{ __(' Verify Email') }}
        </button>
        @else
        <div class="sa-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                stroke="#00aa00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-check-circle">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
        </div>
        @endif
    </div>
    <div class="card-body">
        {{-- Send Verification Mail --}}
        <form id="sendVerification" method="post" action="{{ route('dashboard.verification.send') }}">
            @csrf
        </form>
        {{-- Send Verification Mail --}}

        <form method="POST"
            action="{{ route('dashboard.profile.update', ['role' => $user->role->name,'id' => $user->id]) }}"
            class="needs-validation" novalidate="">
            @csrf
            @method('patch')

            {{-- Full Name --}}
            <div class="mb-4">
                <label for="name" class="form-label">{{ __('Full name') }}</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name', $user->name) }}" autofocus />
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Email Address --}}
            <div class="mb-4">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email', $user->email) }}" @unless ($user->email_verified_at) disabled @endunless />
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Phone Number --}}
            <div class="mb-4">
                <label for="phone" class="form-label">{{ __('Phone Number') }}</label>
                <div class="d-flex gap-3">
                    <div style="width: 4.25rem;">
                        <select name="phone_country" class="form-select @error('phone') is-invalid @enderror">
                            @foreach (getCountries() as $countryCode => $countryName)
                            <option value="{{ $countryCode }}" @selected(old('phone_country', $user->phone_country ?
                                $user->phone_country : 'BD') ===
                                $countryCode)>
                                {{ $countryCode }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex-grow-1">
                        <input type="text" name="phone" id="phone"
                            class="form-control @error('phone') is-invalid @enderror"
                            value="{{ old('phone', $user->phone) }}" />
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- User Role --}}
            @if (Auth::user()->role->name === 'admin')
            <div class="mb-4">
                <label for="role_id" class="form-label">{{ __('User Role') }}</label>
                <select name="role_id" class="form-select text-capitalize @error('role_id') is-invalid @enderror">
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}" @selected(old('role_id', $user->role_id) === $role->id)>
                        {{ $role->name }}
                    </option>
                    @endforeach
                </select>
                @error('role_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            @endif

            <div class="text-end">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            </div>
        </form>
    </div>
</div>