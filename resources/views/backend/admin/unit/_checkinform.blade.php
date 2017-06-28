
@include('includes.errors')

<!--start container-fluid-->
<div class="container-fluid">
    <header class="section-header">
        <div class="tbl">
            <div class="tbl-row">
                <div class="tbl-cell">
                    <h3>Attendance</h3>
                    <ol class="breadcrumb breadcrumb-simple">
                        <li><a href="#">SAS</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </header>

    <div class="box-typical box-typical-padding">                    
        
        <div class="form-group row">
            {!! Form::label('lecturer', 'Lecturer:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                {!! Form::text('lecturer', $lecturerName, array('class'=>'form-control', 'id'=>'inputcode', 'readonly')) !!}
                </p>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('unit', 'Unit Name:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::text('unit', $unitName, array('class'=>'form-control', 'id'=>'inputcode', 'readonly')) !!}       
                </p>
            </div>
        </div>


        <div class="form-group row">
            {!! Form::label('class', 'Class Name:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::text('class', $className, array('class'=>'form-control', 'id'=>'inputcode', 'readonly')) !!}       
                </p>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('code', 'Code:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::text('code', null, array('class'=>'form-control', 'id'=>'inputcode', 'placeholder'=>'Enter Attendance Checkin code')) !!}            
                </p>
            </div>
        </div>
    </div><!--.box-typical-->

    <div class="form-group row">
        <div class="col-sm-6 col-md-5">
            {!! Form::submit($submitButtonText, []) !!}
        </div>
    </div>
    
</div>
<!--end container-fluid-->


