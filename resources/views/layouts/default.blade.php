<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href=" {{ url('pup.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PUP Analytics</title>
    <!--Import Google Icon Font-->
    {{--<link href="{{ url('css/material-icons.css') }}" rel="stylesheet">--}}
    <link href="{{ url('css/material-icons.css') }}" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"> --}}
    {{--<link rel="stylesheet" href="{{ url('css/font-awesome-4.7.0/css/font-awesome.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ url('css/font-awesome-4.7.0/css/font-awesome.min.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ url('css/materialize.min.css') }}">--}}
    <link type="text/css" rel="stylesheet" href="{{ url('css/materialize.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap4.css') }}"> --}}
    <link rel="stylesheet" href="{{ url('css/jquery.dataTables.min.css') }}">
    <style>
        .josh{
            height: 600px; /* Your height here */
        (   /*overflow: hidden;*/
        }
    </style>

    @yield('pageCss')

</head>
<body class="">
    <div class="mt-5 ml-5">
        @yield('content')
    </div>
</body>
    <!-- Compiled and minified JavaScript -->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>--}}
    <script src="{{ asset('js/sweetAlert.min.js') }}"></script>
    {{-- <script src="{{ asset('js/plugins/sweetAlert/sweetalert.all.js') }}"></script> --}}
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    {{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
    <script src="{{ asset('js/materialize.js') }}"></script>
    {{--<script src="{{ asset('js/materialize.min.js') }}"></script>--}}
    <script src="{{ asset('js/plugins/chartsJS/chart1.bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/jquery.dataTables.min.js') }}"></script>  
    <script>
        $(".viewmodal").on('click', function(){
            // $('option:selected', this).attr('url')
            // console.log($(this).attr('firstname'));
            var address = $(this).parent('td').parent('tr').find('td:eq(4)').text();
            var department = $(this).parent('td').parent('tr').find('td:eq(5)').text();
            $("input[name='first_name").val($(this).attr('first_name'));
            $("input[name='middle_initial").val($(this).attr('middle_initial'));
            $("input[name='last_name").val($(this).attr('last_name'));            
            $("input[name='bday_month").val($(this).attr('bday_month'));
            $("input[name='bday_day").val($(this).attr('bday_day'));
            $("input[name='bday_year").val($(this).attr('bday_year'));
            $("input[name='age").val($(this).attr('age'));
            $("input[name='gender").val($(this).attr('gender'));
            $("input[name='address").val(address);
            $("input[name='department").val(department);
            $("input[name='year").val($(this).attr('year'));
            $("input[name='section").val($(this).attr('section'));
        });        
    </script>
    <script>
        $(".editmodal").on('click', function(){
            // $('option:selected', this).attr('url')
            // console.log($(this).attr('firstname'));
            var address = $(this).parent('td').parent('tr').find('td:eq(4)').text();
            var department = $(this).parent('td').parent('tr').find('td:eq(5)').text();
            $("input[name='first_name").val($(this).attr('first_name'));
            $("input[name='middle_initial").val($(this).attr('middle_initial'));
            $("input[name='last_name").val($(this).attr('last_name'));            
            $("input[name='bday_month").val($(this).attr('bday_month'));
            $("input[name='bday_day").val($(this).attr('bday_day'));
            $("input[name='bday_year").val($(this).attr('bday_year'));
            $("input[name='age").val($(this).attr('age'));
            $("input[name='gender").val($(this).attr('gender'));
            $("input[name='address").val(address);
            $("input[name='department").val(department);
            $("input[name='year").val($(this).attr('year'));
            $("input[name='section").val($(this).attr('section'));
            $("#nameid span").text($(this).attr('first_name'));
        
        });        
    </script>
    <script>
        $("#addstud").on('click', function(){
            $("input[name='first_name").val("");
            $("input[name='last_name").val("");
            $("input[name='middle_initial").val("");
            $("input[name='bday_month").val("");
            $("input[name='bday_day").val("");
            $("input[name='bday_year").val("");
            $("input[name='age").val("");
            $("input[name='gender").val("");
            $("input[name='address").val("");
            $("input[name='department").val("");
            $("input[name='year").val("");
            $("input[name='section").val("");



        });
    </script>

    @yield('pageJs')

</html>