<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('frontend/demo/demo.css') }}" rel="stylesheet" />

    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar" data-color="white" data-active-color="danger">
            @include('layouts.inc.sidebar')
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                @include('layouts.inc.adminnav')
            </nav>
            <div class="content">
                @yield('content')
            </div>
            <footer class="footer footer-black  footer-white">
                @include('layouts.inc.adminfooter')
            </footer>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/core/popper.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/core/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/plugins/perfect-scrollbar.jquery.min.js') }}" defer></script>
    <!-- Chart JS -->
    <script src="{{ asset('frontend/js/plugins/chartjs.min.js') }}" defer></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('frontend/js/plugins/bootstrap-notify.js') }}" defer></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    {{-- <script src="{{ asset('frontend/js/paper-dashboard.js') }}" type="text/javascript" defer></script> --}}

    {{-- Sweet Alert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('status'))
        <script type="text/javascript">
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "{{ session('status') }}",
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
    @yield('scripts')
</body>

</html>
