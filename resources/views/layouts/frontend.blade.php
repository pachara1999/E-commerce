<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>
 
    <!-- CSS Files -->
    <link href="{{ asset('frontend/css/bootstrap5.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        a{
            text-decoration: none !important;
            color: #000000;
        }

        *{
            font-family: 'Montserrat';
            letter-spacing: 0.05em;
        }
    </style>
</head>

<body class="">
        @include("layouts.inc.frontnav")
        <div class="content">
            @yield('content')
        </div>
    
    <script src="{{ asset('frontend/js/custom.js') }}" defer></script>
    <!--   Core JS Files   -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('frontend/js/bootstrap5.bundle.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    
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
