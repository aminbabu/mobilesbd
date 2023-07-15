<!-- sa-app__sidebar -->
<div class="sa-app__sidebar">
    <div class="sa-sidebar">
        <div class="sa-sidebar__header">
            <a class="sa-sidebar__logo" href="{{ route('dashboard.index') }}">
                <!-- logo -->
                <div class="sa-sidebar-logo">
                    <div class="navbar-brand text-dark fw-bold">{{ config('app.name') }}</div>
                    <div class="sa-sidebar-logo__caption">{{ getUserRole(Auth::user()->role_id)->name }}</div>
                </div>
                <!-- logo / end -->
            </a>
        </div>
        <div class="sa-sidebar__body" data-simplebar="">
            <ul class="sa-nav sa-nav--sidebar" data-sa-collapse="">
                <li class="sa-nav__section">
                    <div class="sa-nav__section-title"><span>{{ __('Application') }}</span></div>
                    <ul class="sa-nav__menu sa-nav__menu--root">
                        <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                            <a href="{{ route('dashboard.index') }}" class="sa-nav__link">
                                <span class="sa-nav__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"
                                        fill="currentColor">
                                        <path
                                            d="M8,13.1c-4.4,0-8,3.4-8-3C0,5.6,3.6,2,8,2s8,3.6,8,8.1C16,16.5,12.4,13.1,8,13.1zM8,4c-3.3,0-6,2.7-6,6c0,4,2.4,0.9,5,0.2C7,9.9,7.1,9.5,7.4,9.2l3-2.3c0.4-0.3,1-0.2,1.3,0.3c0.3,0.5,0.2,1.1-0.2,1.4l-2.2,1.7c2.5,0.9,4.8,3.6,4.8-0.2C14,6.7,11.3,4,8,4z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="sa-nav__title">{{ __('Dashboard') }}</span>
                            </a>
                        </li>
                        @if (Auth::user()->role->name === 'admin')
                        <li class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                            data-sa-collapse-item="sa-nav__menu-item--open">
                            <a href="" class="sa-nav__link" data-sa-collapse-trigger="">
                                <span class="sa-nav__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"
                                        fill="currentColor">
                                        <path
                                            d="M8,10c-3.3,0-6,2.7-6,6H0c0-3.2,1.9-6,4.7-7.3C3.7,7.8,3,6.5,3,5c0-2.8,2.2-5,5-5s5,2.2,5,5c0,1.5-0.7,2.8-1.7,3.7c2.8,1.3,4.7,4,4.7,7.3h-2C14,12.7,11.3,10,8,10z M8,2C6.3,2,5,3.3,5,5s1.3,3,3,3s3-1.3,3-3S9.7,2,8,2z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="sa-nav__title">{{ __('Users') }}</span>
                                <span class="sa-nav__arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9"
                                        fill="currentColor">
                                        <path
                                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                            <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                <li class="sa-nav__menu-item">
                                    <a href="{{ route('dashboard.user.create') }}" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{ __('Add User') }}</span>
                                    </a>
                                </li>
                                <li class="sa-nav__menu-item">
                                    <a href="{{ route('dashboard.user.index') }}" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{ __('User List') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                            data-sa-collapse-item="sa-nav__menu-item--open">
                            <a href="" class="sa-nav__link" data-sa-collapse-trigger="">
                                <span class="sa-nav__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-table">
                                        <path
                                            d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18">
                                        </path>
                                    </svg>
                                </span>
                                <span class="sa-nav__title">{{ __('Brands') }}</span>
                                <span class="sa-nav__arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9"
                                        fill="currentColor">
                                        <path
                                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                            <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                <li class="sa-nav__menu-item">
                                    <a href="{{ route('dashboard.brand.create') }}" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{ __('Add Brand') }}</span>
                                    </a>
                                </li>
                                <li class="sa-nav__menu-item">
                                    <a href="{{ route('dashboard.brand.index') }}" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{ __('Brand List') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                            data-sa-collapse-item="sa-nav__menu-item--open">
                            <a href="" class="sa-nav__link" data-sa-collapse-trigger="">
                                <span class="sa-nav__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-grid">
                                        <rect x="3" y="3" width="7" height="7">
                                        </rect>
                                        <rect x="14" y="3" width="7" height="7">
                                        </rect>
                                        <rect x="14" y="14" width="7" height="7">
                                        </rect>
                                        <rect x="3" y="14" width="7" height="7">
                                        </rect>
                                    </svg>
                                </span>
                                <span class="sa-nav__title">{{ __('Showrooms') }}</span>
                                <span class="sa-nav__arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9"
                                        fill="currentColor">
                                        <path
                                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                            <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                <li class="sa-nav__menu-item">
                                    <a href="{{ route('dashboard.showroom.create') }}" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{ __('Add Showroom') }}</span>
                                    </a>
                                </li>
                                <li class="sa-nav__menu-item">
                                    <a href="{{ route('dashboard.showroom.index') }}" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">{{ __('Showroom List') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </li>
                <li class="sa-nav__section">
                    <div class="sa-nav__section-title"><span>Pages</span></div>
                    <ul class="sa-nav__menu sa-nav__menu--root">
                        <li class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                            data-sa-collapse-item="sa-nav__menu-item--open">
                            <a href="" class="sa-nav__link" data-sa-collapse-trigger="">
                                <span class="sa-nav__icon"><i class="fas fa-lock"></i></span>
                                <span class="sa-nav__title">Authentication</span>
                                <span class="sa-nav__arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9"
                                        fill="currentColor">
                                        <path
                                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                            <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                <li class="sa-nav__menu-item">
                                    <a href="auth-sign-in.html" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">Sign In</span>
                                    </a>
                                </li>
                                <li class="sa-nav__menu-item">
                                    <a href="auth-sign-up.html" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">Sign Up</span>
                                    </a>
                                </li>
                                <li class="sa-nav__menu-item">
                                    <a href="auth-forgot-password.html" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">Forgot Password</span>
                                    </a>
                                </li>
                                <li class="sa-nav__menu-item">
                                    <a href="auth-reset-password.html" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">Reset Password</span>
                                    </a>
                                </li>
                                <li class="sa-nav__menu-item">
                                    <a href="auth-email-confirmation.html" class="sa-nav__link">
                                        <span class="sa-nav__menu-item-padding"></span>
                                        <span class="sa-nav__title">Verify Account</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="sa-app__sidebar-shadow"></div>
    <div class="sa-app__sidebar-backdrop" data-sa-close-sidebar=""></div>
</div>
<!-- sa-app__sidebar / end -->