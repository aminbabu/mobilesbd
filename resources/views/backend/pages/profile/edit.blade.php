@extends('backend.layouts.app')

@section('title', 'Profile')

@section('content')
    <div id="top" class="sa-app__body">
        <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
            <div class="container container--max--xl">
                <div class="py-5">
                    <div class="row g-4 align-items-center">
                        <div class="col">
                            <nav class="mb-2" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-sa-simple">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
                                </ol>
                            </nav>
                            <h1 class="h3 m-0">{{ $user->name }}</h1>
                        </div>
                    </div>

                </div>
                <div class="sa-entity-layout" data-sa-container-query='{"920":"sa-entity-layout--size--md"}'>
                    {{-- Update Info. Alert --}}
                    @if (session('status') === 'profile-updated')
                        <div class="alert alert-success alert-sa-has-icon alert-dismissible-aminate mb-5 fade show"
                            role="alert">
                            <div class="alert-sa-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-check-circle">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </div>
                            <div class="alert-sa-content">
                                {{ __('The pasword has been updated!') }}
                            </div>
                            <button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Account Deletion Alert --}}
                    @if ($errors->accountDelition->has('delete_password'))
                        <div class="alert alert-danger alert-sa-has-icon alert-dismissible-aminate mb-5 fade show"
                            role="alert">
                            <div class="alert-sa-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-info">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg>
                            </div>
                            <div class="alert-sa-content">
                                {{ __($errors->accountDelition->first('delete_password')) }}
                            </div>
                            <button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Verification Email Send Alert --}}
                    @if (session('status') === 'verification-link-sent')
                        <div class="alert alert-success alert-sa-has-icon alert-dismissible-aminate mb-5 fade show"
                            role="alert">
                            <div class="alert-sa-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-check-circle">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </div>
                            <div class="alert-sa-content">

                                {{ __('A new verification link has been sent to your email address.') }}
                            </div>
                            <button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="sa-entity-layout__body">

                        <div class="sa-entity-layout__sidebar">
                            <div class="card">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="pt-3">
                                        <div class="sa-symbol sa-symbol--shape--circle sa-symbol--profile-photo">
                                            <label for="avatar" class="form-label">
                                                <input type="file" name="avatar" id="avatar" hidden>
                                                {!! Avatar::create($user->name)->toSvg() !!}
                                                <div class="overlay">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-camera">
                                                        <path
                                                            d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                                        </path>
                                                        <circle cx="12" cy="13" r="4"></circle>
                                                    </svg>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <div class="fs-exact-16 fw-medium">{{ __($user->name) }}</div>
                                        <div class="fs-exact-13 text-muted">
                                            <div class="mt-1"><a
                                                    href="mailto:{{ $user->name }}">{{ __($user->email) }}</a></div>
                                            {{-- <div class="mt-1">+38 (094) 730-24-25</div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sa-entity-layout__main">
                            {{-- Profile Info. --}}
                            @include('backend.pages.profile.inc.update-profile-info')
                            {{-- Profile Info. --}}

                            {{-- Update Profile. --}}
                            @include('backend.pages.profile.inc.update-password')
                            {{-- Update Profile. --}}

                            {{-- Delete Account. --}}
                            @include('backend.pages.profile.inc.delete-user-form')
                            {{-- Delete Account. --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
