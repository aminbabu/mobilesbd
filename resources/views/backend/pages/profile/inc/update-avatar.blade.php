<div class="card mt-5">
    <div class="card-header px-5 py-4 d-flex align-items-center justify-content-between">
        <h2 class="mb-0 fs-exact-18 me-4">{{ __('Profile Image') }}</h2>
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('dashboard.profile.update_avatar', ['id' => $user->id]) }}"
            class="needs-validation" novalidate="" enctype="multipart/form-data">
            @csrf
            @method('put')

            {{-- Avatar --}}
            <div class="mb-4">
                <label for="avatar" class="form-label">{{ __('Avatar') }}</label>
                <input type="file" name="avatar" id="avatar"
                    class="form-control @error('avatar') is-invalid @enderror" required />
                @error('avatar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            </div>
        </form>
    </div>
</div>
