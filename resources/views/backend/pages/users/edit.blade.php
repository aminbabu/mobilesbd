@extends('backend.layouts.app')

@section('title', 'Create user')

@section('content')
    <div id="top" class="sa-app__body px-2 px-lg-4">
        <div class="container pb-6">
            <div class="py-5">
                <nav class="mb-2" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add User</li>
                    </ol>
                </nav>
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <h1 class="h3 m-0">New User</h1>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form method="POST" class="needs-validation" novalidate="">
                        <div class="row g-5">
                            <div class="col-lg-6">
                                {{-- Full Name --}}
                                <label for="name" class="form-label">{{ __('Full name') }}</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror" autofocus required />
                                @error('name')
                                    <div class="invalid-feedback">{{ __($message) }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                {{-- Email Address --}}
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror" required />
                                @error('email')
                                    <div class="invalid-feedback">{{ __($message) }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                {{-- User Role --}}
                                <label for="role" class="form-label">{{ __('User Role') }}</label>
                                <select name="role" id="role"
                                    class="form-select @error('email') is-invalid @enderror" required>
                                    <option value="contributor" selected>Contributor</option>
                                    <option value="author">Author</option>
                                    <option value="editor">Editor</option>
                                    <option value="manager">Manager</option>
                                    <option value="admin">Administrator</option>
                                </select>
                                @error('email')
                                    <div class="invalid-feedback">{{ __($message) }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Create New</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
