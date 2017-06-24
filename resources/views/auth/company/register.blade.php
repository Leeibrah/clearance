@extends('layouts.logon')


@section('content')

	@if(Session::has('message'))
        <div class="alert alert-danger">
            <strong>Error!</strong><h3>{{ Session::get('message') }}</h3>
        </div>
    @endif
	
    <div class="page-center">
        <div class="page-center-in">
            <a href="{!! route('home') !!}">
                <div class="sign-avatar" style="text-align:center; margin-bottom:3%">
                    SAS
                </div>   
            </a>
            <div class="container-fluid">
                {!! Form::open(array('url' => route('auth.company.register.post'), 'class'=>'sign-box') ) !!}
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">                    
                    <header class="sign-title">Company Registration</header>
                    <div class="form-group">
                        <!-- <input type="text" class="form-control" placeholder="E-Mail or Phone"/> -->
                        {!! Form::text('first_name', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'Creator First Name',
                            'required',
                            'id'                            => 'exampleInputFirstName',
                            'data-parsley-required-message' => 'First Name is required',
                            'data-parsley-trigger'          => 'change focusout'                                                        
                        ]) !!}
                    </div>
                    <div class="form-group">
                        <!-- <input type="text" class="form-control" placeholder="E-Mail or Phone"/> -->
                        {!! Form::text('last_name', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'Creator Last Name',
                            'required',
                            'id'                            => 'exampleInputLastName',
                            'data-parsley-required-message' => 'Last Name is required',
                            'data-parsley-trigger'          => 'change focusout'                                                        
                        ]) !!}
                    </div>
                    <div class="form-group">
                        <!-- <input type="text" class="form-control" placeholder="E-Mail or Phone"/> -->
                        {!! Form::email('email', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'Company Email Address',
                            'required',
                            'id'                            => 'exampleInputEmail1',
                            'data-parsley-required-message' => 'Email is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-type'             => 'email'
                            
                        ]) !!}
                    </div>
                    <div class="form-group">
                        <!-- <input type="password" class="form-control" placeholder="Password"/> -->
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
                    <div class="form-group">
                        <!-- <input type="password" class="form-control" placeholder="Password"/> -->
                        {!! Form::password('password', [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'Repeat Password',
                            'required',
                            'id'                            => 'exampleInputPassword1',
                            'data-parsley-required-message' => 'Password dont Match',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-minlength'        => '2',
                            'data-parsley-maxlength'        => '20'
                        ]) !!}
                    </div>
                    <div class="form-group">
                        <!-- <input type="text" class="form-control" placeholder="E-Mail or Phone"/> -->
                        {!! Form::text('phone', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'Company Phone Number',
                            'required',
                            'id'                            => 'exampleInputEmail1',
                            'data-parsley-required-message' => 'Phone is required',
                            'data-parsley-trigger'          => 'change focusout'                                                        
                        ]) !!}
                    </div>
       
                    <button type="submit" class="btn btn-rounded">Next</button>
                    <p class="sign-note">Already have an Account? <a href="{!! route('auth.login') !!}">Login</a></p>

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

