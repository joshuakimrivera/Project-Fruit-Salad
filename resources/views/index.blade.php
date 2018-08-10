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
<nav> <div class="navbar-fixed ">
        <nav>
          <div class="nav-wrapper blue-grey lighten-5">
              <button class="btn-flat sidenav-trigger" data-target="slide-out"><i class="material-icons">menu</i></button>
            <a href="#!" class="brand-logo black-text">PUP Stats</a>
            <ul class="right hide-on-med-and-down">
              <li></li>
            </ul>
          </div>
        </nav>
      </div> </nav>

  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>

      
<div>
    
<div style="height: 50px;"></div>

<!--icerivera-->
<div class="container">
    {{-- College of Engineering --}}
    <!-- card experiment -->
        <div class="row">
            <div class="col s12">
              <div class="card  z-depth-4">
                <div class="card-image grey darken-4">
                    <div class="materialboxed"  >
                        <canvas id="CollegeofEngineering" ></canvas>
                    </div> 
                  <!--<span class="card-title">Card Title</span>-->
                  <a  href="{{ route('CollegesController.CEadd') }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
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
                                        <a class="btn-small" href="{{ route('CollegesController.CEshow',$show->id) }}">show</a>
                                        <a class="btn-small" href="{{ route('CollegesController.CEedit',$show->id) }}">edit</a>
                                        <a class="btn-small" href = "{{ route('CollegesController.CEdelete',$show->id) }}">delete</a>
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
                    <h5 id="huwaw">College of Education</h5>
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
                    <h5 id="huwaw2">College of Computer And Information Sciences</h5>
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
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems, {
        
    });
  });
</script>
<!--sidenav INIT-->
<script>
        document.addEventListener('DOMContentLoaded', function() {
           var elems = document.querySelectorAll('.sidenav');
           var instances = M.Sidenav.init(elems, {
            draggable: 'true'
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
                        '#b71c1c',
                        '#0288d1',
                        '#311b92',
                        '#ffff00',
                        '#1b5e20',
                        '#ff9800'
                    ],
                    borderColor: [
                        '#b71c1c',
                        '#0288d1',
                        '#311b92',
                        '#ffff00',
                        '#1b5e20',
                        '#ff9800'
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