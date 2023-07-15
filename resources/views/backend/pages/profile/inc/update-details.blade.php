<div class="card mt-5">
    <div class="card-header px-5 py-4 d-flex align-items-center justify-content-between">
        <h2 class="mb-0 fs-exact-18 me-4">{{ __('Profile Details') }}</h2>
    </div>
    <div class="card-body">

        <form method="POST"
            action="{{ route('dashboard.profile.details', ['role' => $user->role->name,'id' => $user->id]) }}"
            class="needs-validation" novalidate="" enctype="multipart/form-data">
            @csrf
            @method('put')

            {{-- Avatar --}}
            <div class="mb-4">
                <label for="avatar" class="form-label">{{ __('Avatar') }}</label>
                <input type="file" name="avatar" id="avatar"
                    class="form-control @error('avatar') is-invalid @enderror" />
                @error('avatar')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Username --}}
            <div class="mb-4">
                <label for="username" class="form-label">{{ __('Username') }}</label>
                <input type="text" name="username" id="username"
                    class="form-control @error('username') is-invalid @enderror"
                    value="{{ old('username', $user->username) }}" @disabled($user->username) />
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Country --}}
            <div class="mb-4">
                <label for="country" class="form-label">{{ __('Country') }}</label>
                <select name="country" class="form-select @error('country') is-invalid @enderror">
                    @foreach (getCountries() as $countryName)
                    <option value="{{ $countryName }}" @selected(old('country', $user->country) ===
                        $countryName)>
                        {{ $countryName }}
                    </option>
                    @endforeach
                </select>
                @error('country')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="row g-4 mb-4">
                {{-- Address Line 1 --}}
                <div class="col-sm-6">
                    <label for="address_line_1" class="form-label">{{ __('Address Line 1') }}</label>
                    <input type="text" name="address_line_1" id="address_line_1"
                        class="form-control @error('address_line_1') is-invalid @enderror"
                        value="{{ old('address_line_1', $user->address_line_1) }}" />
                    @error('address_line_1')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Address Line 2 --}}
                <div class="col-sm-6">
                    <label for="address_line_2" class="form-label">{{ __('Address Line 2') }}</label>
                    <input type="text" name="address_line_2" id="address_line_2"
                        class="form-control @error('address_line_2') is-invalid @enderror"
                        value="{{ old('address_line_2', $user->address_line_2) }}" />
                    @error('address_line_2')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- City --}}
                <div class="col-sm-6">
                    <label for="city" class="form-label">{{ __('City') }}</label>
                    <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror"
                        value="{{ old('city', $user->city) }}" />
                    @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Post Code / Zip --}}
                <div class="col-sm-6">
                    <label for="postcode" class="form-label">{{ __('Postcode/Zip Code') }}</label>
                    <input type="text" name="postcode" id="postcode"
                        class="form-control @error('postcode') is-invalid @enderror"
                        value="{{ old('postcode', $user->postcode) }}" />
                    @error('postcode')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- Account Status --}}
            <div class="mb-4">
                <label for="status" class="form-label">{{ __('Account Status') }}</label>
                <select name="status" class="form-select @error('status') is-invalid @enderror">
                    <option value="active" @selected(old('status', Str::lower($user->status)) ===
                        'active')>
                        Active
                    </option>
                    <option value="inactive" @selected(old('status', Str::lower($user->status)) ===
                        'inactive')>
                        Inactive
                    </option>
                </select>
                @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            </div>
        </form>
    </div>
</div>
