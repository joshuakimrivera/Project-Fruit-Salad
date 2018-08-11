@extends('layouts.default')




@section('content')

<!--NAVIGATIONAL STRUCTURES -->
<!-- NAV BAR HEADER -->
<nav>
    <div class="navbar-fixed ">
        <nav>
          <div class="nav-wrapper red darken-4">
              <button class="btn-flat sidenav-trigger" data-target="slide-out"><i class="material-icons white-text">menu</i></button>
                <a href="#!" class="brand-logo white-text">PUP Stats</a>
                <ul class="right hide-on-med-and-down">
                </ul>
          </div>
        </nav>
    </div> 
</nav>

<!-- SIDEBAR NAVIGATION -->
<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
            <div class="background">
                <img src="images/office.jpg">
            </div>
            <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
            <a href="#name"><span class="white-text name">John Doe</span></a>
            <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div>
    </li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>
<!-- END OF NAVIGATIONAL STRUCTURES -->

<!-- MAIN CONTAINER --> 
<div>  
    <!--SPACER -->
    <div style="height: 50px;"></div>
<div>

    {{-- College of Engineering --}}
    <!-- CARD CONTAINER STRUCTURE FOR COLLEGE OF ENGINEERING -->
        <div class="row">
            <div class="col s12">
                <div class="card  z-depth-4">
                    <div class="card-image">
                        <div class="row">
                            <div class="col s6 flow-text center"><h4>College of Engineering</h4></div>
                            <div class="col s6 center"><span><h4>Statistics</h4></span></div>
                                <div class="col s6">
                                          <div>
                                                <table class="responsive-table striped">
                                                        <tr>
                                                            <th><a href="{{ route('CE.sortingOfName') }}" class="red-text text-darken-4">Name</a></th>
                                                            <!--<th><a href="{{ route('CE.sortingOfBirthday') }}" class="red-text text-darken-4">Birthday</a></th>-->
                                                            <th><a href="{{ route('CE.sortingOfAge') }}" class="red-text text-darken-4">Age</a></th>
                                                            <th><a href="{{ route('CE.sortingOfGender') }}" class="red-text text-darken-4">Gender</a></th>
                                                            <!--<th><a href="#" class="red-text text-darken-4">Address</a></th>-->
                                                            <th><a href="#" class="red-text text-darken-4">Department</a></th>
                                                            <th><a href="#" class="red-text text-darken-4">Year</a></th>
                                                            <th><a href="#" class="red-text text-darken-4">Section</a></th>
                                                            <th><a href="#" class="red-text text-darken-4">&nbsp</a></th>
                                                        </tr>
                            
                                                        @foreach($shows as $show)  
                                                            <tr>
                                                                <td>{{ $show->last_name }}, {{ $show->first_name }} {{ $show->middle_initial }}.</td>
                                                                <!--<td>{{ $show->bday_month }} {{ $show->bday_day }}, {{ $show->bday_year }}</td>-->
                                                                <td>{{ $show->age }}</td>
                                                                <td>{{ $show->gender }}</td>
                                                                <!--<td>{{ $show->address }}</td>-->
                                                                <td>{{ $show->department }}</td>
                                                                <td>{{ $show->year }}</td>
                                                                <td>Section {{ $show->section }}</td>
                                                                <td>
                                                                    <a class="btn-small btn-floating tooltipped" data-position="bottom" data-tooltip="Show" href="{{ route('CollegesController.CEshow',$show->id) }}"><i class="material-icons">open_in_new</i></a>
                                                                    <a class="btn-small btn-floating tooltipped" data-position="bottom" data-tooltip="Edit" href="{{ route('CollegesController.CEedit',$show->id) }}"><i class="material-icons">edit</i></a>
                                                                    <a class="btn-small btn-floating red tooltipped" data-position="bottom" data-tooltip="Delete" href = "{{ route('CollegesController.CEdelete',$show->id) }}"><i class="material-icons">delete</i></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </table>
                                                    <div class="column">
                                                            <div class="col-xs-1 align-center">
                                                                <div>{{ $datas->links() }}</div>
                                                            </div>
                                                    </div>
                                          </div>
                                    </div>
                                <div class="col s6"  >
                                    <div class="materialboxed"><canvas id="CollegeofEngineering"></canvas></div>
                                        <br><br>
                                        <div class="container">
                                                <div class="row">
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
                                            </div>
                                        <form action="{{ route('CEimport') }}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="file" name="file" class="">
                                            <input type="submit" value="Submit Excel" class="btn btn-primary btn-sm">
                                        </form>
                                </div>
                        </div>
                        <!-- MATERIALBOXED MATERIALIZECSS STRUCTURE -->
                        <!--<div class="materialboxed"  >
                            <canvas id="CollegeofEngineering" ></canvas>
                        </div>-->
                        <!-- END OF MATERIALBOXED STRUCTURE -->

                        <!--CARD TITLE STRUCTURE -->
                        
                        <!-- END OF CARD TITLE STRUCTURE -->

                        <a href="{{ route('CollegesController.CEadd') }}" class="btn-floating btn-medium halfway-fab waves-effect waves-light red darken-4"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                    </div>
                </div>
            </div>
        </div>

        <!-- CARD CONTAINER STRUCTURE FOR COLLEGE OF EDUCATION -->
        <div class="row">
                <div class="col s12">
                    <div class="card  z-depth-4">
                        <div class="card-image">
                            <div class="row">
                                <div class="col s6 flow-text center"><h4>College of Education</h4></div>
                                <div class="col s6 center"><span><h4>Statistics</h4></span></div>
                                    <div class="col s6">
                                              <div>
                                                    <table class="responsive-table">
                                                            <tr>
                                                                    <th class="mr-5 ml-5"><a href="#" class="">Name</a></th>
                                                                    <!--<th class="mr-5 ml-5"><a href="#" class="">Birthday</a></th>-->
                                                                    <th class="mr-5 ml-5"><a href="#" class="">Age</a></th>
                                                                    <th class="mr-5 ml-5"><a href="#" class="">Gender</a></th>
                                                                    <!--<th class="mr-5 ml-5"><a href="#" class="">Address</a></th>-->
                                                                    <th class="mr-5 ml-5"><a href="#" class="">Department</a></th>
                                                                    <th class="mr-5 ml-5"><a href="#" class="">Year</a></th>
                                                                    <th class="mr-5 ml-5"><a href="#" class="">Section</a></th>
                                                                    <th class="mr-5 ml-5"><a href="#" class="">ACTION</a></th>
                                                                </tr>
                                                                @foreach($datas as $data)  
                                                                    <tr>
                                                                        <td class="mr-5 ml-5">{{ $data->last_name }}, {{ $data->first_name }} {{ $data->middle_initial }}.</td>
                                                                        <!--<td class="mr-5 ml-5">{{ $data->bday_month }} {{ $data->bday_day }}, {{ $data->bday_year }}</td>-->
                                                                        <td class="mr-5 ml-5">{{ $data->age }}</td>
                                                                        <td class="mr-5 ml-5">{{ $data->gender }}</td>
                                                                        <!--<td class="mr-5 ml-5">{{ $data->address }}</td>-->
                                                                        <td class="mr-5 ml-5">{{ $data->department }}</td>
                                                                        <td class="mr-5 ml-5">{{ $data->year }}</td>
                                                                        <td class="mr-5 ml-5">Section {{ $data->section }}</td>
                                                                        <td class="mr-5 ml-5">
                                                                            <a class="btn btn-floating btn-small tooltipped" data-position="bottom" data-tooltip="Show" href="{{ route('CollegesController.CoEdshow',$data->id) }}"><i class="material-icons">open_in_new</i></a>
                                                                            <a class="btn btn-floating btn-small tooltipped" data-position="bottom" data-tooltip="Edit" href="{{ route('CollegesController.CoEdedit',$data->id) }}"><i class="material-icons">edit</i></a>
                                                                            <a class="btn btn-floating btn-small red tooltipped" data-position="bottom" data-tooltip="Delete" href = "{{ route('CollegesController.CoEddelete',$data->id) }}"><i class="material-icons">delete</i></a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                    </table>
                                                    <div class="column">
                                                            <div class="col-xs-1 align-center">
                                                                <div>{{ $datas->links() }}</div>
                                                            </div>
                                                    </div>
                                              </div>
                                        </div>
                                    <div class="col s6"  >
                                        <div class="materialboxed black"><canvas id="CollegeofEducation"></canvas></div>
                                            <br><br>
                                            <div class="container">
                                                    <div class="row">
                                                        <br><br>
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
                                                </div>
                                            <form action="{{ route('CoEdimport') }}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <input type="file" name="file" class="">
                                                <input type="submit" value="Submit Excel" class="btn btn-primary btn-sm">
                                            </form>
                                    </div>
                            </div>
                            <!-- MATERIALBOXED MATERIALIZECSS STRUCTURE -->
                            <!--<div class="materialboxed"  >
                                <canvas id="CollegeofEngineering" ></canvas>
                            </div>-->
                            <!-- END OF MATERIALBOXED STRUCTURE -->
    
                            <!--CARD TITLE STRUCTURE -->
                            
                            <!-- END OF CARD TITLE STRUCTURE -->
    
                            <a href="{{ route('CollegesController.CoEdadd') }}" class="btn-floating btn-medium halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CARD CONTAINER STRUCTURE FOR COLLEGE OF COMPUTER AND INFORMATION SCIENCES -->
        <div class="row">
                <div class="col s12">
                    <div class="card  z-depth-4">
                        <div class="card-image">
                            <div class="row">
                                <div class="col s6 flow-text center"><h4>College of Computer And Information Sciences</h4></div>
                                <div class="col s6 center"><span><h4>Statistics</h4></span></div>
                                    <div class="col s6">
                                              <div>
                                                    <table class="responsive-table">
                                                            <tr>
                                                                    <th class="mr-5 ml-5"><a href="#" class="">Name</a></th>
                                                                    <!--<th class="mr-5 ml-5"><a href="#" class="">Birthday</a></th>-->
                                                                    <th class="mr-5 ml-5"><a href="#" class="">Age</a></th>
                                                                    <th class="mr-5 ml-5"><a href="#" class="">Gender</a></th>
                                                                    <!--<th class="mr-5 ml-5"><a href="#" class="">Address</a></th>-->
                                                                    <th class="mr-5 ml-5"><a href="#" class="">Department</a></th>
                                                                    <th class="mr-5 ml-5"><a href="#" class="">Year</a></th>
                                                                    <th class="mr-5 ml-5"><a href="#" class="">Section</a></th>
                                                                    <th class="mr-5 ml-5"><a href="#" class="">ACTION</a></th>
                                                                </tr>
                                                                @foreach($outputs as $data)  
                                                                    <tr>
                                                                        <td class="mr-5 ml-5">{{ $data->last_name }}, {{ $data->first_name }} {{ $data->middle_initial }}.</td>
                                                                        <!--<td class="mr-5 ml-5">{{ $data->bday_month }} {{ $data->bday_day }}, {{ $data->bday_year }}</td>-->
                                                                        <td class="mr-5 ml-5">{{ $data->age }}</td>
                                                                        <td class="mr-5 ml-5">{{ $data->gender }}</td>
                                                                        <!--<td class="mr-5 ml-5">{{ $data->address }}</td>-->
                                                                        <td class="mr-5 ml-5">{{ $data->department }}</td>
                                                                        <td class="mr-5 ml-5">{{ $data->year }}</td>
                                                                        <td class="mr-5 ml-5">Section {{ $data->section }}</td>
                                                                        <td class="mr-5 ml-5">
                                                                            <a class="btn btn-floating btn-small tooltipped" data-position="bottom" data-tooltip="Show" href="{{ route('CollegesController.CCISshow',$data->id) }}"><i class="material-icons">open_in_new</i></a>
                                                                            <a class="btn btn-floating btn-small tooltipped" data-position="bottom" data-tooltip="Edit" href="{{ route('CollegesController.CCISedit',$data->id) }}"><i class="material-icons">edit</i></a>
                                                                            <a class="btn btn-floating btn-small tooltipped red" data-position="bottom" data-tooltip="Delete" href = "{{ route('CollegesController.CCISdelete',$data->id) }}"><i class="material-icons">delete</i></a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                        </table>
                                                        <div class="column">
                                                            <div class="col-xs-1 align-center">
                                                                <div>{{ $datas->links() }}</div>
                                                            </div>
                                                        </div>
                                              </div>
                                        </div>
                                    <div class="col s6"  >
                                        <div class="materialboxed"><canvas id="CollegeofComputerAndInformationSciences"></canvas></div>
                                            <br><br>
                                            <div class="container">
                                                    <div class="row">
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
                                                </div>
                                            <form action="{{ route('CCISimport') }}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <input type="file" name="file" class="">
                                                <input type="submit" value="Submit Excel" class="btn btn-primary btn-sm">
                                            </form>
                                    </div>
                            </div>
                            <!-- MATERIALBOXED MATERIALIZECSS STRUCTURE -->
                            <!--<div class="materialboxed"  >
                                <canvas id="CollegeofEngineering" ></canvas>
                            </div>-->
                            <!-- END OF MATERIALBOXED STRUCTURE -->
    
                            <!--CARD TITLE STRUCTURE -->
                            
                            <!-- END OF CARD TITLE STRUCTURE -->
    
                            <a href="{{ route('CollegesController.CCISadd') }}" class="btn-floating btn-medium halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                        </div>
                    </div>
                </div>
            </div>




































<!-- END OF MAIN CONTAINER -->
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems, {
        enterDelay: 250
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

    <script>
        var ctx = document.getElementById("CollegeofEngineering").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["CE", "ECE", "EE", "ME", "IE", "COE"],
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
    <script>
            var ctx = document.getElementById("CollegeofEducation").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["BBTE", "BLIS", "BEED", "BSED-ENG", "BSED-FIL", "BSED-MATH", "BSED-SOC"],
                    datasets: [{
                        label: ' Number of students in this College',
                        data: [12, 19, 3, 5, 2, 3, 20],
                        backgroundColor: [
                            '#b71c1c',
                            '#0288d1',
                            '#311b92',
                            '#ffff00',
                            '#1b5e20',
                            '#ff9800',
                            '#4a148c'
                        ],
                        borderColor: [
                            '#b71c1c',
                            '#0288d1',
                            '#311b92',
                            '#ffff00',
                            '#1b5e20',
                            '#ff9800',
                            '#4a148c'
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
        <script>
                var ctx = document.getElementById("CollegeofComputerAndInformationSciences").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["CS", "IT"],
                        datasets: [{
                            label: ' Number of students in this College',
                            data: [12, 19],
                            backgroundColor: [
                                '#b71c1c',
                                '#0288d1'
                            ],
                            borderColor: [
                                '#b71c1c',
                                '#0288d1'
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