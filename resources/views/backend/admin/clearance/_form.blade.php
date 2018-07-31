
@include('includes.errors')

<!--start container-fluid-->
<div class="container-fluid">
    <header class="section-header">
        <div class="tbl">
            <div class="tbl-row">
                <div class="tbl-cell">
                    <h3>Unit</h3>
                    <ol class="breadcrumb breadcrumb-simple">
                        <li><a href="#">Clearance</a></li>
                        <!-- <li><a href="#">Unit</a></li> -->
                        <li class="active">Unit</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>

    <div class="box-typical box-typical-padding">                    
        
        

        <div class="form-group row">
            {!! Form::label('item', 'Item name:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::text('item', null, array('class'=>'form-control', 'id'=>'inputPassword', 'placeholder'=>'Enter Unit name')) !!}            
                </p>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('department', 'Department:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::select('department', [null  => 'Select Department'] + $departmentList, null, ['class' => 'form-control', 'required']) !!}
                </p>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('student_number', 'Student Number:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::text('student_number', null, array('class'=>'form-control', 'id'=>'inputPassword', 'placeholder'=>'Enter Student Number')) !!}            
                </p>
            </div>
        </div>

    </div><!--.box-typical-->

    <div class="form-group row">
        <div class="col-sm-6 col-md-5">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-success full-width btn-large']) !!}
            or &nbsp; <a href="{!! route('admin.department.index') !!}" class="soap-popupbox">Cancel</a>
        </div>
    </div>
    
</div>
<!--end container-fluid-->


