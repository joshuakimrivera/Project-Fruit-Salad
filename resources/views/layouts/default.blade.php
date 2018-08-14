<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href=" {{ url('pup.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PUPStats</title>
    <!--Import Google Icon Font-->
    {{--<link href="{{ url('css/material-icons.css') }}" rel="stylesheet">--}}
    <link href="{{ url('css/material-icons.css') }}" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"> --}}
    {{--<link rel="stylesheet" href="{{ url('css/font-awesome-4.7.0/css/font-awesome.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ url('css/font-awesome-4.7.0/css/font-awesome.min.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ url('css/materialize.min.css') }}">--}}
    <link rel="stylesheet" href="{{ url('css/materialize.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap4.css') }}"> --}}
    <style>
        .josh{
        height: 600px; /* Your height here */
        overflow: hidden;
}
    </style>

    @yield('pageCss')

</head>
<body>
    <div class="mt-5 ml-5">
        @yield('content')
    </div>
</body>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    {{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
    <script src="{{ asset('js/materialize.js') }}"></script>
    {{--<script src="{{ asset('js/materialize.min.js') }}"></script>--}}
    <script src="{{ asset('js/plugins/chartsJS/chart1.bundle.min.js') }}"></script>

    @yield('pageJs')

</html>