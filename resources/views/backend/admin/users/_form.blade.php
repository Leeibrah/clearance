
@include('includes.errors')

<!--start container-fluid-->
<div class="container-fluid">
    <header class="section-header">
        <div class="tbl">
            <div class="tbl-row">
                <div class="tbl-cell">
                    <h3>Create Management Student</h3>
                    <ol class="breadcrumb breadcrumb-simple">
                        <li><a href="#">SAS</a></li>
                        <li><a href="#">Student</a></li>
                        <li class="active">Management</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>

    <div class="box-typical box-typical-padding">                    
        
        <div class="form-group row">
            {!! Form::label('first_name', 'First Name:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::text('first_name', null, array('class'=>'form-control', 'id'=>'inputPassword', 'placeholder'=>'Enter First Name', 'required')) !!}            
                </p>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('last_name', 'Last Name:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::text('last_name', null, array('class'=>'form-control', 'id'=>'inputPassword', 'placeholder'=>'Enter Last Name', 'required')) !!}            
                </p>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('email', 'Email:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::email('email', null, array('class'=>'form-control', 'id'=>'inputPassword', 'placeholder'=>'Enter Email', 'required')) !!}            
                </p>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('phone', 'Phone:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    <!-- {!! Form::text('phone', null, array('class'=>'form-control', 'id'=>'inputPassword', 'placeholder'=>'Enter Phone', 'maxlength' => 10, 'required')) !!}-->
                    {!! Form::text('phone', null, ['class'=>'form-control'],['maxlength'=>5]) !!}</p>
                </p>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('student_number', 'Student Number:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::text('student_number', null, array('class'=>'form-control', 'id'=>'inputPassword', 'placeholder'=>'Enter Student Number', 'required')) !!}  
                </p>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('valid_from', 'Valid From:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::text('valid_from', null, array('class'=>'form-control', 'placeholder'=>'ie. 2015', 'required')) !!}            
                </p>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('valid_to', 'Valid To:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::text('valid_to', null, array('class'=>'form-control', 'placeholder'=>'ie. 2019', 'required')) !!}            
                </p>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('course_id', 'Course:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                {!! Form::select('course_id', [null  => 'Select Course'] + $courses, null, ['class' => 'form-control', 'required']) !!}
            </div>
        </div>

        

    </div><!--.box-typical-->

    <div class="form-group row">
        <div class="col-sm-6 col-md-5">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-success full-width btn-large']) !!}
            or &nbsp; <a href="" class="soap-popupbox">Cancel</a>
        </div>
    </div>
    
</div>
<!--end container-fluid-->


