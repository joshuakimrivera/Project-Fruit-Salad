@extends('layouts.default')

@section('pageCss')
    <style>
        
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Fill the student Information below</h2>
            </div>
            <div class="pull-right mr-5">
                <a class="btn btn-primary" href="{{ route('CollegesController.index') }}"> Back</a>
            </div>
        </div>
    </div>

    {{ Form::open(array('route' => 'CollegesController.CCISstore'))}}
    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="mr-4">Name:</strong>
                <input type="text" name="last_name" placeholder="Last Name">
                <input type="text" name="first_name" placeholder="First Name">
                <input type="text" name="middle_initial" placeholder="Middle Inital">
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
            <div class="input-field col s12">
                <strong>Birthdate:&nbsp;</strong>
                <input type="hidden" id="date_sorter" name="date_sorter" value="">
                {{-- {{ Form::date('bday_mo', null, array('class' => 'ml-4')) }} --}}
                <select name="bday_month" id="bday">
                    <option selected disabled>Month</option>
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
                <select name="bday_day" id="">
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
                <select name="bday_year" id="">
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
            </div>
        </div>
        

        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong class="mr-4">Age: &nbsp;&nbsp;</strong>
                 {{ Form::number('age', null, array('class' => 'ml-4')) }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong class="mr-4">Gender:</strong>
                <select class="ml-2" name="gender" id="">
                    <option selected disabled>Select your gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                 {{-- {{ Form::text('gender', null, array('placeholder' => 'Male or Female', 'class' => 'form-control')) }} --}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong class="mr-4">Address:</strong>&nbsp;
                 {{ Form::text('address', null, array('placeholder' => 'Address','class' => '')) }}
            </div>
        </div> 

        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong class="mr-4">College:</strong>&nbsp;&nbsp;
                <input type="hidden" name="college" value="Computer and Information Sciences" >
                <input type="text" value="Computer and Information Sciences" disabled class="" size="32px">
                 {{-- {{ Form::text('college', null, array('placeholder' => 'College of', 'class' => 'form-control')) }} --}}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                <select name="department" id="">
                    <option selected disabled> Select your Department</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Information Technology">Information Technology</option>
                </select>
                {{-- {{ Form::text('department', null, array('placeholder' => 'Department','class' => 'form-control')) }} --}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="mr-5">Year:</strong>&nbsp;&nbsp;
                <select name="year">
                    <option selected disabled>Select your Year&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</option>
                    <option value="4">4th Year</option>
                    <option value="3">3rd Year</option>
                    <option value="2">2nd Year</option>
                    <option value="1">1st Year</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="mr-4">Section:</strong>&nbsp;&nbsp;
                <select name="section" id="">
                    <option selected disabled>Select your Section &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                    <option value="1">Section 1</option>
                    <option value="2">Section 2</option>
                    <option value="3">Section 3</option>
                    <option value="4">Section 4</option>
                    <option value="5">Section 5</option>
                </select>
                {{-- {{ Form::number('section', null, array('placeholder' => 'Section','class' => 'form-control')) }} --}}
            </div>
        </div>

        <div class="text-center">
            <div class="ml-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
    {{ Form::close() }}

    <div>
        <h4>Errors will be shown below:</h4>
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
@endsection

@section('pageJs')
    <script>
        $(document).ready(function(){
            $('#bday').on('change', function(){
                var dropdown = $("select[name='bday_month']")[0]['selectedIndex'];
                // var dropdown = document.getElementById('bday');
                // console.log(dropdown);
                $("input:hidden#date_sorter").val(dropdown);
            })
        });
    </script>
    
@endsection