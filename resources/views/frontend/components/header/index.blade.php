<!-- header section start -->
<header id="header" class="mb-2">
    <!-- top navigation bar start -->
    <div class="navbar top-navbar d-none d-lg-block p-1">
        <div class="container">
            <p class="tagline m-0">{{ __('Largest Gadget Site in Bangladesh') }}</p>
            @if (Auth::guard('web')->check() or Auth::guard('admin')->check())
                <ul class="user-icon m-0 d-none d-lg-flex align-items-center">
                    <li>
                        @include('frontend.components.header.inc.notificaitons')
                    </li>
                </ul>
            @endif
        </div>
    </div>
    <!-- top navigation bar end -->

    <!-- topnav start -->
    <nav class="topnav py-2 py-md-3">
        <div class="container">
            <button type="button" class="sm-nav-icon me-4 d-block d-lg-none text-white bg-transparent border-0">
                <i class="fas fa-bars fa-lg"></i>
            </button>

            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('frontend/images/logo.png') }}" alt="{{ __('BD Mobile') }}"
                    class="logo-img img-fluid" />
            </a>

            <div class="search-box">
                <button type="button" class="close-btn">
                    <i class="fal fa-times-circle"></i>
                </button>
                <form>
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="{{ __('What are you looking for?') }}">
                        <select name="query" class="nice-select small">
                            <option value="0" selected>{{ __('All') }}</option>
                            <option value="1">{{ __('Mobile') }}</option>
                            <option value="2">{{ __('Tablet') }}</option>
                            <option value="3">{{ __('Computer') }}</option>
                        </select>
                        <button class="input-group-text" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="topnav-icons me-lg-0 d-flex align-items-center justify-content-between gap-3">
                @include('frontend.components.header.inc.auth-links')
                <button type="button" class="sm-search-icon bg-transparent cborder-white text-white d-block d-lg-none">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- topnav end -->

    <!-- main navigation menu start -->
    <section class="main-navbar shadow-sm border-bottom border-2 position-absolute top-0 w-100 h-100 bg-white">
        <div class="container">
            <ul class="nav d-block d-lg-flex fw-bold">
                <li class="nav-item border-bottom border-2 py-1 d-lg-none">
                    <div class="user-icon d-flex align-items-center justify-content-center">
                        @include('frontend.components.header.inc.auth-links', [
                            'dropdownPosition' => 'dropdown-center',
                        ])
                        @if (Auth::guard('web')->check() or Auth::guard('admin')->check())
                            @include('frontend.components.header.inc.notificaitons', [
                                'dropdownPosition' => 'dropdown-center',
                            ])
                        @endif
                    </div>
                </li>
                <li class="nav-item border-bottom border-2 py-1">
                    <a class="nav-link text-dark" aria-current="page" href="./index.html">{{ __('Home') }}</a>
                </li>
                <li class="nav-item border-bottom border-2 py-1">
                    <a class="nav-link text-dark" href="./top10.html">{{ __('Top 10') }}</a>
                </li>
                <li class="nav-item border-bottom border-2 py-1">
                    <a href="brands.html" class="nav-link text-dark">{{ __('Brands') }}</a>
                </li>
                <li class="nav-item drop-menu border-bottom border-2 py-1 position-relative">
                    <a class="nav-link text-dark" href="#">{{ __('Mobile Collections') }}<i
                            class="fas fa-angle-right"></i></a>
                    <ul class="dropdown-menu collection d-block p-0 top-100 rounded-0 border-0">
                        <li class="nav-item">
                            <a href="comparision.html"
                                class="dropdown-item nav-link border-bottom">{{ __('Comparision') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html"
                                class="dropdown-item nav-link border-bottom">{{ __('Contact Us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="videos.html" class="dropdown-item nav-link border-bottom">{{ __('Videos') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item border-bottom border-2 py-1">
                    <a class="nav-link text-dark" href="./mobiles.html">{{ __('Mobiles') }}</a>
                </li>
                <li class="nav-item border-bottom border-2 py-1">
                    <a class="nav-link text-dark" href="./price-list.html">{{ __('Price List') }}</a>
                </li>
                <li class="nav-item border-bottom border-2 py-1">
                    <a class="nav-link text-dark" href="compare.html">{{ __('Compare') }}</a>
                </li>
                <li class="nav-item border-bottom border-2 py-1">
                    <a class="nav-link text-dark" href="showrooms.html">{{ __('Showrooms') }}</a>
                </li>
                <li class="nav-item border-bottom border-2 py-1">
                    <a class="nav-link text-dark" href="service-centers.html">{{ __('Service Centers') }}</a>
                </li>
                <li class="nav-item border-bottom border-2 py-1">
                    <a class="nav-link text-dark" href="reviews.html">{{ __('Reviews') }}</a>
                </li>
                <li class="nav-item border-bottom border-2 py-1">
                    <a class="nav-link text-dark" href="news.html">{{ __('News & Tips') }}</a>
                </li>
            </ul>
        </div>
        <button type="button"
            class="sm-nav-close-icon d-block d-lg-none border-0 position-absolute top-0 end-0 px-2 bg-danger text-white">
            <i class="fas fa-times"></i>
        </button>
    </section>
    <!-- main navigation menu end -->

    {{-- Sidebar Cart --}}
    @include('frontend.components.sidebar-cart.index')
    {{-- Sidebar Cart --}}
</header>
<!-- header section end -->
