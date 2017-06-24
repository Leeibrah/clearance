
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
                        <!-- <li><a href="#">Attendance</a></li> -->
                        <li class="active">Attendance</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>

    <div class="box-typical box-typical-padding">                    
        
        <div class="form-group row">
            {!! Form::label('code', 'Code:', array('class' => 'col-sm-2 form-control-label')) !!}
            <div class="col-sm-10">
                <p class="form-control-static">
                    {!! Form::text('code', null, array('class'=>'form-control', 'id'=>'inputcode', 'placeholder'=>'Enter Attendance code')) !!}            
                </p>
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


