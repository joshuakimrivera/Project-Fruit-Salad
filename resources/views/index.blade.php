@extends('layouts.default')




@section('content')

<!--NAVIGATIONAL STRUCTURES -->
<!-- NAV BAR HEADER -->
<nav>
    <div class="navbar-fixed ">
        <nav>
          <div class="nav-wrapper red darken-4">
              <button class="btn-flat sidenav-trigger" data-target="slide-out"><i class="material-icons white-text">menu</i></button>
                <a href="#!" class="brand-logo white-text"><i class="material-icons" title="PupStats">insert_chart</i> PupStats</a>
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

<div style="height: 30px;"></div>

<!--MAIN DASHBOARD-->
<div>
    <div class="row">
        <div class="col s4">
            <div class="card">
                <!--CARD DASHBOARD-->
                <div class="card-content row">
                        <div class="col s12">
                            <span class="card-title"><i class="material-icons">filter_list</i>&nbsp Filter Selection TAB</span>

                            <!--COLLEGES-->
                            <div class="input-field col s11">
                                <select>
                                    <option value="ALL" selected>All Colleges</option>
                                    <option value="CCIS">College of Computer and Information Sciences</option>
                                    <option value="CoEd">College of Education</option>
                                    <option value="CE">College of Engineering</option>
                                </select>
                                <label>College</label>
                            </div>

                            <!--DEPARTMENTS-->
                            <div class="input-field col s11">
                                <select>
                                    <option value="ALL" selected>All Departments</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Business Teacher Education">Business Teacher Education</option>
                                    <option value="Library and Information Science">Library and Information Science</option>
                                    <option value="Elementary Education">Elementary Education</option>
                                    <option value="Secondary Education major in English">Secondary Education Major in English</option>
                                    <option value="Secondary Education major in Filipino">Secondary Education Major in Filipino</option>
                                    <option value="Secondary Education major in Mathematics">Secondary Education Major in Mathematics</option>
                                    <option value="Secondary Education major in Social Studies">Secondary Education Major in Social Studies</option>
                                    <div class="hide">
                                        <option value="Computer Engineering">Computer Engineering</option>
                                        <option value="Civil Engineering">Civil Engineering</option>
                                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                                        <option value="Electrical Engineering">Electrical Engineering</option>
                                        <option value="Electronics Engineering">Electronics Engineering</option>
                                        <option value="Industrial Engineering">Industrial Engineering</option>
                                        <option value="Architecture">Architecture</option>
                                    </div>
                                </select>
                                <label>Department</label>
                            </div>

                            <div class="input-field col s5">
                                    <select>
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
                                    <select>
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
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Age</label>
                            </div>

                            <div class="input-field col s5">
                                <select>
                                    <option value="" selected>All Genders</option>
                                    <option value="1">Female</option>
                                    <option value="2">Male</option>
                                </select>
                                <label>Gender</label>
                            </div>

                            <div class="input-field col s3">
                                <select>
                                    <option selected disabled>Year</option>
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
                                <select>
                                    <option selected disabled>Month</option>
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
                                <select>
                                    <option selected disabled>Day</option>
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

                            <a href="{{ route('CollegesController.CoEdadd') }}" class="btn-floating btn-medium waves-effect waves-light red"><i class="material-icons">add</i></a>
                            <form action="{{ route('CEimport') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="file" name="file" class="">
                                <input type="submit" value="Submit Excel" class="btn btn-primary btn-sm">
                            </form>

                            <div class="col s6"  ><br>
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
                                </div>









                        </div>
                        
                        
                    

                        

                </div>

                
                    
            </div>
        </div>
        <div class="col s8">
                <div class="card">
                        <div class="card-content row">
                                <div class="col s7">&nbsp</div>
                            <div class="input-field col s5">
                                <select id="mySelect" onchange="toggleChart();">
                                    <option value="bar" selected>Default: Bar</option>
                                    <option value="line">Line</option>
                                    <option value="radar">Radar</option>
                                    <option value="doughnut">Doughnut</option>
                                    <option value="pie">Pie</option>
                                    <option value="polarArea">Polar Area</option>
                                </select>
                                <label>Chart Type</label>
                            </div>
                            <canvas id="barChart" height="150%"></canvas>
                        </div>
                </div>
        </div>
        <div class="col s12">
            <div class="card">
                <div class="card-content row">
                    <!--NAME TABLE-->
                        <table class="responsive-table">
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
                                    {{--<a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="{{ route('CollegesController.CoEdshow',$data->id) }}"><i class="material-icons">open_in_new</i></a>--}}
                                    <!-- Modal Trigger -->
                                    <a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="#modal1"><i class="material-icons">open_in_new</i></a>
                                    <a class="btn btn-floating btn-small tooltipped" data-position="bottom" data-tooltip="Edit" href="{{ route('CollegesController.CoEdedit',$data->id) }}"><i class="material-icons">edit</i></a>
                                    <a class="btn btn-floating btn-small red tooltipped" data-position="bottom" data-tooltip="Delete" href = "{{ route('CollegesController.CoEddelete',$data->id) }}"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>

</div>
        

































































<!-- MAIN CONTAINER --> 
<div>  
        <!--SPACER -->
        <div style="height: 50px;"></div>
    <div>


<div style="height: 700px;"></div>
    {{-- College of Engineering --}}
    <!-- CARD CONTAINER STRUCTURE FOR COLLEGE OF ENGINEERING -->
        <div class="row">
            <div class="col s12">
                <div class="card  z-depth-4 blue-grey darken-4 white-text">
                    <div class="card-image">
                        <div class="row">
                            <div class="col s6 flow-text center"><h4>College of Engineering</h4></div>
                            <div class="col s6 center"><span><h4>Statistics</h4></span></div>
                            <div class="col s12"><hr></div>
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
@endsection


@section('pageJs')
    
    <script>
        var canvas = document.getElementById("barChart");
var ctx = canvas.getContext('2d');
// We are only changing the chart type, so let's make that a global variable along with the chart object:
var chartType = document.getElementById("mySelect").value;;
var myBarChart;

// Global Options:
Chart.defaults.global.defaultFontColor = 'black';
Chart.defaults.global.defaultFontSize = 16;

var data = {
  labels: ["CE", "COED", "CCIS"],
                datasets: [{
                    label: ' Number of students in this College',
                    data: [12, 19, 20],
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
    text: 'Students from all Colleges in PUP',
    position: 'bottom'
  },
  animation: {
          duration: 2000,
            easing: 'easeInOutBounce'
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

function toggleChart() {
  //destroy chart:
  myBarChart.destroy();
  //change chart type: 
  this.chartType = document.getElementById("mySelect").value;
  //restart chart:
  init();
}
    </script>
@endsection