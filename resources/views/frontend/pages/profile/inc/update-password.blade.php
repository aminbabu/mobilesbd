<div class="card rounded-0 border mt-2 user-profile-card">
    <div class="card-body">
        <h2 class="h3 fw-semibold">{{ __('Update password') }}</h2>
        <p>{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>

        <form method="POST" action="{{ route('password.update') }}" class="needs-validation" novalidate="">
            @csrf
            @method('put')

            <div class="row g-2">
                <div class="col-12">
                    {{-- Current password --}}
                    <div>
                        <label for="current_password" class="form-label">{{ __('Current Password') }}</label>
                        <input type="password" name="current_password" id="current_password"
                            class="form-control @error('current_password') is-invalid @enderror" required />
                        @error('current_password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    {{-- New password --}}
                    <div>
                        <label for="password" class="form-label">{{ __('New Password') }}</label>
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror" required />
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    {{-- New password --}}
                    <div>
                        <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror" required />
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="text-end mt-3">
                <button type="submit" class="btn btn-sm btn-primary ms-2">{{ __('Save') }}</button>
            </div>
        </form>
    </div>
</div>
