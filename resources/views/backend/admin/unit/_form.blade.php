
@include('includes.errors')

<!--start container-fluid-->
<div class="container-fluid">
    <header class="section-header">
        <div class="tbl">
            <div class="tbl-row">
                <div class="tbl-cell">
                    <h3>Unit</h3>
                    <ol class="breadcrumb breadcrumb-simple">
                        <li><a href="#">SAS</a></li>
                        <!-- <li><a href="#">Unit</a></li> -->
                        <li class="active">Unit</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>

    <div class="box-typical box-typical-padding">                    
        
        <div class="form-group row">
            {!! Form::label('course', 'Course:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::select('course', (['0' => 'Select a Course'] + $courses), $selectedCourse, ['class' => 'form-control']) !!}
                </p>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('name', 'Name:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::text('name', null, array('class'=>'form-control', 'id'=>'inputPassword', 'placeholder'=>'Enter Unit name')) !!}            
                </p>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('class', 'Venue:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::text('class', null, array('class'=>'form-control', 'id'=>'inputPassword', 'placeholder'=>'Enter Unit Venue')) !!}            
                </p>
            </div>
        </div>

        <!-- <div class="form-group row">
            {!! Form::label('lecturer', 'Lecturer:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::text('lecturer', null, array('class'=>'form-control', 'id'=>'inputPassword', 'placeholder'=>'Enter Unit Lecturer')) !!}            
                </p>
            </div>
        </div> -->

    </div><!--.box-typical-->

    <div class="form-group row">
        <div class="col-sm-6 col-md-5">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-success full-width btn-large']) !!}
            or &nbsp; <a href="{!! route('admin.unit.index') !!}" class="soap-popupbox">Cancel</a>
        </div>
    </div>
    
</div>
<!--end container-fluid-->


