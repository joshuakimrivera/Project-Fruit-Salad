@extends('layouts.default')

@section('pageCss')
    <style>
        th, td {
            text-align: center;
            vertical-align: middle;
            font-size: 14px;
        }
        nav {
    height: 40px;
    line-height: 40px;
            }

        nav i, nav [class^="mdi-"], nav [class*="mdi-"], nav i.material-icons {
            height: 40px;
            line-height: 40px;
            }

        nav .button-collapse i {
            height: 40px;
            line-height: 40px;
            }

        nav .brand-logo { 
            font-size: 1.3rem; 
        }

        @media only screen and (min-width: 601px){
            nav, nav .nav-wrapper i, nav a.button-collapse, nav a.button-collapse i {
                height: 40px;
                line-height: 40px;
            }
        }

    </style>
    <!--Adminlte css  -->
    <!-- <link rel="stylesheet" href="{{ url('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"> -->
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="{{ url('adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}"> -->
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="{{ url('adminlte/bower_components/Ionicons/css/ionicons.min.css') }}"> -->
  <!-- DataTables -->
  <!-- <link rel="stylesheet" href="{{ url('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="{{ url('adminlte/dist/css/AdminLTE.min.cs') }}s"> -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!-- <link rel="stylesheet" href="{{ url('adminlte/dist/css/skins/_all-skins.min.css') }}"> -->
    <!--Adminlte css  -->
@endsection
@section('content')

<!--NAVIGATIONAL STRUCTURES -->
<!-- NAV BAR HEADER -->
<nav>
    <div class="navbar-fixed ">
        <nav>
          <div class="nav-wrapper indigo darken-4">
              <button class="btn-flat sidenav-trigger button-collapse" data-target="slide-out" style="top: -8px;"><i class="material-icons white-text">menu</i></button>
                <a href="#!" class="brand-logo white-text"><i class="large material-icons left" style="font-size: 2rem;">equalizer</i>PUP Analytics</a>
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
                {{-- <img src="images/office.jpg"> --}}
            </div>
            {{-- <a href="#user"><img class="circle" src="images/yuna.jpg"></a> --}}
            <a href="#name"><span class="name"><i class="material-icons">insert_chart</i>&nbsp PUP STATISTICS DASHBOARD</span></a>
            {{--<a href="#email"><span class="email" style="font-size: 10px;" >https://gitlab.com/cristianumali.a99/Project-Fruit-Salad</span></a>--}}
        </div>
        <br>
    </li>
    <li><a href="#!"><i class="material-icons">nature_people</i>Project-Fruit-Salad</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>
<!-- END OF NAVIGATIONAL STRUCTURES -->

<div style="height: 15px;"></div>

<!--MAIN DASHBOARD-->
<!-- sample adminlte testing -->
<!-- <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div> -->
            <!-- /.box-header -->
            <!-- <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead><tr>
                    <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Name</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Birthday</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Age</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Gender</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Address</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Department</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Year</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Section</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Actions</h6></a></th>
                </tr>
                </thead>
                @foreach($shows as $show)  
                            <tr>
                                <td class="mr-5 ml-5">{{ $show->last_name }}, {{ $show->first_name }} {{ $show->middle_initial }}.</td>
                                <td class="mr-5 ml-5">{{ $show->bday_month }} {{ $show->bday_day }}, {{ $show->bday_year }}</td>
                                <td class="mr-5 ml-5">{{ $show->age }}</td>
                                <td class="mr-5 ml-5">{{ $show->gender }}</td>
                                <td class="mr-5 ml-5">{{ $show->address }}</td>
                                <td class="mr-5 ml-5">{{ $show->department }}</td>
                                <td class="mr-5 ml-5">{{ $show->year }}</td>
                                <td class="mr-5 ml-5">Section {{ $show->section }}</td>
                                <td class="mr-5 ml-5"> -->
                                    <!-- {{--<a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="{{ route('CollegesController.CoEdshow',$data->id) }}"><i class="material-icons">open_in_new</i></a>--}} -->
                                    <!-- Modal Trigger -->
                                    <!-- <a class="btn btn-floating btn-small tooltipped light-blue darken-4 modal-trigger viewmodal"
                                        first_name = "{{ $show->first_name }}"
                                        last_name = "{{ $show->last_name }}"
                                        middle_initial = "{{ $show->middle_initial }}"
                                        bday_month = "{{ $show->bday_month }}"
                                        bday_day = "{{ $show->bday_day }}"
                                        bday_year = "{{ $show->bday_year }}"
                                        age = "{{ $show->age }}"
                                        gender = "{{ $show->gender }}"
                                        year = "{{ $show->year }}"
                                        section = "{{ $show->section }}"
                                        data-position="bottom" data-tooltip="View" href="#showmodal"><i class="material-icons">zoom_in</i></a>
                                    <a class="btn btn-floating btn-small tooltipped orange modal-trigger editmodal" data-position="bottom " data-tooltip="Edit"  href="#ceeditmodal" first_name = "{{ $show->first_name }}"
                                        last_name = "{{ $show->last_name }}"
                                        middle_initial = "{{ $show->middle_initial }}"
                                        bday_month = "{{ $show->bday_month }}"
                                        bday_day = "{{ $show->bday_day }}"
                                        bday_year = "{{ $show->bday_year }}"
                                        age = "{{ $show->age }}"
                                        gender = "{{ $show->gender }}"
                                        year = "{{ $show->year }}"
                                        section = "{{ $show->section }}"><i class="material-icons"
                                        >edit</i></a>
                                    <a class="btn btn-floating btn-small red darken-5 tooltipped modal-trigger" data-position="bottom" data-tooltip="Delete" href = "{{ route('CollegesController.CEdelete',$show->id) }}"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>

                            @endforeach
                            @foreach($shows as $show)  
                            <tr>
                                <td class="mr-5 ml-5">{{ $show->last_name }}, {{ $show->first_name }} {{ $show->middle_initial }}.</td>
                                <td class="mr-5 ml-5">{{ $show->bday_month }} {{ $show->bday_day }}, {{ $show->bday_year }}</td>
                                <td class="mr-5 ml-5">{{ $show->age }}</td>
                                <td class="mr-5 ml-5">{{ $show->gender }}</td>
                                <td class="mr-5 ml-5">{{ $show->address }}</td>
                                <td class="mr-5 ml-5">{{ $show->department }}</td>
                                <td class="mr-5 ml-5">{{ $show->year }}</td>
                                <td class="mr-5 ml-5">Section {{ $show->section }}</td>
                                <td class="mr-5 ml-5"> -->
                                    <!-- {{--<a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="{{ route('CollegesController.CoEdshow',$data->id) }}"><i class="material-icons">open_in_new</i></a>--}} -->
                                    <!-- Modal Trigger -->
                                    <!-- <a class="btn btn-floating btn-small tooltipped light-blue darken-4 modal-trigger viewmodal"
                                        first_name = "{{ $show->first_name }}"
                                        last_name = "{{ $show->last_name }}"
                                        middle_initial = "{{ $show->middle_initial }}"
                                        bday_month = "{{ $show->bday_month }}"
                                        bday_day = "{{ $show->bday_day }}"
                                        bday_year = "{{ $show->bday_year }}"
                                        age = "{{ $show->age }}"
                                        gender = "{{ $show->gender }}"
                                        year = "{{ $show->year }}"
                                        section = "{{ $show->section }}"
                                        data-position="bottom" data-tooltip="View" href="#showmodal"><i class="material-icons">zoom_in</i></a>
                                    <a class="btn btn-floating btn-small tooltipped orange modal-trigger editmodal" data-position="bottom " data-tooltip="Edit"  href="#ceeditmodal" first_name = "{{ $show->first_name }}"
                                        last_name = "{{ $show->last_name }}"
                                        middle_initial = "{{ $show->middle_initial }}"
                                        bday_month = "{{ $show->bday_month }}"
                                        bday_day = "{{ $show->bday_day }}"
                                        bday_year = "{{ $show->bday_year }}"
                                        age = "{{ $show->age }}"
                                        gender = "{{ $show->gender }}"
                                        year = "{{ $show->year }}"
                                        section = "{{ $show->section }}"><i class="material-icons"
                                        >edit</i></a>
                                    <a class="btn btn-floating btn-small red darken-5 tooltipped modal-trigger" data-position="bottom" data-tooltip="Delete" href = "{{ route('CollegesController.CEdelete',$show->id) }}"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>

                            @endforeach
                            @foreach($outputs as $output)  
                            <tr>
                                <td class="mr-5 ml-5">{{ $output->last_name }}, {{ $output->first_name }} {{ $output->middle_initial }}.</td>
                                <td class="mr-5 ml-5">{{ $output->bday_month }} {{ $output->bday_day }}, {{ $output->bday_year }}</td>
                                <td class="mr-5 ml-5">{{ $output->age }}</td>
                                <td class="mr-5 ml-5">{{ $output->gender }}</td>
                                <td class="mr-5 ml-5">{{ $output->address }}</td>
                                <td class="mr-5 ml-5">{{ $output->department }}</td>
                                <td class="mr-5 ml-5">{{ $output->year }}</td>
                                <td class="mr-5 ml-5">Section {{ $output->section }}</td>
                                <td class="mr-5 ml-5">
                                    {{--<a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="{{ route('CollegesController.CoEdshow',$data->id) }}"><i class="material-icons">open_in_new</i></a>--}} -->
                                    <!-- Modal Trigger -->
                                    <!-- <a class="btn btn-floating btn-small tooltipped modal-trigger light-blue darken-4 viewmodal" data-position="bottom" data-tooltip="View" href="#showmodal" first_name = "{{ $output->first_name }}"
                                        last_name = "{{ $output->last_name }}"
                                        middle_initial = "{{ $output->middle_initial }}"
                                        bday_month = "{{ $output->bday_month }}"
                                        bday_day = "{{ $output->bday_day }}"
                                        bday_year = "{{ $output->bday_year }}"
                                        age = "{{ $output->age }}"
                                        gender = "{{ $output->gender }}"
                                        year = "{{ $output->year }}"
                                        section = "{{ $output->section }}"><i class="material-icons">zoom_in</i></a>
                                    <a class="btn btn-floating btn-small tooltipped orange modal-trigger editmodal" data-position="bottom " data-tooltip="Edit" href="#cciseditmodal" first_name = "{{ $show->first_name }}"
                                        last_name = "{{ $output->last_name }}"
                                        middle_initial = "{{ $output->middle_initial }}"
                                        bday_month = "{{ $output->bday_month }}"
                                        bday_day = "{{ $output->bday_day }}"
                                        bday_year = "{{ $output->bday_year }}"
                                        age = "{{ $output->age }}"
                                        gender = "{{ $output->gender }}"
                                        year = "{{ $output->year }}"
                                        section = "{{ $output->section }}"><i class="material-icons" >edit</i></a>
                                    <a class="btn btn-floating btn-small red darken-5 tooltipped modal-trigger" data-position="bottom" data-tooltip="Delete" href = "{{ route('CollegesController.CCISdelete',$output->id) }}"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            @endforeach
              </table>
            </div> -->
            <!-- /.box-body -->
          <!-- </div> -->
          <!-- /.box -->
        <!-- </div> -->
        <!-- /.col -->
      <!-- </div> -->
      <!-- /.row -->
    <!-- </section> -->
    <!-- /.content -->
<!--   </div> -->
<!-- sample adminlte testing -->
<div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large pink darken-1">
        <i class="large material-icons">add</i>
    </a>
    <ul>
        <li><a href="#modal1" data-tooltip="Add Student" class="z-depth-2 tooltipped modal-trigger btn-floating btn-large waves-effect waves-light orange accent-3"><i class="material-icons">person_add</i></a></li>
        <li><a class="waves-effect waves-light btn-large modal-trigger tooltipped indigo darken-2" data-position="top" data-tooltip="Import Excel File" href="#modal2"><i class="material-icons">insert_chart</i></a></li>
    </ul>
</div>
<div>
    <div class="row">
        <div class="col s3 m3">
            <!--FILTER TAB-->
            <div class="card josh z-depth-4">
                <!--CARD DASHBOARD-->
                <div class="card-content">
                    <div class="col s12">
                        <span class="card-title"><i class="material-icons left" style="font-size: 2rem;">filter_none</i><h5>Filters</h5></span>
                        <br>

                        <!--COLLEGES-->
                        <div class="input-field col s11">
                            <select id="collegeFilter" name="college">
                                <option url= {{ route('CollegesController.index', $CCIS) }} selected>All Colleges</option>
                                <option url= {{ route('filter.college.CCIS', $CCIS) }} value="Computer and Information Sciences">Computer and Information Sciences</option>
                                <option url= {{ route('filter.college.CoEd', $CoEd) }} value="Education">Education</option>
                                <option url= {{ route('filter.college.CE', $CE) }} value="Engineering">Engineering</option>
                            </select>
                            <label>College</label>
                        </div>
                        <!--DEPARTMENTS-->
                        <div id="dept" class="input-field col s11">
                            <select disabled name="department">
                                <option value="ALL" selected>Select College first</option>
                            </select>
                            <label>Department</label>
                        </div>

                        <div class="input-field col s5">
                            <select disabled id="yearFilter" name="year">
                                <option selected>All Levels</option>
                                <option value="1">First Year</option>
                                <option value="2">Second Year</option>
                                <option value="3">Third Year</option>
                                <option value="4">Fourth Year</option>
                                <option value="5">Fifth Year</option>
                            </select>
                            <label>Year Level</label>
                        </div>

                        <div class="input-field col s1">&nbsp</div>

                        <div class="input-field col s5">
                            <select disabled id="sectionFilter" name="section">
                                <option value="" selected>All Sections</option>
                                <option value="1">Section 1</option>
                                <option value="2">Section 2</option>
                                <option value="3">Section 3</option>
                                <option value="4">Section 4</option>
                                <option value="5">Section 5</option>
                            </select>
                            <label>Section</label>
                        </div>

                        <div class="input-field col s6">
                            <input disabled id="icon_prefix" name="age" type="text" class="validate">
                            <label for="icon_prefix">Age</label>
                        </div>

                        <div class="input-field col s5">
                            <select disabled id="genderFilter" name="gender">
                                <option value="" selected>All Genders</option>
                                <option value="1">Female</option>
                                <option value="2">Male</option>
                            </select>
                            <label>Gender</label>
                        </div>

                        <div class="input-field col s3">
                            <select disabled id="yearFilter" name="bday_year">
                                <option selected disabled>---</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                            </select>
                            <label>Birth Year</label>
                        </div>

                        <div class="input-field col s5">
                            <select disabled id="monthFilter" name="bday_month">
                                <option selected disabled>---</option>
                                <option data-target="1" value="January">January</option>
                                <option data-target="2" value="February">February</option>
                                <option data-target="3" value="March">March</option>
                                <option data-target="4" value="April">April</option>
                                <option data-target="5" value="May">May</option>
                                <option data-target="6" value="June">June</option>
                                <option data-target="7" value="July">July</option>
                                <option data-target="8" value="August">August</option>
                                <option data-target="9" value="September">September</option>
                                <option data-target="10" value="October">October</option>
                                <option data-target="11" value="November">November</option>
                                <option data-target="12" value="December">December</option>
                            </select>
                            <label>Month</label>
                        </div>

                        <div class="input-field col s3">
                            <select disabled id="dayFilter" name="bday_day">
                                <option selected disabled>---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <label>Day</label>
                        </div>
                        {{-- <div class="col s6"  ><br>
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
                                    </div>
                                </div>       
                            </div>
                        </div> --}}
                        <!--ADD STUDENT BUTTON-->
                        
                        
                        <div class="col s9">
                            
                                <!--EXCEL FILE UPLOAD STRUCTURE -->

                            <!-- Modal Trigger -->
                           

                            <!-- Modal Structure -->
                            <div id="modal2" class="modal scale-transition" style="height: 350px; overflow: hidden;">

                                <div class="modal-content">
                                        <a class="btn btn-primary tooltipped left orange accent-3" data-tooltip="Back" href="{{ route('CollegesController.index') }}"> <i class="material-icons">arrow_back</i></a>
                                    <h4 class="center">Import Excel Spreadsheet</h4>
                                    <hr>
                                    <br>
                                    <div class="container">
                                        <div class="input-field ">
                                            <select name="import" id="import">
                                                <option selected disabled>Choose a Department</option>
                                                <option value="CE">Import in College of Engineering</option>
                                                <option value="CoEd">Import in College of Education</option>
                                                <option value="CCIS">Import in College of Computer and Information Science</option>
                                            </select>
                                            <label>Import Excel Spreadsheet to?</label>
                                        </div>
                                        <div class="hiddendiv" id="CEimport">
                                                <form action="{{ route('CEimport') }}" method="POST" enctype="multipart/form-data" onsubmit="loading()">
                                                    {{ csrf_field() }}
                                                    
                                                    <input type="file" name="file">
                                                    <br>
                                                    <div class="center">
                                                        <button type="submit" value="Submit Excel" class=" btn-large orange accent-3"><i class="material-icons">send</i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="hiddendiv" id="CoEdimport">
                                                <form action="{{ route('CoEdimport') }}" method="POST" enctype="multipart/form-data" onsubmit="loading()">
                                                    {{ csrf_field() }}
                                                    <input type="file" name="file" class="">
                                                    <br>
                                                    <div class="center">
                                                        <button type="submit" value="Submit Excel" class=" btn-large orange accent-3"><i class="material-icons">send</i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="hiddendiv" id="CCISimport">
                                                <form action="{{ route('CCISimport') }}" method="POST" enctype="multipart/form-data" onsubmit="loading()">
                                                    {{ csrf_field() }}
                                                    <input type="file" name="file" class="">
                                                    <br>
                                                    <div class="center">
                                                        <button type="submit" value="Submit Excel" class=" btn-large orange accent-3"><i class="material-icons">send</i></button>
                                                    </div>
                                                </form>
                                            </div>
                                    </div>
                                    <div id="lod" class="progress center" style="visibility: hidden;">
                                        <div class="indeterminate"></div>
                                        <h6> Sending email</h6>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>    
            </div>
        </div>
       
        
        <!--CHART CARD-->
        <div class="col s7">
            <div class="card josh z-depth-4">
                <div class="card-content row">
                    <div class="col s12">
                            <button id="rivera" type="submit" class="btn-flat tooltipped" data-position="bottom" data-tooltip="Bar Graph" onclick="toggleChart('bar')"><i class="material-icons">equalizer</i></button>
                            <button type="submit" class="btn-flat tooltipped" data-position="bottom" data-tooltip="Line Graph" onclick="toggleChart('line')"><i class="material-icons">timeline</i></button>
                            <button type="submit" class="btn-flat tooltipped" data-position="bottom" data-tooltip="Radar Chart" onclick="toggleChart('radar')"><i class="material-icons">navigation</i></button>
                            <button type="submit" class="btn-flat tooltipped" data-position="bottom" data-tooltip="Donut Chart" onclick="toggleChart('doughnut')"><i class="material-icons">donut_large</i></button>
                            <button type="submit" class="btn-flat tooltipped" data-position="bottom" data-tooltip="Pie Chart" onclick="toggleChart('pie')"><i class="material-icons">pie_chart</i></button>
                            <button type="submit" class="btn-flat tooltipped" data-position="bottom" data-tooltip="Polar Area" onclick="toggleChart('polarArea')"><i class="material-icons">track_changes</i></button>
                            <hr>
                    </div>
                    <div><canvas id="barChart" height="180%"></canvas></div>
                    <div><br><br><br><br><br></div>
                    
                        {{--<div class="input-field col s5">
                            <select id="mySelect" onchange="toggleChart();">
                                <option value="bar"  selected>Default: Bar</option>
                                <option value="line">Line</option>
                                <option value="radar">Radar</option>
                                <option value="doughnut">Doughnut</option>
                                <option value="pie">Pie</option>
                                <option value="polarArea">Polar Area</option>
                            </select>
                            <label>Chart Type</label>
                        </div>--}}
                       
                    
                </div>
            </div>
        </div>
        <!--AEXPERIMENTAL FEATURES-->
        <div class="col s2">
                <div class="card z-depth-4">
                  <div class="card-content black-text">
                    <span class="card-title center"><h2 id = "cardOne">0</h2></span>
                  <div class="card-action">
                      <span>Total Number of Students</span>
                  </div>
            </div>
        </div>
    </div>
        <div class="col s2">
                <div class="card z-depth-4" style="height: 337px">
                  <div class="card-content black-text">
                    <span class="center">CE:  <h4 id="percentOne">0%</h4></span>
                    <span class="center">CoEd:<h4 id="percentTwo">0%</h4></span>
                    <span class="center">CCIS:<h4 id="percentThree">0%</h4></span>
            </div>
        </div>
    </div>
        <!--NAME TABLE CARD-->
        <div class="col s12">
            <div class="card">
                <div class="card-content row">
                    <!--NAME TABLE-->
                        <table class="responsive-table striped" id="thetable">
                            <tr>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Name</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Birthday</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Age</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Gender</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Address</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Department</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Year</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Section</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Actions</h6></a></th>
                            </tr>
                            @foreach($datas as $data)  
                            <tr>
                                <td class="mr-5 ml-5 ">{{ $data->last_name }}, {{ $data->first_name }} {{ $data->middle_initial }}.</td>
                                <td class="mr-5 ml-5">{{ $data->bday_month }} {{ $data->bday_day }}, {{ $data->bday_year }}</td>
                                <td class="mr-5 ml-5">{{ $data->age }}</td>
                                <td class="mr-5 ml-5">{{ $data->gender }}</td>
                                <td class="mr-5 ml-5">{{ $data->address }}</td>
                                <td class="mr-5 ml-5">{{ $data->department }}</td>
                                <td class="mr-5 ml-5">{{ $data->year }}</td>
                                <td class="mr-5 ml-5">Section {{ $data->section }}</td>
                                <td class="mr-5 ml-5">
                                    {{--<a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="{{ route('CollegesController.CoEdshow',$data->id) }}"><i class="material-icons">open_in_new</i></a>--}}
                                    <!-- Modal Trigger -->
                                    <a class="btn btn-floating btn-small tooltipped modal-trigger light-blue darken-4 viewmodal" data-position="bottom" data-tooltip="View" href="#showmodal" first_name = "{{ $data->first_name }}"
                                        last_name = "{{ $data->last_name }}"
                                        middle_initial = "{{ $data->middle_initial }}"
                                        bday_month = "{{ $data->bday_month }}"
                                        bday_day = "{{ $data->bday_day }}"
                                        bday_year = "{{ $data->bday_year }}"
                                        age = "{{ $data->age }}"
                                        gender = "{{ $data->gender }}"
                                        year = "{{ $data->year }}"
                                        section = "{{ $data->section }}" ><i class="material-icons">zoom_in</i></a>
                                    <a class="btn btn-floating btn-small tooltipped orange modal-trigger editmodal" data-position="bottom " data-tooltip="Edit" href="#coededitmodal" first_name = "{{ $data->first_name }}"
                                        last_name = "{{ $data->last_name }}"
                                        middle_initial = "{{ $data->middle_initial }}"
                                        bday_month = "{{ $data->bday_month }}"
                                        bday_day = "{{ $data->bday_day }}"
                                        bday_year = "{{ $data->bday_year }}"
                                        age = "{{ $data->age }}"
                                        gender = "{{ $data->gender }}"
                                        year = "{{ $data->year }}"
                                        section = "{{ $data->section }}"><i class="material-icons" >edit</i></a>
                                    <a class="btn btn-floating btn-small red darken-5 tooltipped modal-trigger " data-position="bottom" data-tooltip="Delete" href = "{{ route('CollegesController.CoEddelete',$data->id) }}"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>

                            @endforeach
                            @foreach($shows as $show)  
                            <tr>
                                <td class="mr-5 ml-5">{{ $show->last_name }}, {{ $show->first_name }} {{ $show->middle_initial }}.</td>
                                <td class="mr-5 ml-5">{{ $show->bday_month }} {{ $show->bday_day }}, {{ $show->bday_year }}</td>
                                <td class="mr-5 ml-5">{{ $show->age }}</td>
                                <td class="mr-5 ml-5">{{ $show->gender }}</td>
                                <td class="mr-5 ml-5">{{ $show->address }}</td>
                                <td class="mr-5 ml-5">{{ $show->department }}</td>
                                <td class="mr-5 ml-5">{{ $show->year }}</td>
                                <td class="mr-5 ml-5">Section {{ $show->section }}</td>
                                <td class="mr-5 ml-5">
                                    <!-- {{--<a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="{{ route('CollegesController.CoEdshow',$data->id) }}"><i class="material-icons">open_in_new</i></a>--}} -->
                                    <!-- Modal Trigger -->
                                    <a class="btn btn-floating btn-small tooltipped light-blue darken-4 modal-trigger viewmodal"
                                        first_name = "{{ $show->first_name }}"
                                        last_name = "{{ $show->last_name }}"
                                        middle_initial = "{{ $show->middle_initial }}"
                                        bday_month = "{{ $show->bday_month }}"
                                        bday_day = "{{ $show->bday_day }}"
                                        bday_year = "{{ $show->bday_year }}"
                                        age = "{{ $show->age }}"
                                        gender = "{{ $show->gender }}"
                                        year = "{{ $show->year }}"
                                        section = "{{ $show->section }}"
                                        data-position="bottom" data-tooltip="View" href="#showmodal"><i class="material-icons">zoom_in</i></a>
                                    <a class="btn btn-floating btn-small tooltipped orange modal-trigger editmodal" data-position="bottom " data-tooltip="Edit"  href="#ceeditmodal" first_name = "{{ $show->first_name }}"
                                        last_name = "{{ $show->last_name }}"
                                        middle_initial = "{{ $show->middle_initial }}"
                                        bday_month = "{{ $show->bday_month }}"
                                        bday_day = "{{ $show->bday_day }}"
                                        bday_year = "{{ $show->bday_year }}"
                                        age = "{{ $show->age }}"
                                        gender = "{{ $show->gender }}"
                                        year = "{{ $show->year }}"
                                        section = "{{ $show->section }}"><i class="material-icons"
                                        >edit</i></a>
                                    <a class="btn btn-floating btn-small red darken-5 tooltipped modal-trigger" data-position="bottom" data-tooltip="Delete" href = "{{ route('CollegesController.CEdelete',$show->id) }}"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>

                            @endforeach
                            @foreach($outputs as $output)  
                            <tr>
                                <td class="mr-5 ml-5">{{ $output->last_name }}, {{ $output->first_name }} {{ $output->middle_initial }}.</td>
                                <td class="mr-5 ml-5">{{ $output->bday_month }} {{ $output->bday_day }}, {{ $output->bday_year }}</td>
                                <td class="mr-5 ml-5">{{ $output->age }}</td>
                                <td class="mr-5 ml-5">{{ $output->gender }}</td>
                                <td class="mr-5 ml-5">{{ $output->address }}</td>
                                <td class="mr-5 ml-5">{{ $output->department }}</td>
                                <td class="mr-5 ml-5">{{ $output->year }}</td>
                                <td class="mr-5 ml-5">Section {{ $output->section }}</td>
                                <td class="mr-5 ml-5">
                                    {{--<a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="{{ route('CollegesController.CoEdshow',$data->id) }}"><i class="material-icons">open_in_new</i></a>--}}
                                    <!-- Modal Trigger -->
                                    <a class="btn btn-floating btn-small tooltipped modal-trigger light-blue darken-4 viewmodal" data-position="bottom" data-tooltip="View" href="#showmodal" first_name = "{{ $output->first_name }}"
                                        last_name = "{{ $output->last_name }}"
                                        middle_initial = "{{ $output->middle_initial }}"
                                        bday_month = "{{ $output->bday_month }}"
                                        bday_day = "{{ $output->bday_day }}"
                                        bday_year = "{{ $output->bday_year }}"
                                        age = "{{ $output->age }}"
                                        gender = "{{ $output->gender }}"
                                        year = "{{ $output->year }}"
                                        section = "{{ $output->section }}"><i class="material-icons">zoom_in</i></a>
                                    <a class="btn btn-floating btn-small tooltipped orange modal-trigger editmodal" data-position="bottom " data-tooltip="Edit" href="#cciseditmodal" first_name = "{{ $show->first_name }}"
                                        last_name = "{{ $output->last_name }}"
                                        middle_initial = "{{ $output->middle_initial }}"
                                        bday_month = "{{ $output->bday_month }}"
                                        bday_day = "{{ $output->bday_day }}"
                                        bday_year = "{{ $output->bday_year }}"
                                        age = "{{ $output->age }}"
                                        gender = "{{ $output->gender }}"
                                        year = "{{ $output->year }}"
                                        section = "{{ $output->section }}"><i class="material-icons" >edit</i></a>
                                    <a class="btn btn-floating btn-small red darken-5 tooltipped modal-trigger" data-position="bottom" data-tooltip="Delete" href = "{{ route('CollegesController.CCISdelete',$output->id) }}"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    <div class="column">
                            {{ $shows->links() }}
                            {{ $datas->links() }}
                            {{ $outputs->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<input type="hidden" name="numberOfCCIS" value="{{ $totalCCIS }}">
<input type="hidden" name="numberOfCoEd" value="{{ $totalCoEd }}">
<input type="hidden" name="numberOfCE" value="{{ $totalCE }}">
@include('showmodal')
@include("ceeditmodal")
@include("cciseditmodal")
@include("coededitmodal")
<!-- Start of CoEddelete -->
<div class="modal modal-danger fade" id="COEDdelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal"  aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      
        <form action="{{ route('CollegesController.CoEddelete',$data->id) }}">
        <div class="modal-body">
            <p class="text-center">
              
              
              {{ csrf_field() }}
              
            
              Are you sure you want to delete this?

            </p>
        </div>
        <div class="modal-footer">
            <button   type="button" class="btn btn-success close" data-dismiss="modal" aria-label="Close">No, Cancel</button>
          <button    type="submit"  id="btndelete" class="btn btn-warning"  >Yes, Delete</button>
        </div>
        </form>
        
    </div>
  </div>
</div>
<!-- End of COED delete-->
<!-- Start of CEdelete -->
<div class="modal modal-danger fade" id="CEdelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal"  aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      
<!--          "{{ route('CollegesController.CoEddelete',$data->id) }}"
 -->         
        <div class="modal-body">
        <p class="text-center">
          
          <form action="">
          {{ csrf_field() }}
          
        
          Are you sure you want to delete this?

        </p>

            

        </div>
        <div class="modal-footer">
            <button  type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
          <button    type="submit"  id="btndelete" class="btn btn-warning"  >Yes, Delete</button>
        </div>
        </form>
        
    </div>
  </div>
</div>
<!-- End of CEdelete -->
<!--Start of CCISdelete  -->
<div class="modal modal-danger fade" id="CCISdelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal"  aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      
<!--          "{{ route('CollegesController.CoEddelete',$data->id) }}"
 -->         
        <div class="modal-body">
        <p class="text-center">
          
          <form action="">
          {{ csrf_field() }}
          Are you sure you want to delete this?

        </p>
            
        <div class="modal-footer">
            <button  type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
          <button    type="submit"  id="btndelete" class="btn btn-warning"  >Yes, Delete</button>
        </div>
        </form>
        
    </div>
  </div>
</div></div></div>
<!--End of CCISdelete  -->



<div id="modal1" class="modal scale-transition">
        <div class="modal-content"  style="overflow: hidden;" >
            <a class="btn btn-primary tooltipped left orange accent-3" data-tooltip="Back" href="{{ route('CollegesController.index') }}"> <i class="material-icons">arrow_back</i></a>
            <div class="form-group container">
                <div class="row">
                    <div class="">
                        <br>
                        <h5 class="center">Fill the student Information below</h5>
                    </div>
                </div>
            
                {{ Form::open(array('route' => 'CollegesController.addStudent', ))}}
                <div class="">
                    <div class="row form-group">
                        <div class="input-field form-group">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="fname" type="text" name="first_name"  required>
                                <label for="fname">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">perm_identity</i>
                                <input id="wobble" type="text" name="middle_initial"  required>
                                <label for="wobble">Middle Initial</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">perm_identity</i>
                                <input id="ayoko" type="text" name="last_name"  required>
                                <label for="ayoko">Last Name</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    
                    <br>
                    <br>
                     <div>
                        <div class="input-field row form-group">
                            <input type="hidden" id="date_sorter" name="date_sorter" value="">
                            {{-- {{ Form::date('birthday', null, array('class' => 'ml-4')) }} --}}
                            <div class="col s6">
                                <i class="material-icons prefix">perm_contact_calendar</i>
                                <select name="bday_month" id="bday">
                                    <option selected disabled>---</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                                <label>Birth Month</label>
                            </div>
                            <div class="col s2">
                                <select name="bday_day" id="" class="col s2">
                                    <option selected disabled>---</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <label>Birth Day</label>
                            </div>
                            <div class="col s4">
                                <select name="bday_year" id="">
                                    <option selected disabled>---</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                </select>
                                <label>Birth Year</label>
                            </div>
                                
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="input-field col s3">
                            <i class="material-icons prefix">perm_identity</i>
                            {{ Form::number('age', null, array('placeholder' => '---', 'class' => '', 'required')) }}
                            <label>Age</label>
                        </div>
                        <div class="input-field col s4">
                            <i class="material-icons prefix">wc</i>
                            <select class="ml-2" name="gender" id="">
                                <option selected disabled>---</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label>Gender</label>
                                {{-- {{ Form::text('gender', null, array('placeholder' => 'Male or Female', 'class' => 'form-control')) }} --}}
                        </div>
                    </div>
                   
      
                    <div class="row form-group">
                         <div class="input-field col s12">
                            <i class="material-icons prefix">home</i>
                             {{ Form::text('address', null, array('placeholder' => '---','class' => '', 'required')) }}
                             <label>Address</label>
                        </div>
                    </div> 
                    <hr>
                    <br>
                    <div class="row form-group input-field">
                        <div class="col s6">
                            <div class="form-group">
                                <input type="hidden" name="model" value="">
                                <i class="material-icons prefix">school</i>
                                <select name="college" id="college">
                                    <option selected disabled>--</option>
                                    <option value="Computer and Information Science">College of Computer and Information Science</option>
                                    <option value="Education">College of Education</option>
                                    <option value="Engineering">College of Engineering</option>
                                </select>
                                <label>College</label>
                            </div>
                        </div>
                        <div class="col s6">
                            <div class="form-group">
                                <div id="primary">
                                    <i class="material-icons prefix">business</i>
                                    <select name="" id="" disabled>
                                        <option selected>Select a College First</option>
                                    </select>
                                    <label>Department</label>
                                </div>
                                <div class="hiddendiv" id="CCIS">
                                    <i class="material-icons prefix">business</i>
                                    <select name="department">
                                        <option selected disabled>--</option>
                                        <option id="cs" value="Computer Science">Computer Science</option>
                                        <option id="it" value="Information Technology">Information Technology</option>
                                    </select>
                                    <label>Department</label>
                                </div>
                                <div class="hiddendiv" id="CoEd">
                                    <i class="material-icons prefix">business</i>
                                    <select name="department" id="CoEd">
                                        <option disabled selected>--</option>
                                        <option id="bte" value="Business Teacher Educationg">BTEd</option>
                                        <option id="lis" value="Library and Information Science">LInfoSci</option>
                                        <option id="ee" value="Elementary Education">ElemEd</option>
                                        <option id="seme" value="Secondary Education major in English">SecEd Major in English</option>
                                        <option id="semf" value="Secondary Education major in Filipino">SecEd Major in Filipino</option>
                                        <option id="semm" value="Secondary Education major in Mathematics">SecEd Major in Mathematics</option>
                                        <option id="semss" value="Secondary Education major in Social Studies">SecEd Major in Social Studies</option>
                                    </select>
                                    <label>Department</label>
                                </div>
                                <div class="hiddendiv" id="CE">
                                    <i class="material-icons prefix">business</i>
                                    <select class="d-none" name="department">
                                        <option disabled selected>--</option>
                                        <option id="ce" value="Civil Engineering">Civil Engineering</option>
                                        <option id="coe" value="Computer Engineering">Computer Engineering</option>
                                        <option id="electri" value="Electrical Engineering">Electrical Engineering</option>
                                        <option id="electro" value="Electronics Engineering">Electronics Engineering</option>
                                        <option id="ie" value="Industrial Engineering">Industrial Engineering</option>
                                        <option id="me" value="Mechanical Engineering">Mechanical Engineering</option>
                                    </select>
                                    <label>Department</label>
                                </div>
                                {{-- {{ Form::text('department', null, array('placeholder' => 'Department','class' => 'form-control')) }} --}}
                            </div>
                        </div>
                    </div>
                    
                    <br>
       
                    <div class="row input-field">
    
                        <div class="form-group col s6" id="ui">
                            <select name="year" disabled>
                                <option selected disabled>Select a Course First</option>
                            </select>
                            <label>Year</label>
                        </div>
    
                        <div class="form-group col s6 hiddendiv" id="yearOne">
                            <select name="year">
                                <option selected disabled>---</option>
                                <option value="4">4th Year</option>
                                <option value="3">3rd Year</option>
                                <option value="2">2nd Year</option>
                                <option value="1">1st Year</option>
                            </select>
                            <label>Year</label>
                        </div>
    
    
                        <div class="form-group col s6 hiddendiv" id="ceYear">
                            <select name="year">
                                <option selected disabled>---</option>
                                <option value="5">5th Year</option>
                                <option value="4">4th Year</option>
                                <option value="3">3rd Year</option>
                                <option value="2">2nd Year</option>
                                <option value="1">1st Year</option>
                            </select>
                            <label>Year</label>
                        </div>
    
    
    
    
                        <div class="form-group col s6">
                            <select name="section" id="">
                                <option selected disabled>---</option>
                                <option value="5">Section 5</option>
                                <option value="4">Section 4</option>
                                <option value="3">Section 3</option>
                                <option value="2">Section 2</option>
                                <option value="1">Section 1</option>
                            </select>
                            <label>Section</label>
                            {{-- {{ Form::number('section', null, array('placeholder' => 'Section','class' => 'form-control')) }} --}}
                        </div>
                    </div>
                    <br>
                    <div class="center">
                        <button type="submit" class="btn btn-large hoverable waves-effect waves-light orange accent-3 tooltipped" data-tooltip="Create Student"><i class="material-icons left">send</i>Submit</button>
                    </div>
                    <br>
                </div>
                {{ Form::close() }}
            
                <div class="container left">
                    <h6 class="left">Errors will be shown below:</h6>
                    @if(count($errors))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach( $errors->all() as $error )
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var elems = document.querySelectorAll('select');
                        var instances = M.FormSelect.init(elems, {
                            
                        });
                    });
            </script>
        </div>
    </div>

<div id="CEmodal" class="modal">
    <div class="modal-content"  style="overflow: hidden;" >
        <a class="btn btn-primary tooltipped left orange accent-3" data-tooltip="Back" href="{{ route('CollegesController.index') }}"> <i class="material-icons">arrow_back</i></a>
        <div class="form-group container">
            <div class="row">
                <div class="">
                    <br>
                    <h5 class="center">Student Information</h5>
                </div>
            </div>
        
            {{ Form::open(array('route' => 'CollegesController.addStudent', ))}}
            <div class="">
                <div class="row form-group">
                    <div class="input-field form-group">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input disabled id="fname" type="text" name="first_name">
                            {{-- <label for="fname">First Name</label> --}}
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="wobble" type="text" name="middle_initial"  required>
                            <label for="wobble">Middle Initial</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="ayoko" type="text" name="last_name"  required>
                            {{-- <label for="ayoko">Last Name</label> --}}
                        </div>
                    </div>
                </div>
                <hr>
                <br>
                    <div>
                    <div class="input-field row form-group">
                        <input type="hidden" id="date_sorter" name="date_sorter" value="">
                        {{-- {{ Form::date('birthday', null, array('class' => 'ml-4')) }} --}}
                        <div class="col s6">
                            <i class="material-icons prefix">perm_contact_calendar</i>
                            <select name="bday_month" id="bday">
                                <option selected disabled>---</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            <label>Birth Month</label>
                        </div>
                        <div class="col s2">
                            <select name="bday_day" id="" class="col s2">
                                <option selected disabled>---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <label>Birth Day</label>
                        </div>
                        <div class="col s4">
                            <select name="bday_year" id="">
                                <option selected disabled>---</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                            </select>
                            <label>Birth Year</label>
                        </div>
                            
                    </div>
                </div>
                <div class="row form-group">
                    <div class="input-field col s3">
                        <i class="material-icons prefix">perm_identity</i>
                        {{ Form::number('age', null, array('placeholder' => '---', 'class' => '', 'required')) }}
                        <label>Age</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">wc</i>
                        <select class="ml-2" name="gender" id="">
                            <option selected disabled>---</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label>Gender</label>
                            {{-- {{ Form::text('gender', null, array('placeholder' => 'Male or Female', 'class' => 'form-control')) }} --}}
                    </div>
                </div>
                
    
                <div class="row form-group">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">home</i>
                            {{ Form::text('address', null, array('placeholder' => '---','class' => '', 'required')) }}
                            <label>Address</label>
                    </div>
                </div> 
                <hr>
                <br>
                <div class="row form-group input-field">
                    <div class="col s6">
                        <div class="form-group">
                            <input type="hidden" name="model" value="">
                            <i class="material-icons prefix">school</i>
                            <select name="college" id="college">
                                <option selected disabled>--</option>
                                <option value="Computer and Information Science">College of Computer and Information Science</option>
                                <option value="Education">College of Education</option>
                                <option value="Engineering">College of Engineering</option>
                            </select>
                            <label>College</label>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="form-group">
                            <div id="primary">
                                <i class="material-icons prefix">business</i>
                                <select name="" id="" disabled>
                                    <option selected>Select a College First</option>
                                </select>
                                <label>Department</label>
                            </div>
                            <div class="hiddendiv" id="CCIS">
                                <i class="material-icons prefix">business</i>
                                <select name="department">
                                    <option selected disabled>--</option>
                                    <option id="cs" value="Computer Science">Computer Science</option>
                                    <option id="it" value="Information Technology">Information Technology</option>
                                </select>
                                <label>Department</label>
                            </div>
                            <div class="hiddendiv" id="CoEd">
                                <i class="material-icons prefix">business</i>
                                <select name="department" id="CoEd">
                                    <option disabled selected>--</option>
                                    <option id="bte" value="Business Teacher Educationg">BTEd</option>
                                    <option id="lis" value="Library and Information Science">LInfoSci</option>
                                    <option id="ee" value="Elementary Education">ElemEd</option>
                                    <option id="seme" value="Secondary Education major in English">SecEd Major in English</option>
                                    <option id="semf" value="Secondary Education major in Filipino">SecEd Major in Filipino</option>
                                    <option id="semm" value="Secondary Education major in Mathematics">SecEd Major in Mathematics</option>
                                    <option id="semss" value="Secondary Education major in Social Studies">SecEd Major in Social Studies</option>
                                </select>
                                <label>Department</label>
                            </div>
                            <div class="hiddendiv" id="CE">
                                <i class="material-icons prefix">business</i>
                                <select class="d-none" name="department">
                                    <option disabled selected>--</option>
                                    <option id="ce" value="Civil Engineering">Civil Engineering</option>
                                    <option id="coe" value="Computer Engineering">Computer Engineering</option>
                                    <option id="electri" value="Electrical Engineering">Electrical Engineering</option>
                                    <option id="electro" value="Electronics Engineering">Electronics Engineering</option>
                                    <option id="ie" value="Industrial Engineering">Industrial Engineering</option>
                                    <option id="me" value="Mechanical Engineering">Mechanical Engineering</option>
                                </select>
                                <label>Department</label>
                            </div>
                            {{-- {{ Form::text('department', null, array('placeholder' => 'Department','class' => 'form-control')) }} --}}
                        </div>
                    </div>
                </div>
                
                <br>
    
                <div class="row input-field">

                    <div class="form-group col s6" id="ui">
                        <select name="year" disabled>
                            <option selected disabled>Select a Course First</option>
                        </select>
                        <label>Year</label>
                    </div>

                    <div class="form-group col s6 hiddendiv" id="yearOne">
                        <select name="year">
                            <option selected disabled>---</option>
                            <option value="4">4th Year</option>
                            <option value="3">3rd Year</option>
                            <option value="2">2nd Year</option>
                            <option value="1">1st Year</option>
                        </select>
                        <label>Year</label>
                    </div>


                    <div class="form-group col s6 hiddendiv" id="ceYear">
                        <select name="year">
                            <option selected disabled>---</option>
                            <option value="5">5th Year</option>
                            <option value="4">4th Year</option>
                            <option value="3">3rd Year</option>
                            <option value="2">2nd Year</option>
                            <option value="1">1st Year</option>
                        </select>
                        <label>Year</label>
                    </div>




                    <div class="form-group col s6">
                        <select name="section" id="">
                            <option selected disabled>---</option>
                            <option value="5">Section 5</option>
                            <option value="4">Section 4</option>
                            <option value="3">Section 3</option>
                            <option value="2">Section 2</option>
                            <option value="1">Section 1</option>
                        </select>
                        <label>Section</label>
                        {{-- {{ Form::number('section', null, array('placeholder' => 'Section','class' => 'form-control')) }} --}}
                    </div>
                </div>
                <br>
                <div class="center">
                    <button type="submit" class="btn btn-large hoverable waves-effect waves-light orange accent-3 tooltipped" data-tooltip="Create Student"><i class="material-icons left">send</i>Submit</button>
                </div>
                <br>
            </div>
            {{ Form::close() }}
        
            <div class="container left">
                <h6 class="left">Errors will be shown below:</h6>
                @if(count($errors))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach( $errors->all() as $error )
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var elems = document.querySelectorAll('select');
                    var instances = M.FormSelect.init(elems, {
                        
                    });
                });
        </script>
    </div>
</div>


<div id="CCISmodal" class="modal">
    <div class="modal-content"  style="overflow: hidden;" >
        <a class="btn btn-primary tooltipped left orange accent-3" data-tooltip="Back" href="{{ route('CollegesController.index') }}"> <i class="material-icons">arrow_back</i></a>
        <div class="form-group container">
            <div class="row">
                <div class="">
                    <br>
                    <h5 class="center">Student Information</h5>
                </div>
            </div>
        
            {{ Form::open(array('route' => 'CollegesController.addStudent', ))}}
            <div class="">
                <div class="row form-group">
                    <div class="input-field form-group">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input disabled id="fname" type="text" name="first_name">
                            {{-- <label for="fname">First Name</label> --}}
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="wobble" type="text" name="middle_initial"  required>
                            <label for="wobble">Middle Initial</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="ayoko" type="text" name="last_name"  required>
                            {{-- <label for="ayoko">Last Name</label> --}}
                        </div>
                    </div>
                </div>
                <hr>
                <br>
                    <div>
                    <div class="input-field row form-group">
                        <input type="hidden" id="date_sorter" name="date_sorter" value="">
                        {{-- {{ Form::date('birthday', null, array('class' => 'ml-4')) }} --}}
                        <div class="col s6">
                            <i class="material-icons prefix">perm_contact_calendar</i>
                            <select name="bday_month" id="bday">
                                <option selected disabled>---</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            <label>Birth Month</label>
                        </div>
                        <div class="col s2">
                            <select name="bday_day" id="" class="col s2">
                                <option selected disabled>---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <label>Birth Day</label>
                        </div>
                        <div class="col s4">
                            <select name="bday_year" id="">
                                <option selected disabled>---</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                            </select>
                            <label>Birth Year</label>
                        </div>
                            
                    </div>
                </div>
                <div class="row form-group">
                    <div class="input-field col s3">
                        <i class="material-icons prefix">perm_identity</i>
                        {{ Form::number('age', null, array('placeholder' => '---', 'class' => '', 'required')) }}
                        <label>Age</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">wc</i>
                        <select class="ml-2" name="gender" id="">
                            <option selected disabled>---</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label>Gender</label>
                            {{-- {{ Form::text('gender', null, array('placeholder' => 'Male or Female', 'class' => 'form-control')) }} --}}
                    </div>
                </div>
                
    
                <div class="row form-group">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">home</i>
                            {{ Form::text('address', null, array('placeholder' => '---','class' => '', 'required')) }}
                            <label>Address</label>
                    </div>
                </div> 
                <hr>
                <br>
                <div class="row form-group input-field">
                    <div class="col s6">
                        <div class="form-group">
                            <input type="hidden" name="model" value="">
                            <i class="material-icons prefix">school</i>
                            <select name="college" id="college">
                                <option selected disabled>--</option>
                                <option value="Computer and Information Science">College of Computer and Information Science</option>
                                <option value="Education">College of Education</option>
                                <option value="Engineering">College of Engineering</option>
                            </select>
                            <label>College</label>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="form-group">
                            <div id="primary">
                                <i class="material-icons prefix">business</i>
                                <select name="" id="" disabled>
                                    <option selected>Select a College First</option>
                                </select>
                                <label>Department</label>
                            </div>
                            <div class="hiddendiv" id="CCIS">
                                <i class="material-icons prefix">business</i>
                                <select name="department">
                                    <option selected disabled>--</option>
                                    <option id="cs" value="Computer Science">Computer Science</option>
                                    <option id="it" value="Information Technology">Information Technology</option>
                                </select>
                                <label>Department</label>
                            </div>
                            <div class="hiddendiv" id="CoEd">
                                <i class="material-icons prefix">business</i>
                                <select name="department" id="CoEd">
                                    <option disabled selected>--</option>
                                    <option id="bte" value="Business Teacher Educationg">BTEd</option>
                                    <option id="lis" value="Library and Information Science">LInfoSci</option>
                                    <option id="ee" value="Elementary Education">ElemEd</option>
                                    <option id="seme" value="Secondary Education major in English">SecEd Major in English</option>
                                    <option id="semf" value="Secondary Education major in Filipino">SecEd Major in Filipino</option>
                                    <option id="semm" value="Secondary Education major in Mathematics">SecEd Major in Mathematics</option>
                                    <option id="semss" value="Secondary Education major in Social Studies">SecEd Major in Social Studies</option>
                                </select>
                                <label>Department</label>
                            </div>
                            <div class="hiddendiv" id="CE">
                                <i class="material-icons prefix">business</i>
                                <select class="d-none" name="department">
                                    <option disabled selected>--</option>
                                    <option id="ce" value="Civil Engineering">Civil Engineering</option>
                                    <option id="coe" value="Computer Engineering">Computer Engineering</option>
                                    <option id="electri" value="Electrical Engineering">Electrical Engineering</option>
                                    <option id="electro" value="Electronics Engineering">Electronics Engineering</option>
                                    <option id="ie" value="Industrial Engineering">Industrial Engineering</option>
                                    <option id="me" value="Mechanical Engineering">Mechanical Engineering</option>
                                </select>
                                <label>Department</label>
                            </div>
                            {{-- {{ Form::text('department', null, array('placeholder' => 'Department','class' => 'form-control')) }} --}}
                        </div>
                    </div>
                </div>
                
                <br>
    
                <div class="row input-field">

                    <div class="form-group col s6" id="ui">
                        <select name="year" disabled>
                            <option selected disabled>Select a Course First</option>
                        </select>
                        <label>Year</label>
                    </div>

                    <div class="form-group col s6 hiddendiv" id="yearOne">
                        <select name="year">
                            <option selected disabled>---</option>
                            <option value="4">4th Year</option>
                            <option value="3">3rd Year</option>
                            <option value="2">2nd Year</option>
                            <option value="1">1st Year</option>
                        </select>
                        <label>Year</label>
                    </div>


                    <div class="form-group col s6 hiddendiv" id="ceYear">
                        <select name="year">
                            <option selected disabled>---</option>
                            <option value="5">5th Year</option>
                            <option value="4">4th Year</option>
                            <option value="3">3rd Year</option>
                            <option value="2">2nd Year</option>
                            <option value="1">1st Year</option>
                        </select>
                        <label>Year</label>
                    </div>




                    <div class="form-group col s6">
                        <select name="section" id="">
                            <option selected disabled>---</option>
                            <option value="5">Section 5</option>
                            <option value="4">Section 4</option>
                            <option value="3">Section 3</option>
                            <option value="2">Section 2</option>
                            <option value="1">Section 1</option>
                        </select>
                        <label>Section</label>
                        {{-- {{ Form::number('section', null, array('placeholder' => 'Section','class' => 'form-control')) }} --}}
                    </div>
                </div>
                <br>
                <div class="center">
                    <button type="submit" class="btn btn-large hoverable waves-effect waves-light orange accent-3 tooltipped" data-tooltip="Create Student"><i class="material-icons left">send</i>Submit</button>
                </div>
                <br>
            </div>
            {{ Form::close() }}
        
            <div class="container left">
                <h6 class="left">Errors will be shown below:</h6>
                @if(count($errors))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach( $errors->all() as $error )
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var elems = document.querySelectorAll('select');
                    var instances = M.FormSelect.init(elems, {
                        
                    });
                });
        </script>
    </div>
</div>

<div id="CoEdmodal" class="modal">
    <div class="modal-content"  style="overflow: hidden;" >
        <a class="btn btn-primary tooltipped left orange accent-3" data-tooltip="Back" href="{{ route('CollegesController.index') }}"> <i class="material-icons">arrow_back</i></a>
        <div class="form-group container">
            <div class="row">
                <div class="">
                    <br>
                    <h5 class="center">Student Information</h5>
                </div>
            </div>
        
            {{ Form::open(array('route' => 'CollegesController.addStudent', ))}}
            <div class="">
                <div class="row form-group">
                    <div class="input-field form-group">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input disabled id="fname" type="text" name="first_name">
                            {{-- <label for="fname">First Name</label> --}}
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="wobble" type="text" name="middle_initial"  required>
                            <label for="wobble">Middle Initial</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="ayoko" type="text" name="last_name"  required>
                            {{-- <label for="ayoko">Last Name</label> --}}
                        </div>
                    </div>
                </div>
                <hr>
                <br>
                    <div>
                    <div class="input-field row form-group">
                        <input type="hidden" id="date_sorter" name="date_sorter" value="">
                        {{-- {{ Form::date('birthday', null, array('class' => 'ml-4')) }} --}}
                        <div class="col s6">
                            <i class="material-icons prefix">perm_contact_calendar</i>
                            <select name="bday_month" id="bday">
                                <option selected disabled>---</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            <label>Birth Month</label>
                        </div>
                        <div class="col s2">
                            <select name="bday_day" id="" class="col s2">
                                <option selected disabled>---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <label>Birth Day</label>
                        </div>
                        <div class="col s4">
                            <select name="bday_year" id="">
                                <option selected disabled>---</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                            </select>
                            <label>Birth Year</label>
                        </div>
                            
                    </div>
                </div>
                <div class="row form-group">
                    <div class="input-field col s3">
                        <i class="material-icons prefix">perm_identity</i>
                        {{ Form::number('age', null, array('placeholder' => '---', 'class' => '', 'required')) }}
                        <label>Age</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">wc</i>
                        <select class="ml-2" name="gender" id="">
                            <option selected disabled>---</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label>Gender</label>
                            {{-- {{ Form::text('gender', null, array('placeholder' => 'Male or Female', 'class' => 'form-control')) }} --}}
                    </div>
                </div>
                
    
                <div class="row form-group">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">home</i>
                            {{ Form::text('address', null, array('placeholder' => '---','class' => '', 'required')) }}
                            <label>Address</label>
                    </div>
                </div> 
                <hr>
                <br>
                <div class="row form-group input-field">
                    <div class="col s6">
                        <div class="form-group">
                            <input type="hidden" name="model" value="">
                            <i class="material-icons prefix">school</i>
                            <select name="college" id="college">
                                <option selected disabled>--</option>
                                <option value="Computer and Information Science">College of Computer and Information Science</option>
                                <option value="Education">College of Education</option>
                                <option value="Engineering">College of Engineering</option>
                            </select>
                            <label>College</label>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="form-group">
                            <div id="primary">
                                <i class="material-icons prefix">business</i>
                                <select name="" id="" disabled>
                                    <option selected>Select a College First</option>
                                </select>
                                <label>Department</label>
                            </div>
                            <div class="hiddendiv" id="CCIS">
                                <i class="material-icons prefix">business</i>
                                <select name="department">
                                    <option selected disabled>--</option>
                                    <option id="cs" value="Computer Science">Computer Science</option>
                                    <option id="it" value="Information Technology">Information Technology</option>
                                </select>
                                <label>Department</label>
                            </div>
                            <div class="hiddendiv" id="CoEd">
                                <i class="material-icons prefix">business</i>
                                <select name="department" id="CoEd">
                                    <option disabled selected>--</option>
                                    <option id="bte" value="Business Teacher Educationg">BTEd</option>
                                    <option id="lis" value="Library and Information Science">LInfoSci</option>
                                    <option id="ee" value="Elementary Education">ElemEd</option>
                                    <option id="seme" value="Secondary Education major in English">SecEd Major in English</option>
                                    <option id="semf" value="Secondary Education major in Filipino">SecEd Major in Filipino</option>
                                    <option id="semm" value="Secondary Education major in Mathematics">SecEd Major in Mathematics</option>
                                    <option id="semss" value="Secondary Education major in Social Studies">SecEd Major in Social Studies</option>
                                </select>
                                <label>Department</label>
                            </div>
                            <div class="hiddendiv" id="CE">
                                <i class="material-icons prefix">business</i>
                                <select class="d-none" name="department">
                                    <option disabled selected>--</option>
                                    <option id="ce" value="Civil Engineering">Civil Engineering</option>
                                    <option id="coe" value="Computer Engineering">Computer Engineering</option>
                                    <option id="electri" value="Electrical Engineering">Electrical Engineering</option>
                                    <option id="electro" value="Electronics Engineering">Electronics Engineering</option>
                                    <option id="ie" value="Industrial Engineering">Industrial Engineering</option>
                                    <option id="me" value="Mechanical Engineering">Mechanical Engineering</option>
                                </select>
                                <label>Department</label>
                            </div>
                            {{-- {{ Form::text('department', null, array('placeholder' => 'Department','class' => 'form-control')) }} --}}
                        </div>
                    </div>
                </div>
                
                <br>
    
                <div class="row input-field">

                    <div class="form-group col s6" id="ui">
                        <select name="year" disabled>
                            <option selected disabled>Select a Course First</option>
                        </select>
                        <label>Year</label>
                    </div>

                    <div class="form-group col s6 hiddendiv" id="yearOne">
                        <select name="year">
                            <option selected disabled>---</option>
                            <option value="4">4th Year</option>
                            <option value="3">3rd Year</option>
                            <option value="2">2nd Year</option>
                            <option value="1">1st Year</option>
                        </select>
                        <label>Year</label>
                    </div>


                    <div class="form-group col s6 hiddendiv" id="ceYear">
                        <select name="year">
                            <option selected disabled>---</option>
                            <option value="5">5th Year</option>
                            <option value="4">4th Year</option>
                            <option value="3">3rd Year</option>
                            <option value="2">2nd Year</option>
                            <option value="1">1st Year</option>
                        </select>
                        <label>Year</label>
                    </div>




                    <div class="form-group col s6">
                        <select name="section" id="">
                            <option selected disabled>---</option>
                            <option value="5">Section 5</option>
                            <option value="4">Section 4</option>
                            <option value="3">Section 3</option>
                            <option value="2">Section 2</option>
                            <option value="1">Section 1</option>
                        </select>
                        <label>Section</label>
                        {{-- {{ Form::number('section', null, array('placeholder' => 'Section','class' => 'form-control')) }} --}}
                    </div>
                </div>
                <br>
                <div class="center">
                    <button type="submit" class="btn btn-large hoverable waves-effect waves-light orange accent-3 tooltipped" data-tooltip="Create Student"><i class="material-icons left">send</i>Submit</button>
                </div>
                <br>
            </div>
            {{ Form::close() }}
        
            <div class="container left">
                <h6 class="left">Errors will be shown below:</h6>
                @if(count($errors))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach( $errors->all() as $error )
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var elems = document.querySelectorAll('select');
                    var instances = M.FormSelect.init(elems, {
                        
                    });
                });
        </script>
    </div>
</div>



      
<!-- END OF MAIN CONTAINER -->


@endsection


@section('pageJs')
<script>
         document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      toolbarEnabled: true
    });
  });  
    </script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, {
        });
    })
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, {

        });
    });
</script>
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
<script>
    function loading(){
        document.getElementById("CCISimport").style.visibility='hidden'
        document.getElementById("CoEdimport").style.visibility='hidden'
        document.getElementById("CEimport").style.visibility='hidden'
        document.getElementById("lod").style.visibility='visible';
    }
</script>
<script>
    var totalCCIS = $("input[name='numberOfCCIS']").val();
    var totalCoEd = $("input[name='numberOfCoEd']").val();
    var totalCE = $("input[name='numberOfCE']").val();
    // console.log(totalCCIS);
    var canvas = document.getElementById("barChart");
    var ctx = canvas.getContext('2d');
    // We are only changing the chart type, so let's make that a global variable along with the chart object:
    var chartType = 'bar';
    var forShow = +totalCCIS + +totalCoEd + +totalCE;
    var showOne = (+totalCE / forShow) * 100;
    var showTwo = (+totalCoEd / forShow) * 100;
    var showThree = (+totalCCIS / forShow) * 100;
    document.getElementById("cardOne").innerHTML = forShow;
    document.getElementById("percentOne").innerHTML = showOne.toFixed(2) + '%';
    document.getElementById("percentTwo").innerHTML = showTwo.toFixed(2) + '%';
    document.getElementById("percentThree").innerHTML = showThree.toFixed(2) + '%';
    var myBarChart;

    // Global Options:
    Chart.defaults.global.defaultFontColor = 'black';
    Chart.defaults.global.defaultFontSize = 14;
    Chart.defaults.global.defaultFontFamily = "Segoe UI";

    var data = {
        labels: ["CE", "COED", "CCIS"],
        datasets: [{
            label: ' Number of students in this College',
            data: [totalCE, totalCoEd, totalCCIS],
            backgroundColor: [
                '#090934',
                '#ffc107',
                '#4527a0',
                '#ffff00',
                '#1b5e20',
                '#ff9800'
            ],
            borderColor: [
                '#090934',
                '#ffc107',
                '#4527a0',
                '#ffff00',
                '#1b5e20',
                '#ff9800'
            ],
            borderWidth: 1
        }]
    };

// Notice the scaleLabel at the same level as Ticks
    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        title: {
            fontSize: 18,
            display: true,
            text: 'PUP Analytics',
            position: 'bottom'
        },
        animation: {
            duration: 1000,
            easing: 'easeInQuad'
        }
    };


    // We add an init function down here after the chart options are declared.

    init();

    function init() {
    // Chart declaration:
        myBarChart = new Chart(ctx, {
            type: chartType,
            data: data,
            options: options
        });
    }

    function toggleChart(chval) {
    //destroy chart:
    var newt = chval;
    myBarChart.destroy();
    //change chart type: 
    this.chartType = newt;
    //restart chart:
    
    init();
    }
</script>
<!-- <script>
    $(document).ready( function () {
         $('#thetable').DataTable({
              'paging'      : true,
              'lengthChange': true,
              'searching'   : true,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : true
    })
    } );
</script> -->
<script>
    $(document).ready(function(){

        // $("#college option:selected").attr('disabled','disabled')
        //                 .siblings().removeAttr('disabled');
        $("#collegeFilter").on('change', function(){
            window.location.href = $('option:selected', this).attr('url')
          });
        
        $("#college").on('change', function(){
            var college = $(this).val();
            // console.log(college);
            // console.log($(this));
            switch (college) {
                
                case 'Computer and Information Science' :
                    $("input[name='model'").val("CollegeOfComputerAndInformationSciences");
                    $("#primary").addClass('hiddendiv', true);
                    $("#CCIS").removeClass('hiddendiv', true);
                    $("#CoEd").addClass('hiddendiv', true);
                    $("#CE").addClass('hiddendiv', true);
                    $("#yearOne").removeClass('hiddendiv', true);
                    $("#ceYear").addClass('hiddendiv', true);
                    $("#ui").addClass('hiddendiv', true);
                    break;
                
                case 'Education':
                    $("input[name='model'").val("CollegeOfEducations");
                    $("#primary").addClass('hiddendiv', true);
                    $("#CoEd").removeClass('hiddendiv', true);
                    $("#CE").addClass('hiddendiv', true);
                    $("#CCIS").addClass('hiddendiv', true);
                    $("#yearOne").removeClass('hiddendiv', true);
                    $("#ceYear").addClass('hiddendiv', true);
                    $("#ui").addClass('hiddendiv', true);
                    break;

                case 'Engineering':
                    $("input[name='model'").val("CollegeOfEngineerings");
                    $("#primary").addClass('hiddendiv', true);
                    $("#CoEd").addClass('hiddendiv', true);
                    $("#CCIS").addClass('hiddendiv', true);
                    $("#CE").removeClass('hiddendiv', true);
                    $("#yearOne").addClass('hiddendiv', true);
                    $("#ceYear").removeClass('hiddendiv', true);
                    $("#ui").addClass('hiddendiv', true);
                    break;
                default :
                break;
            }
        });

        $('#bday').on('change', function(){
            var dropdown = $("select[name='bday_month']")[1]['selectedIndex'];
            // var dropdown = document.getElementById('bday');
            // console.log(dropdown);
            $("input:hidden#date_sorter").val(dropdown);
        })
      
        $(".cciseditmodal").on('click', function(){
            // $('option:selected', this).attr('url')
            // console.log($(this).attr('firstname'));
            
            // var address = $(this).parent('td').parent('tr').find('td:eq(4)').text();
            // var department = $(this).parent('td').parent('tr').find('td:eq(5)').text();
            // $("input[name='first_name").val($(this).attr('first_name'));
            // $("input[name='last_name").val($(this).attr('last_name'));
            // $("input[name='middle_initial").val($(this).attr('middle_initial'));
            // $("input[name='bday_month").val($(this).attr('bday_month'));
            // $("input[name='bday_day").val($(this).attr('bday_day'));
            // $("input[name='bday_year").val($(this).attr('bday_year'));
            // $("input[name='age").val($(this).attr('age'));
            // $("input[name='gender").val($(this).attr('gender'));
            // $("input[name='address").val(address);
            // $("input[name='department").val(department);
            // $("input[name='year").val($(this).attr('year'));
            // $("input[name='section").val($(this).attr('section'));



        });
        $('#exitmodal').on('click', function(){
              
            $('.modal').modal('hide');
        
         });
        
        

        


        $('#import').on('change', function(){
            var collegeImport = $("select[name='import']").val();
            // console.log(collegeImport);

            switch (collegeImport) {
                case 'CCIS' :
                    console.log('ccis');
                    $("#CCISimport").removeClass('hiddendiv', true);
                    $("#CoEdimport").addClass('hiddendiv', true);
                    $("#CEimport").addClass('hiddendiv', true);
                   
                    break;
                
                case 'CoEd':
                console.log('coed');
                    $("#CoEdimport").removeClass('hiddendiv', true);
                    $("#CEimport").addClass('hiddendiv', true);
                    $("#CCISimport").addClass('hiddendiv', true);
                    
                    break;

                case 'CE':
                console.log("ce");
                    $("#CoEdimport").addClass('hiddendiv', true);
                    $("#CCISimport").addClass('hiddendiv', true);
                    $("#CEimport").removeClass('hiddendiv', true);
                    
                    break;
                default :
                break;
            }
        })
    });
</script>
<script>
    jQuery(function(){
        jQuery('#rivera').click();
    });
</script>
<!--adminlte js  -->
<!-- jQuery 3 -->
<script src="{{ asset('adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!--adminlte js  -->
@endsection