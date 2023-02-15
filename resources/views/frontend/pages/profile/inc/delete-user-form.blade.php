<div class="card rounded-0 border mt-2 user-profile-card">
    <div class="card-body">
        <h2 class="h3 fw-semibold">{{ __('Delete Account') }}</h2>
        <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
        <div class="text-end mt-3">
            <button type="submit" class="btn btn-sm btn-danger ms-2" data-bs-toggle="modal"
                data-bs-target="#deleteAccountModal">{{ __('Delete account') }}</button>
        </div>
        <!-- Delete Account Modal -->
        <div class="modal fade" data-bs-backdrop="static" id="deleteAccountModal" tabindex="-1"
            aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <form method="post" action="{{ route('profile.destroy') }}" class="needs-validation"
                            novalidate="">
                            @csrf
                            @method('delete')

                            <h2 class="h3 fw-semibold">
                                {{ __('Are you sure you want to delete your account?') }}</h2>
                            <p>
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                            </p>

                            {{-- Password --}}
                            <div class="mb-3">
                                <label for="delete_password" class="form-label">{{ __('Confirm Password') }}</label>
                                <input type="password" name="delete_password" id="delete_password"
                                    class="form-control @error('password') is-invalid @enderror" required />
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-end mt-3">
                                <button type="button" class="btn btn-sm btn-secondary ms-2"
                                    data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                                <button type="submit" class="btn btn-sm btn-outline-danger ms-2">
                                    {{ __('Delete Account') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
