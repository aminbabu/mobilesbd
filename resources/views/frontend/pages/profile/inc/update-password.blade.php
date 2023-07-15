<div class="card">
    <div class="card-header p-3 d-flex align-items-center justify-content-between">
        <h2 class="mb-0 h5 me-3">{{ __('Update Password') }}</h2>
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('password.update', ['role' => $user->role->name,'id' => $user->id]) }}"
            class="needs-validation" novalidate="">
            @csrf
            @method('put')


            <div class="row g-3 mb-3">
                <div class="col-12">
                    {{-- Current password --}}
                    <label for="current_password" class="form-label">{{ __('Current Password') }}</label>
                    <input type="password" name="current_password" id="current_password"
                        class="form-control @error('current_password') is-invalid @enderror" required />
                    @error('current_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-6">
                    {{-- New password --}}
                    <label for="password" class="form-label">{{ __('New Password') }}</label>
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" required />
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-6">
                    {{-- New password --}}
                    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="form-control @error('password_confirmation') is-invalid @enderror" required />
                    @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            </div>
        </form>
    </div>
</div>
