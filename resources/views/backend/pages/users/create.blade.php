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
                                <li class="breadcrumb-item active" aria-current="page">Add user</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">{{ __('New user') }}</h1>
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
                <div class="col-md-8 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('dashboard.user.store') }}" class="needs-validation"
                                novalidate="">
                                @csrf

                                <div class="mb-5">
                                    {{-- Full Name --}}
                                    <label for="name" class="form-label">{{ __('Full name') }}</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control @error('name') is-invalid @enderror" autofocus required
                                        value="{{ old('name') }}" />
                                    @error('name')
                                        <div class="invalid-feedback">{{ __($message) }}</div>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    {{-- Email Address --}}
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    <input type="email" name="email" id="email"
                                        class="form-control @error('email') is-invalid @enderror" required
                                        value="{{ old('email') }}" />
                                    @error('email')
                                        <div class="invalid-feedback">{{ __($message) }}</div>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    {{-- Password --}}
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input type="password" name="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" required />
                                    @error('password')
                                        <div class="invalid-feedback">{{ __($message) }}</div>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    {{-- User Role --}}
                                    <label for="role_id" class="form-label">{{ __('User Role') }}</label>
                                    <select name="role_id" id="role_id"
                                        class="form-select @error('role_id') is-invalid @enderror" required>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ __(Str::ucfirst($role->name)) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('role_id')
                                        <div class="invalid-feedback">{{ __($message) }}</div>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <div class="text-end">
                                        <a href="{{ url()->previous() }}" role="button"
                                            class="btn btn-secondary me-3">{{ __('Cancel') }}</a>
                                        <button type="submit" class="btn btn-primary">{{ __('Add User') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
