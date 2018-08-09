@extends('layouts.default')


@section('pageCss')
    <style>
        table, th, td {
            border-color: red;
            border: solid;
        }
    </style>
@endsection


@section('content')
    {{-- College of Engineering --}}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>College of Engineering</h2>
            </div>
            {{-- <form action="{{ route('CollegesController.CEsearch') }}" method="post">
                {{ csrf_field() }}
                <input type="submit" class=" pull-right btn btn-primary ml-3 mr-5" value="Search">
                <input class="pull-right ml-5" type="text" placeholder="Search for Name" name="data">
            </form> --}}
            <div class="pull-right mr-4">
                <a class="btn btn-info" href="{{ route('CollegesController.CEadd') }}"> Add Student Information</a>
            </div>
            <div class="pull-right">
                    &nbsp;
            </div>
            <div class="pullright">
                &nbsp;
            </div>
        </div>
    </div>
    {{-- <hr>
    <div class="col-md-10">
        <canvas id="CollegeofEngineering" width="100" height="100"></canvas>
    </div> --}}
    <hr>
    <div class="row">
        <table>
            <tr>
                <th class="mr-5 ml-5 ml-5">Name</th>
                <th class="mr-5 ml-5">Birthday</th>
                <th class="mr-5 ml-5">Age</th>
                <th class="mr-5 ml-5">Gender</th>
                <th class="mr-5 ml-5">Address</th>
                <th class="mr-5 ml-5">Department</th>
                <th class="mr-5 ml-5">Year</th>
                <th class="mr-5 ml-5">Section</th>
                <th class="mr-5 ml-5">ACTION</th>
            </tr>
            @foreach($shows as $show)  
                <tr>
                    <td class="mr-5 ml-5">{{ $show->name }}</td>
                    <td class="mr-5 ml-5">{{ $show->bday_month }} {{ $show->bday_day }}, {{ $show->bday_year }}</td>
                    <td class="mr-5 ml-5">{{ $show->age }}</td>
                    <td class="mr-5 ml-5">{{ $show->gender }}</td>
                    <td class="mr-5 ml-5">{{ $show->address }}</td>
                    <td class="mr-5 ml-5">{{ $show->department }}</td>
                    <td class="mr-5 ml-5">{{ $show->year }}</td>
                    <td class="mr-5 ml-5">Section {{ $show->section }}</td>
                    <td class="mr-5 ml-5">
                        <a class="btn btn-info" href="{{ route('CollegesController.CEshow',$show->id) }}">show</a>
                        <a class="btn btn-info" href="{{ route('CollegesController.CEedit',$show->id) }}">edit</a>
                        <a class="btn btn-info" href = "{{ route('CollegesController.CEdelete',$show->id) }}">delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="column">
            <div class="col-xs-1 align-center">
                <div>{{ $shows->links() }}</div>
            </div>
        </div>
    <hr>

    {{-- College Of Education --}}
    <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>College of Education</h2>
                </div>
                {{-- <form action="{{ route('CollegesController.CEsearch') }}" method="post">
                    {{ csrf_field() }}
                    <input type="submit" class=" pull-right btn btn-primary ml-3 mr-5" value="Search">
                    <input class="pull-right ml-5" type="text" placeholder="Search for Name" name="data">
                </form> --}}
                <div class="pull-right mr-4">
                    <a class="btn btn-info" href="{{ route('CollegesController.CoEdadd') }}"> Add Student Information</a>
                </div>
                <div class="pull-right">
                        &nbsp;
                </div>
                <div class="pullright">
                    &nbsp;
                </div>
            </div>
        </div>
        <hr>
        {{-- <div class="col-md-10">
            <canvas id="CollegeofEngineering" width="100" height="100"></canvas>
        </div> --}}
        <hr>
        <div class="row">
            <table>
                <tr>
                    <th class="mr-5 ml-5 ml-5">Name</th>
                    <th class="mr-5 ml-5">Birthday</th>
                    <th class="mr-5 ml-5">Age</th>
                    <th class="mr-5 ml-5">Gender</th>
                    <th class="mr-5 ml-5">Address</th>
                    <th class="mr-5 ml-5">Department</th>
                    <th class="mr-5 ml-5">Year</th>
                    <th class="mr-5 ml-5">Section</th>
                    <th class="mr-5 ml-5">ACTION</th>
                </tr>
                @foreach($datas as $data)  
                    <tr>
                        <td class="mr-5 ml-5">{{ $data->name }}</td>
                        <td class="mr-5 ml-5">{{ $data->bday_month }} {{ $data->bday_day }}, {{ $data->bday_year }}</td>
                        <td class="mr-5 ml-5">{{ $data->age }}</td>
                        <td class="mr-5 ml-5">{{ $data->gender }}</td>
                        <td class="mr-5 ml-5">{{ $data->address }}</td>
                        <td class="mr-5 ml-5">{{ $data->department }}</td>
                        <td class="mr-5 ml-5">{{ $data->year }}</td>
                        <td class="mr-5 ml-5">Section {{ $data->section }}</td>
                        <td class="mr-5 ml-5">
                            <a class="btn btn-info" href="{{ route('CollegesController.CoEdshow',$data->id) }}">show</a>
                            <a class="btn btn-info" href="{{ route('CollegesController.CoEdedit',$data->id) }}">edit</a>
                            <a class="btn btn-info" href = "{{ route('CollegesController.CoEddelete',$data->id) }}">delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="column">
            <div class="col-xs-1 align-center">
                <div>{{ $datas->links() }}</div>
            </div>
        </div>
        <hr>


        {{-- College Of Computer and Information Sciences --}}
    <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>College of Computer And Information Sciences</h2>
                </div>
                {{-- <form action="{{ route('CollegesController.CEsearch') }}" method="post">
                    {{ csrf_field() }}
                    <input type="submit" class=" pull-right btn btn-primary ml-3 mr-5" value="Search">
                    <input class="pull-right ml-5" type="text" placeholder="Search for Name" name="data">
                </form> --}}
                <div class="pull-right mr-4">
                    <a class="btn btn-info" href="{{ route('CollegesController.CCISadd') }}"> Add Student Information</a>
                </div>
                <div class="pull-right">
                        &nbsp;
                </div>
                <div class="pullright">
                    &nbsp;
                </div>
            </div>
        </div>
        <hr>
        {{-- <div class="col-md-10">
            <canvas id="CollegeofEngineering" width="100" height="100"></canvas>
        </div> --}}
        <hr>
        <div class="row">
            <table>
                <tr>
                    <th class="mr-5 ml-5 ml-5">Name</th>
                    <th class="mr-5 ml-5">Birthday</th>
                    <th class="mr-5 ml-5">Age</th>
                    <th class="mr-5 ml-5">Gender</th>
                    <th class="mr-5 ml-5">Address</th>
                    <th class="mr-5 ml-5">Department</th>
                    <th class="mr-5 ml-5">Year</th>
                    <th class="mr-5 ml-5">Section</th>
                    <th class="mr-5 ml-5">ACTION</th>
                </tr>
                @foreach($outputs as $data)  
                    <tr>
                        <td class="mr-5 ml-5">{{ $data->name }}</td>
                        <td class="mr-5 ml-5">{{ $data->bday_month }} {{ $data->bday_day }}, {{ $data->bday_year }}</td>
                        <td class="mr-5 ml-5">{{ $data->age }}</td>
                        <td class="mr-5 ml-5">{{ $data->gender }}</td>
                        <td class="mr-5 ml-5">{{ $data->address }}</td>
                        <td class="mr-5 ml-5">{{ $data->department }}</td>
                        <td class="mr-5 ml-5">{{ $data->year }}</td>
                        <td class="mr-5 ml-5">Section {{ $data->section }}</td>
                        <td class="mr-5 ml-5">
                            <a class="btn btn-info" href="{{ route('CollegesController.CCISshow',$data->id) }}">show</a>
                            <a class="btn btn-info" href="{{ route('CollegesController.CCISedit',$data->id) }}">edit</a>
                            <a class="btn btn-info" href = "{{ route('CollegesController.CCISdelete',$data->id) }}">delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <hr>
    <div class="column">
        <div class="col-xs-1 align-center">
            <div>{{ $outputs->links() }}</div>
        </div>
    </div>
@endsection


@section('pageJs')
    {{-- <script>
        var domCE = document.getElementById("CollegeofEngineering");
        var CEchart = new Chart(domCE, {
                type:'bar',
                data: {
                    labels: show,
                    datasets: [
                            {
                                label: 'Poly',
                                datalabels: {
                                    fontsize: 18,
                                    fontStyle: 100,
                                    color: '#fff'
                                },
                                data: poly_monthly,
                                backgroundColor: backgroundPoly,
                                borderColor: backgroundPoly,
                                borderWidth: 2,
                            },
                            {
                                label: 'EVA',
                                datalabels: {
                                    fontsize: 18,
                                    fontStyle: 100,
                                    color: '#fff'
                                },
                                data: eva_monthly,
                                backgroundColor: backgroundEVA,
                                borderColor: backgroundEVA,
                                borderWidth: 2
                            }
                        ]
                },
                option: {
                        scales: {
                        yAxes: [{
                            stacked: true,
                            ticks: {
                            beginAtZero: true,
                            fontSize: 18,
                            fontStyle: 100,
                            fontColor: '#eeeee'
                            }
                        }],
                        xAxes: [{
                            stacked: true,
                            ticks: {
                            beginAtZero: true,
                            fontSize: 18,
                            fontStyle: 600,
                            fontColor: '#54575b'
                            },
                            categoryPercentage: .7
                        }]
                    },
                }
            }) 
    </script> --}}

    <canvas id="myChart" width="400" height="400"></canvas>
    <script>
        var ctx = document.getElementById("CollegeofEngineering").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Civil Engineering", "Electronics Engineering", "Electrical Engineering", "Mechanical Engineering", "Industrial Engineering", "Computer Engineering"],
                datasets: [{
                    label: ' Number of students in this College',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
@endsection