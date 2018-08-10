@extends('layouts.default')


@section('pageCss')
    <style>
        table, th {
            text-align: center;
            border: solid;
        }

        td {
            border-style: groove;
        }
    </style>
@endsection


@section('content')
<!--icerivera-->
<div >
    {{-- College of Engineering --}}
    <!-- card experiment -->
        <div class="row">
            <div class="col s6">
              <div class="card">
                <div class="card-image blue-grey darken-3">
                    <div >
                        <canvas id="CollegeofEngineering" ></canvas>
                    </div> 
                  <!--<span class="card-title">Card Title</span>-->
                  

                <div style="position: relative; height: 70px;">
                        <form action="{{ route('CEimport') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="fixed-action-btn click-to-toggle" style="position: absolute; right: 24px;">
                          <a class="btn-floating btn-large red">
                            <i class="material-icons">menu</i>
                          </a>
                          <ul>
                            <li>
                              <a class="btn-floating red"  href="{{ route('CollegesController.CEadd') }}">
                                <i class="material-icons">add</i>
                              </a>
                            </li>
                            <li>
                              <button type="file" name="file" class="btn-floating yellow darken-1"  >
                                <i class="material-icons">content_copy</i>
                              </button>
                            </li>
                            <li>
                              <button class="btn-floating green" type="submit">
                                <i class="material-icons">publish</i>
                              </button>
                            </li>
                          </ul>
                        </div>
                    </form>
                </div>






                </div>
                <div class="card-content">
                    <div class="container">
                            <div class="row">
                                    
                                       
                                        <br><br>
                                        <input type="file" name="file" class="">
                                        
                                        <input type="submit" value="Submit Excel" class="btn btn-primary btn-sm">
                                  
                                    <div class="col-lg-12 margin-tb">
                                        @if ( Session::has('success') )
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                                <strong>{{ Session::get('success') }}</strong>
                                            </div>
                                        @endif
                             
                                        @if ( Session::has('error') )
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <strong>{{ Session::get('error') }}</strong>
                                        </div>
                                        @endif
                                    
                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                <div>
                                                    @foreach ($errors->all() as $error)
                                                    <p>{{ $error }}</p>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                        {{-- <form action="{{ route('CollegesController.CEsearch') }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="submit" class=" pull-right btn btn-primary ml-3 mr-5" value="Search">
                                            <input class="pull-right ml-5" type="text" placeholder="Search for Name" name="data">
                                        </form> --}}
                                            
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <div class="center">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    
                                </div>
                                <div class="column">
                                        <div class="col-xs-1 align-center">
                                            <div>{{ $shows->links() }}</div>
                                        </div>
                                    </div>
                    </div>
                    <table>
                            <tr>
                                <th><a href="{{ route('CE.sortingOfName') }}" class="">Name</a></th>
                                <th><a href="{{ route('CE.sortingOfBirthday') }}" class="">Birthday</a></th>
                                <th><a href="{{ route('CE.sortingOfAge') }}" class="">Age</a></th>
                                <th><a href="{{ route('CE.sortingOfGender') }}" class="">Gender</a></th>
                                <th><a href="#" class="">Address</a></th>
                                <th><a href="#" class="">Department</a></th>
                                <th><a href="#" class="">Year</a></th>
                                <th><a href="#" class="">Section</a></th>
                                <th><a href="#" class="">ACTION</a></th>
                            </tr>
                            @foreach($shows as $show)  
                                <tr>
                                    <td>{{ $show->last_name }}, {{ $show->first_name }} {{ $show->middle_initial }}.</td>
                                    <td>{{ $show->bday_month }} {{ $show->bday_day }}, {{ $show->bday_year }}</td>
                                    <td>{{ $show->age }}</td>
                                    <td>{{ $show->gender }}</td>
                                    <td>{{ $show->address }}</td>
                                    <td>{{ $show->department }}</td>
                                    <td>{{ $show->year }}</td>
                                    <td>Section {{ $show->section }}</td>
                                    <td>
                                        <a class="btn" href="{{ route('CollegesController.CEshow',$show->id) }}">show</a>
                                        <a class="btn" href="{{ route('CollegesController.CEedit',$show->id) }}">edit</a>
                                        <a class="btn" href = "{{ route('CollegesController.CEdelete',$show->id) }}">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                </div>
              </div>
            </div>
        </div>









   

    {{-- College Of Education --}}
    <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h5>College of Education</h5>
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
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right mr-4">
                    <form action="{{ route('CoEdimport') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" name="file" class="">
                        
                        <input type="submit" value="Submit Excel" class="btn btn-primary btn-sm">
                    </form>
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
                    <th class="mr-5 ml-5"><a href="#" class="">Name</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">Birthday</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">Age</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">Gender</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">Address</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">Department</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">Year</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">Section</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">ACTION</a></th>
                </tr>
                @foreach($datas as $data)  
                    <tr>
                        <td class="mr-5 ml-5">{{ $data->last_name }}, {{ $data->first_name }} {{ $data->middle_initial }}.</td>
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
                    <h5>College of Computer And Information Sciences</h5>
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
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right mr-4">
                    <form action="{{ route('CCISimport') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" name="file" class="">
                        
                        <input type="submit" value="Submit Excel" class="btn btn-primary btn-sm">
                    </form>
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
                    <th class="mr-5 ml-5"><a href="#" class="">Name</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">Birthday</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">Age</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">Gender</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">Address</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">Department</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">Year</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">Section</a></th>
                    <th class="mr-5 ml-5"><a href="#" class="">ACTION</a></th>
                </tr>
                @foreach($outputs as $data)  
                    <tr>
                        <td class="mr-5 ml-5">{{ $data->last_name }}, {{ $data->first_name }} {{ $data->middle_initial }}.</td>
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
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      direction: 'left',
      hoverEnabled: true
    });
  });
</script>
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