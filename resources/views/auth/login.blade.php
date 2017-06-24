@extends('layouts.logon')


@section('content')
	
    <div class="page-center">
        <div class="page-center-in">
            <a href="{!! route('home') !!}">
                <div class="sign-avatar" style="text-align:center; margin-bottom:3%; font-size:30px">
                    SAS
                </div>   
            </a>
            <div class="container-fluid">
                {!! Form::open(array('url' => route('auth.login.post'), 'class'=>'sign-box') ) !!}
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="sign-avatar">
                        <img src="/backend/img/avatar-sign.png" alt="">
                    </div>

                    <div>
                        @include('includes.errors')
                    </div>
                    <header class="sign-title">Sign In</header>
                
                    <div class="form-group">
                        <!-- <input type="text" class="form-control" placeholder="E-Mail or Phone"/> -->
                        {!! Form::email('email', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'Enter Email',
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
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in"/>
                            <label for="signed-in">Keep me signed in</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-rounded">Sign in</button>

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
