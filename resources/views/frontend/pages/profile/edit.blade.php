@extends('frontend.layouts.app')

@section('title', 'Profile')

@section('content')
    <nav aria-label="breadcrumb" class="mb-2">
        <ol class="breadcrumb mb-0 py-2 px-3 bg-white border" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <a href="{{ route('home') }}" class="text-decoration-none" itemprop="item">{{ __('Home') }}</a>
                <meta itemprop="position" content="1">
            </li>
            <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope=""
                itemtype="https://schema.org/ListItem">
                <span itemprop="item">{{ __('Profile') }}</span>
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </nav>
    <section class="user-profile">
        {{-- Profile Toasts --}}
        @include('partials.status-messages')
        {{-- Profile Toasts --}}

        <div class="row g-2 gy-lg-0">
            <div class="col-lg-4">
                <div class="card rounded-0 border">
                    <div class="card-body">
                        <div class="profile-avatar">
                            <img src="{{ $user->avatar ? asset('uploads/frontend/users') . '/' . $user->avatar : Avatar::create($user->email)->toGravatar() }}"
                                alt="{{ $user->name }}" id="avatarToShow" width="100" height="100" />
                        </div>

                        <h6 class="text-center">{{ $user->name }}</h6>
                        <div class="text-center mb-4">
                            <a href="mailto:{{ $user->email }}"
                                class="link-dark text-decoration-none">{{ $user->email }}</a>
                        </div>

                        <ul class="nav nav-tabs-column nav-pills nav-fill">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('profile.edit') }}">
                                    {{ __('Details') }}
                                </a>
                            </li>
                            @if (Route::has('logout'))
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a href="{{ route('logout') }}" class="nav-link"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();">{{ __('Logout') }}</a>
                                    </form>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                {{-- Profile info --}}
                @include('frontend.pages.profile.inc.update-profile-info')
                {{-- Profile image --}}
                @include('frontend.pages.profile.inc.update-avatar')
                {{-- Update password --}}
                @include('frontend.pages.profile.inc.update-password')
                {{-- Delete account --}}
                @include('frontend.pages.profile.inc.delete-user-form')
            </div>
        </div>
    </section>

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
