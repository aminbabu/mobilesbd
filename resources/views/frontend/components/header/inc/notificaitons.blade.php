<div class="{{ isset($dropdownPosition) ? $dropdownPosition : 'dropdown' }} notifications">
    <button class="btn btn-sm dropdown-toggle position-relative  border-0" type="button" id="muserNotifications"
        data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-bell"></i>
        <span class="position-absolute start-75 translate-middle badge rounded-pill bg-danger">
            {{ __('0') }}
            <span class="visually-hidden">{{ __('unread messages') }}</span>
        </span>
    </button>
    <div class="dropdown-menu {{ isset($menuPosition) ? $menuPosition : 'dropdown-menu-end' }} shadow notification"
        aria-labelledby="muserNotifications">
        <div class="head border-bottom d-flex align-items-center justify-content-between">
            <h2 class="notification-title m-0">{{ __('Notificaitons') }}</h2>
            <a href="#" class="read-text text-decoration-none">
                {{ __('Mark All as Read') }}
            </a>
        </div>
        <ul class="p-0 my-1">
            <li>
                <a href="#" class="dropdown-item d-flex py-2">
                    <button class="btn bg-warning bg-opacity-25">
                        <i class="fas fa-database"></i>
                    </button>
                    <div class="dropdown-text d-flex flex-column ms-2">
                        <strong>{{ __('Creating new database backup') }}</strong>
                        <span class="text-muted">{{ __('Completed: 37% (23.05MB)') }}</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="dropdown-item d-flex py-2">
                    <button class="btn bg-warning bg-opacity-25">
                        <i class="fas fa-database"></i>
                    </button>
                    <div class="dropdown-text d-flex flex-column ms-2">
                        <strong>{{ __('Creating new database backup') }}</strong>
                        <span class="text-muted">{{ __('Completed: 37% (23.05MB)') }}</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="dropdown-item d-flex py-2">
                    <button class="btn bg-warning bg-opacity-25">
                        <i class="fas fa-database"></i>
                    </button>
                    <div class="dropdown-text d-flex flex-column ms-2">
                        <strong>{{ __('Creating new database backup') }}</strong>
                        <span class="text-muted">{{ __('Completed: 37% (23.05MB)') }}</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="foot dropdown-item text-center border-top py-1">
            <a href="#" class="text-muted text-decoration-none">
                {{ __('See all 15 notificatios') }}
            </a>
        </div>
    </div>
</div>
