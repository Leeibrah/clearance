@extends('layouts.logon')


@section('content')

	@if(Session::has('message'))
        <div class="alert alert-danger">
            <strong>Error!</strong><h3>{{ Session::get('message') }}</h3>
        </div>
    @endif
	

    
    <!--start page-content-->
    <div class="page-center" style="height: 19px;">
        <div class="page-center-in">
            <div class="container-fluid">  
                <a href="{!! route('home') !!}">
                    <div class="sign-avatar" style="text-align:center">
                        <img src="/images/logo.png" alt="">
                    </div>    
                </a>
                <br>
                <section class="card">
                    <div class="card-block">

                        <!--row-->
                        <div class="row" style="text-align:center">
                            <div class="col-lg-12">
                                <h5 class="m-t-lg with-border m-t-0">Choose your Registration Category</h5>

                                <div class="form-group">
                                    
                                    <!-- <a href="{!! route('auth.register') !!}" class="btn btn-success">Normal User</a> -->
                                    <a href="{!! route('auth.employee.register') !!}" class="btn btn-info">Employee</a>
                                    <!-- <a href="{!! route('auth.company.register') !!}" class="btn btn-warning">Employer</a> -->
                                </div>                   
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--.page-center-->

@stop

@section('js')
	<script src="/backend/js/lib/jquery/jquery.min.js"></script>
	<script src="/backend/js/lib/tether/tether.min.js"></script>
	<script src="/backend/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="/backend/js/plugins.js"></script>
	<script src="/backend/js/app.js"></script>
@stop

