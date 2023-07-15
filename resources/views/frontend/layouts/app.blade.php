<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="{{ config('app.charset') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Home') | {{ config('app.name', 'Mobiles BD') }}</title>

    <!-- third party libraries -->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap-slider/css/bootstrap-slider.') }}min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/vendor/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendor/nice-select2/css/nice-select2.css') }}" />

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.res.css') }}" />
</head>

<body>

    {{-- Header Main --}}
    @include('frontend.components.header.index')
    {{-- Header Main --}}

    <!-- main body section start -->
    <main id="main-content">
        <div class="container general-wrapper">
            @yield('content')
        </div>
    </main>
    <!-- main body section end -->

    {{-- Footer Main --}}
    @include('frontend.components.footer.index')
    {{-- Footer Main --}}

    {{-- Extra Elements --}}
    @yield('extra-elements')
    {{-- Extra Elements --}}

    <!-- required scripts -->
    <script src="{{ asset('frontend/vendor/jQuery/jquery-3.6.3.min.js') }}"></script>

    <!-- third party scripts -->
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap-slider/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/nice-select2/js/nice-select2.js') }}"></script>
    <script src="{{ asset('backend/js/demo.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>