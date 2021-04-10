<!DOCTYPE html>
@include('partials.__scripts')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>@stack('head')</head>
@include('partials.nav')
@include('partials.__success')
@include('partials.__validation_errors')
<body>
    <div>
        <div>
            @yield('middle-page')
        </div>
    </div>
</body>
</html>
