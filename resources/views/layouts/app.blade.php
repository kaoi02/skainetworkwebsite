<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.spinner')
    @include('partials.topbar')
    @include('partials.navbar')

    @yield('page-header')
    @yield('content')

    @include('partials.footer')
    @include('partials.back-to-top')
    @include('partials.scripts')
</body>

</html>
