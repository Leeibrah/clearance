
@include('includes.errors')

<!--start container-fluid-->
<div class="container-fluid">
    <header class="section-header">
        <div class="tbl">
            <div class="tbl-row">
                <div class="tbl-cell">
                    <h3>Create Management Lecturer</h3>
                    <ol class="breadcrumb breadcrumb-simple">
                        <li><a href="#">Clearance</a></li>
                        <li><a href="#">Lecturer</a></li>
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
                    {!! Form::text('phone', null, array('class'=>'form-control', 'id'=>'inputPassword', 'placeholder'=>'Enter Phone', 'required')) !!}    
                </p>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('course_id', 'Unit:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                {!! Form::select('course_id', [null  => 'Select Unit'] + $courseUnits, null, ['class' => 'form-control', 'required']) !!}
            </div>
        </div>

        <!-- <div class="form-group row">
            {!! Form::label('password', 'Password:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                {!! Form::password('password', [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'Enter Password',
                            'required',
                            'id'                            => 'exampleInputPassword1',
                            'data-parsley-required-message' => 'Password is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-minlength'        => '2',
                            'data-parsley-maxlength'        => '20'
                        ]) !!}
            </div>
        </div> -->


    </div><!--.box-typical-->

    <div class="form-group row">
        <div class="col-sm-6 col-md-5">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-success full-width btn-large']) !!}
            or &nbsp; <a href="" class="soap-popupbox">Cancel</a>
        </div>
    </div>
    
</div>
<!--end container-fluid-->


