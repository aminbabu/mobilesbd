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
                    {{-- Profile Toasts --}}
                    @include('backend.pages.profile.inc.profile-toasts')
                    {{-- Profile Toasts --}}

                    <div class="sa-entity-layout__body">

                        <div class="sa-entity-layout__sidebar">
                            <div class="card">
                                <div class="card-body">
                                    <div class="pt-3 mb-4 d-flex flex-column align-items-center">
                                        <div class="sa-symbol sa-symbol--shape--circle sa-symbol--profile-photo">
                                            <img src="{{ $user->avatar ? asset('uploads/backend') . '/' . $user->avatar : Avatar::create($user->email)->toGravatar() }}"
                                                alt="{{ $user->name }}" id="avatarToShow" width="100" height="100" />
                                        </div>
                                    </div>
                                    <div class="text-center mb-4">
                                        <div class="fs-exact-16 fw-medium">{{ __($user->name) }}</div>
                                        <div class="fs-exact-13 text-muted">
                                            <div class="mt-1"><a
                                                    href="mailto:{{ $user->email }}">{{ __($user->email) }}</a></div>
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

                            {{-- Profile Image. --}}
                            @include('backend.pages.profile.inc.update-avatar')
                            {{-- Profile Image. --}}

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

    {{-- File Upload Script Start --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const avatarInput = document.getElementById('avatar');
            const avatarImg = document.getElementById('avatarToShow');

            avatarInput.addEventListener('change', (inputEvent) => {
                const fileReader = new FileReader();

                fileReader.addEventListener('load', (fileReaderEvent) => {
                    avatarImg.setAttribute('src', fileReaderEvent.target.result);
                })

                fileReader.readAsDataURL(inputEvent.target.files['0']);
            })
        })
    </script>
    {{-- File Upload Script Start --}}
@endsection
