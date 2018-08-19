<div id="showmodal" class="modal">
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
                            <input id="wobble" type="text" name="middle_initial"  disabled>
                            {{--<label for="wobble">Middle Initial</label>--}}
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="ayoko" type="text" name="last_name"  disabled>
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
                            <input id="wobble" type="text" name="bday_month" disabled>
                            
                        </div>
                        <div class="col s2">
                            <input id="wobble" type="text" name="bday_day" disabled>
                            
                        </div>
                        <div class="col s4">
                            <input id="wobble" type="text" name="bday_year" disabled>
                            {{--<label>Birth Year</label>--}}
                        </div>
                            
                    </div>
                </div>
                <div class="row form-group">
                    <div class="input-field col s3">
                        <i class="material-icons prefix">perm_identity</i>
                        <!--{{ Form::number('age', null, array('placeholder' => '---', 'class' => '', 'required')) }}-->
                        <input id="wobble" type="text" name="age" disabled>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">wc</i>
                       <input id="wobble" type="text" name="gender" disabled>
                        
                            {{-- {{ Form::text('gender', null, array('placeholder' => 'Male or Female', 'class' => 'form-control')) }} --}}
                    </div>
                </div>
                
    
                <div class="row form-group">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">home</i>
                            <!--{{ Form::text('address', null, array('placeholder' => '---','class' => '', 'required')) }}-->
                            <input id="wobble" type="text" name="address" disabled>
                    </div>
                </div> 
                <hr>
                <br>
                <div class="row form-group input-field">
                    <!--<div class="col s6">
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
                    </div>-->
                    <div class="col s6">
                        <div class="form-group">
                            <div id="primary">
                                <i class="material-icons prefix">business</i>
                                <input id="wobble" type="text" name="department" disabled>
                                
                            </div>
                            <!--<div class="hiddendiv" id="CCIS">
                                <i class="material-icons prefix">business</i>
                                <select name="department">
                                    <option selected disabled>--</option>
                                    <option id="cs" value="Computer Science">Computer Science</option>
                                    <option id="it" value="Information Technology">Information Technology</option>
                                </select>
                                <label>Department</label>-->
                            </div>
                            <div class="hiddendiv" id="CoEd">
                                <i class="material-icons prefix">business</i>
                                <input id="wobble" type="text" name="department" disabled>
                                
                            </div>
                            <div class="hiddendiv" id="CE">
                                <i class="material-icons prefix">business</i>
                                <input id="wobble" type="text" name="department" disabled>
                                <label>Department</label>
                            </div>
                            {{-- {{ Form::text('department', null, array('placeholder' => 'Department','class' => 'form-control')) }} --}}
                        </div>
                    </div>
                </div>
                
                <br>
    
                <div class="row input-field">

                    <div class="form-group col s6" id="ui">
                        <input id="wobble" type="text" name="year" disabled>
                        
                    </div>

                    <div class="form-group col s6 hiddendiv" id="yearOne">
                        <input id="wobble" type="text" name="year" disabled>
                        
                    </div>


                    <div class="form-group col s6 hiddendiv" id="ceYear">
                        <input id="wobble" type="text" name="year" disabled>
                        <label>Year</label>
                    </div>




                    <div class="form-group col s6">
                        <input id="wobble" type="text" name="section" disabled>
                        
                        {{-- {{ Form::number('section', null, array('placeholder' => 'Section','class' => 'form-control')) }} --}}
                    </div>
                </div>
                <br>
                <!--<div class="center">
                    <button type="submit" class="btn btn-large hoverable waves-effect waves-light orange accent-3 tooltipped" data-tooltip="Create Student"><i class="material-icons left">send</i>Submit</button>
                </div>-->
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