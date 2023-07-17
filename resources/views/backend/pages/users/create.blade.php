@extends('backend.layouts.app')

@section('title', __('Add New user'))

@section('content')
<div id="top" class="sa-app__body px-2 px-lg-4">
    <div class="container pb-6">
        <div class="py-5">
            <div class="row g-4 align-items-center">
                <div class="col">
                    <nav class="mb-2" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-sa-simple">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Add user') }}</li>
                        </ol>
                    </nav>
                    <h1 class="h3 m-0">{{ __('New profile') }}</h1>
                </div>
                <div class="col-auto d-flex">
                    <a href="{{ route('dashboard.user.index') }}" class="btn btn-primary">{{ __('User list') }}</a>
                </div>
            </div>
        </div>
        {{-- Profile Toasts --}}
        @include('partials.status-messages')
        {{-- Profile Toasts --}}
        <div class="row g-5">
            <div class="col-xl-10 col-xxl-8">
                <div class="card">
                    <div class="card-header px-5 py-4 d-flex align-items-center justify-content-between">
                        <h2 class="mb-0 fs-exact-18 me-4">{{ __('Profile Information') }}</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('dashboard.user.create') }}" class="needs-validation"
                            novalidate="">
                            @csrf

                            {{-- Full Name --}}
                            <div class="mb-4">
                                <label for="name" class="form-label">{{ __('Full name') }}</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    autofocus />
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Email Address --}}
                            <div class="mb-4">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" />
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Password --}}
                            <div class="mb-4">
                                <label for="password" class="form-label">{{ __('Password')
                                    }}</label>
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror" required />
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- User Role --}}
                            <div class="mb-4">
                                <label for="role_id" class="form-label">{{ __('User Role') }}</label>
                                <select name="role_id"
                                    class="form-select text-capitalize @error('role_id') is-invalid @enderror">
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" @selected(old('role_id'))>
                                        {{ $role->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-end">
                                <a href="{{ URL::previous() }}" type="button" class="btn btn-secondary">{{ __('Cancel')
                                    }}</a>
                                <button type="submit" class="btn btn-primary">{{ __('Create Profile') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection