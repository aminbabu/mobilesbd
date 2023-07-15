@extends('frontend.layouts.app')

@section('title', 'Account Deletion')

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
                            alt="{{ $user->name }}" id="avatarToShow" width="100" height="100"
                            class="object-fit-cover" />
                    </div>

                    <h6 class="text-center">{{ $user->name }}</h6>
                    <div class="text-center mb-4">
                        <a href="mailto:{{ $user->email }}" class="link-dark text-decoration-none">{{ $user->email
                            }}</a>
                    </div>

                    <ul class="nav nav-tabs-column nav-pills nav-fill mbd-nav-pills">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('profile.edit', ['role' => $user->role->name, 'id' => $user->id]) }}">
                                {{ __('Account Information') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('profile.edit_details', ['role' => $user->role->name, 'id' => $user->id]) }}">
                                {{ __('Personal Details') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('profile.edit_password', ['role' => $user->role->name, 'id' => $user->id]) }}">
                                {{ __('Change Password') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('profile.edit_destroy', ['role' => $user->role->name, 'id' => $user->id]) }}">
                                {{ __('Account Deletion') }}
                            </a>
                        </li>
                        @if (Route::has('logout'))
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="nav-link">{{ __('Logout') }}</button>
                            </form>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            {{-- Profile Details. --}}
            @include('frontend.pages.profile.inc.delete-user-form', ['user' => $user])
            {{-- Profile Details. --}}
        </div>
    </div>
</section>
@endsection