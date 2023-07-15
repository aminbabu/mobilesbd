<div class="card">
    <div class="card-header p-3 d-flex align-items-center justify-content-between">
        <h2 class="mb-0 h5 me-3">{{ __('Delete Account') }}</h2>
    </div>
    <div class="card-body">
        <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before
            deleting your account, please download any data or information that you wish to retain.') }}
        </p>

        <div class="text-end">
            <button type="button" class="btn btn-danger me-3" data-bs-toggle="modal"
                data-bs-target="#deleteAccountModal">{{ __('Delete Account') }}</button>
        </div>

        {{-- Delete Account Modal --}}
        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="deleteAccountModal" tabindex="-1"
            aria-labelledby="deleteAccountModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">

                        <form method="post"
                            action="{{ route('profile.destroy', ['role' => $user->role->name,'id' => $user->id]) }}"
                            class="needs-validation" novalidate="">
                            @csrf
                            @method('delete')

                            <h2 class="h4 fw-semibold">
                                {{ __('Are you sure you want to delete your account?') }}</h2>
                            <p>
                                {{ __('Once your account is deleted, all of its resources and data will be permanently
                                deleted. Please enter your password to confirm you would like to permanently delete your
                                account.') }}
                            </p>

                            {{-- Password --}}
                            <div class="mb-3">
                                <label for="delete_password" class="form-label">{{ __('Confirm Password') }}</label>
                                <input type="password" name="delete_password" id="delete_password"
                                    class="form-control  @error('email') is-invalid @enderror" required />
                            </div>

                            <div class="text-end mt-5">
                                <button type="button" class="btn btn-secondary ms-2" data-bs-dismiss="modal">{{
                                    __('Cancel') }}</button>
                                <button type="submit" class="btn btn-outline-danger ms-2">
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
