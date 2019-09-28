<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', env('APP_NAME') )</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css') }}">
    @yield('css')
</head>

<body id="page-top" class=' bg-dark'>
    <div id="wrapper">
        <div class="d-flex flex-column  bg-dark" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                   @include('errors.flash-message')
                   @yield('content')
                </div>
            </div>
            <footer class=" sticky-footer  bg-dark">
                <div class="container my-auto ">
                    <div class="text-center my-auto copyright"><span>Copyright © {{ env('APP_NAME') }} @php echo date('Y'); @endphp</span></div>
                </div>
            </footer>
        </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    @yield('js')
</body>

</html>