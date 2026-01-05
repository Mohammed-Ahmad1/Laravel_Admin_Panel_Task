<!DOCTYPE html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr" data-pc-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Admin Dashboard" />
    <meta name="keywords" content="Bootstrap admin template, Dashboard UI" />
    <meta name="author" content="CodedThemes" />

    <title>@yield('title', 'Dashboard') | Datta Able</title>

    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/fonts/phosphor/duotone/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link" />

    @yield('css')
</head>

<body>
    <!-- Pre-loader -->
    @include('layouts.loader')

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Header -->
    @include('layouts.header')

    <!-- Main Content -->
    <div class="pc-container">
        <div class="pc-content">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer')
</body>

</html>
