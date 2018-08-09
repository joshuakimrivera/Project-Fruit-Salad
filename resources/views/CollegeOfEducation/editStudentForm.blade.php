@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2>Edit {{ $data->name }}'s Data</h2>
            </div>
            <div class="pull-right mr-5">
                <a class="btn btn-primary" href="{{ route('CollegesController.index') }}"> Back</a>
            </div>
        </div>
    </div>

    {!! Form::model($data, ['route' => ['CollegesController.CEupdate', $data->id]]) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="mr-3">Name:&nbsp;</strong>
                <input type="text" name="bday_month" value={{ $data->last_name }} >
                <input type="text" name="bday_day" value={{ $data->first_name }} >
                <input type="text" name="bday_year" value={{ $data->middle_initial }} >
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Birthday:</strong>
                <input type="text" name="bday_month" value={{ $data->bday_month }} class="">
                <input type="text" name="bday_day" value={{ $data->bday_day }} class="">
                <input type="text" name="bday_year" value={{ $data->bday_year }} class="">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Age:</strong>
                <input type="number" name="age" value="{{ $data->age }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Gender:</strong>
                <input type="text" name="gender" value="{{ $data->gender }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>Address:</strong>
                <input type="text" name="adress" value="{{ $data->address }}" class="form-control">
            </div>
        </div> 

        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>College:</strong>
                <input type="text" name="college" value="{{ $data->college }}" class="form-control">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                <input type="text" name="department" value="{{ $data->department }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Year:</strong>
                <input type="number" name="year" value="{{ $data->year }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Section:</strong>
                <input type="number" name="section" value="{{ $data->section }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {{ Form::close() }}

    <div>
        <p>Errors:</p>
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