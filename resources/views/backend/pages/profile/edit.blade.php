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
                {{-- Profile Toasts --}}
                @include('partials.status-messages')
                {{-- Profile Toasts --}}
            </div>
            <div class="sa-entity-layout" data-sa-container-query='{"920":"sa-entity-layout--size--md"}'>

                <div class="sa-entity-layout__body">

                    <div class="sa-entity-layout__sidebar">
                        <div class="card">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="pt-3">
                                    <div class="sa-symbol sa-symbol--shape--circle" style="--sa-symbol--size: 6rem">
                                        <img src="{{ $user->avatar ? asset('uploads/backend/users') . '/' . $user->avatar : Avatar::create($user->email)->toGravatar() }}"
                                            alt="{{ $user->name }}" id="avatarToShow" width="100" height="100"
                                            class="object-fit-cover" />
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <div class="fs-exact-16 fw-medium">{{ $user->name }}</div>
                                    <div class="fs-exact-13 text-muted">
                                        <div class="mt-1"><a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                        </div>
                                        {{-- <div class="mt-1">+38 (094) 730-24-25</div> --}}
                                    </div>
                                </div>
                                <div class="sa-divider my-5"></div>
                                <div class="w-100 text-capitalize">
                                    @if($user->phone)
                                    <dl class="list-unstyled m-0">
                                        <dt class="fs-exact-14 fw-medium">Phone Number</dt>
                                        <dd class="fs-exact-13 text-muted mb-0 mt-1">
                                            {{ phone($user->phone, [$user->phone_country]) }}
                                        </dd>
                                    </dl>
                                    @endif
                                    @if($user->country)
                                    <dl class="list-unstyled m-0 mt-4">
                                        <dt class="fs-exact-14 fw-medium">Address</dt>
                                        <dd class="fs-exact-13 text-muted mb-0 mt-1">
                                            {{ $user->address_line_1 ? "$user->address_line_1," : ''}}
                                            {{ $user->address_line_2 ? "$user->address_line_2," : ''}}
                                            {{ $user->city ? "$user->city," : ''}}
                                            {{ $user->postcode ? "$user->postcode," : ''}}
                                            {{ $user->country }}
                                        </dd>
                                    </dl>
                                    @endif
                                    <dl class="list-unstyled m-0 mt-4">
                                        <dt class="fs-exact-14 fw-medium">Registered</dt>
                                        <dd class="fs-exact-13 text-muted mb-0 mt-1">
                                            {{ $user->created_at->diffForHumans() }}</dd>
                                    </dl>
                                    <dl class="list-unstyled m-0 mt-4">
                                        <dt class="fs-exact-14 fw-medium">Status</dt>
                                        <dd class="fs-exact-13 text-muted mb-0 mt-1">
                                            @if($user->status === 'acitve')
                                            <span class="sa-icon me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    viewBox="0 0 24 24" fill="none" stroke="#00aa00" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check-circle">
                                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                </svg>
                                            </span>
                                            {{ $user->status }}
                                            @else
                                            <span class="sa-icon me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    viewBox="0 0 24 24" fill="none" stroke="#aa0000" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-x-circle">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                                </svg>
                                            </span>
                                            {{ $user->status }}
                                            @endif
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sa-entity-layout__main">
                        {{-- Profile Info. --}}
                        @include('backend.pages.profile.inc.update-profile-info', ['user' => $user])
                        {{-- Profile Info. --}}

                        {{-- Profile Details. --}}
                        @include('backend.pages.profile.inc.update-details', ['user' => $user])
                        {{-- Profile Details. --}}

                        {{-- Update Profile. --}}
                        @include('backend.pages.profile.inc.update-password', ['user' => $user])
                        {{-- Update Profile. --}}

                        {{-- Delete Account. --}}
                        @include('backend.pages.profile.inc.delete-user-form', ['user' => $user])
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