<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colleges</title>
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-material-datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    @yield('pageCss')

</head>
<body>
    <div class="mt-5 ml-5">
        @yield('content')
    </div>
</body>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/moment-with-locales.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetAlert/sweetalert2.all.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/plugins/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('js/dist/jquery.inputmask.bundle.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/plugins/chartsJS/Chart.bundle.min.js') }}"></script> 
    <script src="{{ URL::asset('js/chartjs-plugin-datalabels.min.js') }}"></script>

    @yield('pageJs')

</html>