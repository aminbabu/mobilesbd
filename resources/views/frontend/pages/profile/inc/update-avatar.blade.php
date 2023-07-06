<div class="card rounded-0 border mt-2 user-profile-card">
    <div class="card-body">
        <h2 class="h3 fw-semibold">{{ __('Profile Image') }}</h2>
        <p>{{ __('Ensure the file must be an image (jpg, jpeg, png, bmp, gif, svg, or webp).') }}</p>

        <form method="POST" action="{{ route('profile.update_avatar', ['id' => $user->id]) }}" class="needs-validation"
            novalidate="" enctype="multipart/form-data">
            @csrf
            @method('put')

            {{-- Current photo --}}
            <div>
                <label for="avatar" class="form-label">{{ __('Avatar') }}</label>
                <input type="file" name="avatar" id="avatar"
                    class="form-control @error('avatar') is-invalid @enderror" required />
                @error('avatar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-end mt-3">
                <button type="submit" class="btn btn-sm btn-primary ms-2">{{ __('Save') }}</button>
            </div>
        </form>
    </div>
</div>
