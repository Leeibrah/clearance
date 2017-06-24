@extends('layouts.logon')


@section('content')

	@if(Session::has('message'))
        <div class="alert alert-danger">
            <strong>Error!</strong><h3>{{ Session::get('message') }}</h3>
        </div>
    @endif
	
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                {!! Form::open(array('url' => route('auth.register.post'), 'class'=>'sign-box') ) !!}
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <!-- <div class="sign-avatar">
                        <img src="/backend/img/avatar-sign.png" alt="">
                    </div> -->
                    <header class="sign-title">Employee's Details Register</header>
                    <div class="form-group">
                        <!-- <input type="text" class="form-control" placeholder="E-Mail or Phone"/> -->
                        {!! Form::text('position', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'ID Number',
                            'required'                                                       
                        ]) !!}
                    </div>

                    <div class="form-group">
                        <!-- <input type="text" class="form-control" placeholder="E-Mail or Phone"/> -->
                        {!! Form::text('net_income', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'ID Number',
                            'required'                                                     
                        ]) !!}
                    </div>

                    <div class="form-group">
                        <!-- <input type="text" class="form-control" placeholder="E-Mail or Phone"/> -->
                        {!! Form::text('payroll_number', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'ID Number',
                            'required'                                                      
                        ]) !!}
                    </div>

                    <div class="form-group">
                        <!-- <input type="text" class="form-control" placeholder="E-Mail or Phone"/> -->
                        {!! Form::text('id_number', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'ID Number',
                            'required'                                                    
                        ]) !!}
                    </div>

                    <div class="form-group">
                        <!-- <input type="text" class="form-control" placeholder="E-Mail or Phone"/> -->
                        {!! Form::text('years_worked', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'ID Number',
                            'required'                          
                        ]) !!}
                    </div>

                    <div class="form-group">
                        <!-- <input type="text" class="form-control" placeholder="E-Mail or Phone"/> -->
                        {!! Form::text('age', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'ID Number',
                            'required'                                                                    
                        ]) !!}
                    </div>
               
                    <button type="submit" class="btn btn-rounded">Finish</button>
                    <p class="sign-note">Already have an Account? <a href="sign-up.html">Login</a></p>

                    <!-- <p class="_center">
                    	<a href="{{ route('auth.register') }}" class="goto-signup soap-popupbox">Create an Account</a>
                    </p> -->

                {!! Form::close() !!}
            </div>
        </div>
    </div><!--.page-center-->

@stop

@section('js')
	<script src="/backend/js/lib/jquery/jquery.min.js"></script>
	<script src="/backend/js/lib/tether/tether.min.js"></script>
	<script src="/backend/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="/backend/js/plugins.js"></script>
	<script src="/backend/js/app.js"></script>
@stop

