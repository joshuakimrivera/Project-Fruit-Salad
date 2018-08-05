@extends('layouts.default')

@section('pageCss')
    <style>
        
    </style>
@endsection

@section('content')
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

    {{ Form::open(array('route' => 'CollegesController.CEstore'))}}
    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="mr-4">Name:</strong>
                {{ Form::text('name', null, array('placeholder' => 'StudentName','class' => 'ml-4')) }}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Birthday:&nbsp;</strong>
                {{ Form::date('birthday', null, array('class' => 'ml-4')) }}
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
                <input type="hidden" name="college" value="Engineering" >
                <input type="text" value="Engineering" disabled class="">
                 {{-- {{ Form::text('college', null, array('placeholder' => 'College of', 'class' => 'form-control')) }} --}}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                <select name="department" id="">
                    <option selected disabled> Select your Department</option>
                    <option value="Computer Engineering">Computer Engineering</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Electrical Engineering">Electrical Engineering</option>
                    <option value="Electronics Engineering">Electronics Engineering</option>
                    <option value="Industrial Engineering">Industrial Engineering</option>
                    <option value="Architecture">Architecture</option>
                </select>
                {{-- {{ Form::text('department', null, array('placeholder' => 'Department','class' => 'form-control')) }} --}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="mr-5">Year:</strong>&nbsp;&nbsp;
                <select name="year">
                    <option selected disabled>Select your Year&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</option>
                    <option value="5">5th Year</option>
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
@endsection