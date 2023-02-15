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
        {{-- Update Info. Alert --}}
        @if (session('status') === 'profile-updated')
            <div class="alert alert-success alert-sa-has-icon alert-dismissible-aminate my-2 fade show" role="alert">
                <div class="alert-sa-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-check-circle">
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
            <div class="alert alert-danger alert-sa-has-icon alert-dismissible-aminate my-2 fade show" role="alert">
                <div class="alert-sa-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-info">
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
            <div class="alert alert-success alert-sa-has-icon alert-dismissible-aminate my-2 fade show" role="alert">
                <div class="alert-sa-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-check-circle">
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

        <div class="row g-2 gy-lg-0">
            <div class="col-lg-4">
                <div class="card rounded-0 border">
                    <div class="card-body">
                        <div class="profile-avatar">
                            <label for="avatar" class="avatar">
                                <input type="file" name="avatar" id="avatar" hidden>
                                {!! Avatar::create($user->name)->toSvg() !!}
                                <div class="overlay">
                                    <i class="fal fa-camera"></i>
                                </div>
                            </label>
                            <h2 class="h6 fw-medium">{{ __($user->name) }}</h2>
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
                {{-- Update password --}}
                @include('frontend.pages.profile.inc.update-password')
                {{-- Delete account --}}
                @include('frontend.pages.profile.inc.delete-user-form')
            </div>
        </div>
    </section>
@endsection
