<div class="{{ isset($dropdownPosition) ? $dropdownPosition : 'dropdown' }} auth-links">
    <button class="btn btn-sm dropdown-toggle border-0" type="button" id="muserlogin" data-bs-toggle="dropdown"
        aria-expanded="false">
        <i class="fas fa-user"></i>
    </button>
    <ul class="dropdown-menu {{ isset($menuPosition) ? $menuPosition : 'dropdown-menu-end' }} shadow"
        aria-labelledby="muserlogin">
        @if (Route::has('login'))
            @if (!Auth::check() and !Auth::guard('admin')->check())

                <li>
                    <a href="{{ route('login') }}" class="dropdown-item">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}" class="dropdown-item">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                @auth('web')
                    <li>
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">
                            {{ __('Profile') }}
                        </a>
                    </li>
                @endauth

                @auth('admin')
                    <li>
                        <a href="{{ route('dashboard.index') }}" class="dropdown-item">
                            {{ __('Dashboard') }}
                        </a>
                    </li>
                @endauth

                @if (Route::has('logout'))
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}" class="dropdown-item"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">{{ __('Logout') }}</a>
                        </form>
                    </li>
                @endif
            @endif
        @endif
    </ul>
</div>
