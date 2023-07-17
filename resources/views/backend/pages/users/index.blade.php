@extends('backend.layouts.app')

@section('title', 'Users')

@section('content')
<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Users</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Users</h1>
                    </div>
                    <div class="col-auto d-flex"><a href="{{ route('dashboard.user.create') }}"
                            class="btn btn-primary">{{ __('Add user') }}</a>
                    </div>
                </div>
                {{-- Profile Toasts --}}
                @include('partials.status-messages')
                {{-- Profile Toasts --}}
            </div>
            <div class="card">
                <div class="p-4">
                    <input type="text" placeholder="Start typing to search for users"
                        class="form-control form-control--search mx-auto" id="table-search" />
                </div>
                <div class="sa-divider"></div>

                {{-- Send Verification Mail --}}
                <form id="sendVerification" method="post" action="{{ route('dashboard.verification.send') }}">
                    @csrf
                </form>
                {{-- Send Verification Mail --}}

                <table class="sa-datatables-init" data-order='[[ 1, "asc" ]]' data-sa-search-input="#table-search">
                    <thead>
                        <tr>
                            <th class="w-min" data-orderable="false">
                                <input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." />
                            </th>
                            <th class="min-w-20x">{{ __('Name') }}</th>
                            <th>{{ __('Registered') }}</th>
                            <th>{{ __('Role') }}</th>
                            <th>{{ __('Verification Status') }}</th>
                            <th class="w-min" data-orderable="false"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('dashboard.profile.edit', ['role' => $user->role->name, 'id' => $user->id]) }}"
                                        class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                            <img src="{{ $user->avatar ? asset('uploads/backend/users') . '/' . $user->avatar : Avatar::create($user->email)->toGravatar() }}"
                                                alt="{{ $user->name }}" width="32" height="32" />
                                        </div>
                                    </a>
                                    <div>
                                        <a href="{{ route('dashboard.profile.edit', ['role' => $user->role->name, 'id' => $user->id]) }}"
                                            class="text-reset">{{ $user->name }}</a>
                                        <div class="text-muted mt-n1">{{ $user->email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap">{{ $user->created_at->format('j F, Y') }}</td>
                            <td>{{ Str::ucfirst(getUserRole($user->role_id)->name) }}</td>
                            <td>
                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail &&
                                !$user->hasVerifiedEmail())
                                <button type="button" class="btn btn-sm btn-secondary"
                                    onclick="event.preventDefault();document.getElementById('sendVerification').submit();">
                                    {{ __(' Verify Email') }}
                                </button>
                                @else
                                <div class="sa-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" stroke="#00aa00" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check-circle">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                </div>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-0"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="customer-context-menu-0">
                                        <li><a class="dropdown-item"
                                                href="{{ route('dashboard.profile.edit', ['role' => $user->role->name, 'id' => $user->id]) }}">{{
                                                __('Edit')
                                                }}</a>
                                        </li>
                                        <li>
                                            <button type="button" class="dropdown-item text-danger modal-trigger"
                                                data-user-role="{{ $user->role->name }}" data-user-id="{{ $user->id }}"
                                                data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
                                                {{ __('Delete Account') }}
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Delete Account Modal --}}
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="deleteAccountModal" tabindex="-1"
    aria-labelledby="deleteAccountModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form method="post"
                    action="{{ route('dashboard.profile.destroy', ['role' => $user->role->name, 'id' => $user->id]) }}"
                    class="needs-validation" novalidate="">
                    @csrf
                    @method('delete')

                    <h2 class="h4 fw-semibold">
                        {{ __('Are you sure you want to delete your
                        account?') }}</h2>
                    <p>
                        {{ __('Once the account is deleted, all of its
                        resources and data will be permanently
                        deleted. Please enter your password to confirm you
                        would like to permanently delete your
                        account.') }}
                    </p>

                    {{-- Password --}}
                    <div class="mb-3">
                        <label for="delete_password" class="form-label">{{
                            __('Confirm Password') }}</label>
                        <input type="password" name="delete_password" id="delete_password"
                            class="form-control  @error('email') is-invalid @enderror" required />
                    </div>

                    <div class="text-end mt-5">
                        <button type="button" class="btn btn-secondary ms-2" data-bs-dismiss="modal">{{
                            __('Cancel') }}</button>
                        <button type="submit" class="btn btn-outline-danger ms-2">
                            {{ __('Delete Account') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const triggers = Array.from(document.getElementsByClassName('modal-trigger'));
    const ModalEl = document.getElementById('deleteAccountModal');

    triggers.forEach((trigger) => {
        trigger.addEventListener('click', function () {
            userRole = this.dataset.userRole || this.getAttribute('data-user-role');
            userId = this.dataset.userId || this.getAttribute('data-user-id');

            ModalEl.querySelector('form').setAttribute('action', `http://mobilesbd.test/dashboard/${userRole}/${userId}`);
        });
    });
</script>
@endsection