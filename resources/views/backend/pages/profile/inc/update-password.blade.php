<div class="card mt-5">
    <div class="card-header px-5 py-4 d-flex align-items-center justify-content-between">
        <h2 class="mb-0 fs-exact-18 me-4">{{ __('Update Password') }}</h2>
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('admin.password.update') }}" class="needs-validation" novalidate="">
            @csrf
            @method('put')


            <div class="row g-4 mb-4">
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

            <div class="text-end">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            </div>
        </form>
    </div>
</div>
