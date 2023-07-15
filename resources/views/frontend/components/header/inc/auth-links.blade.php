<div class="{{ isset($dropdownPosition) ? $dropdownPosition : 'dropdown' }} auth-links">
    <button class="btn btn-sm dropdown-toggle border-0" type="button" id="muserlogin" data-bs-toggle="dropdown"
        aria-expanded="false">
        @unless (Auth::user())
        <i class="fas fa-user me-2"></i>
        @else
        <img src="{{ Auth::user()->avatar ? asset('uploads/frontend/users') . '/' . Auth::user()->avatar : Avatar::create(Auth::user()->email)->toGravatar() }}"
            alt="{{ Auth::user()->name }}" id="avatarToShow" class="object-fit-cover rounded-pill" width="24"
            height="24" />
        @endunless
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
            <a href="{{ route('profile.edit', ['role' => Auth::user()->role->name, 'id' => Auth::user()->id]) }}"
                class="dropdown-item">
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

                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                            this.closest('form').submit();">{{ __('Logout') }}</a>
            </form>
        </li>
        @endif
        @endif
        @endif
    </ul>
</div>