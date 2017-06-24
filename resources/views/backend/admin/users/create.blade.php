@extends('layouts.dash')

@section('css')
    <link rel="stylesheet" href="/backend/css/lib/ladda-button/ladda-themeless.min.css">

    <link rel="stylesheet" href="/backend/css/lib/font-awesome/font-awesome.min.css">
@stop

@section('content')

    <!--start page-content-->
    <div class="page-content">
        {!! Form::model(new \App\Models\User, ['route' => ['admin.users.store']]) !!}
            @include('backend.admin.users._form', ['submitButtonText' => 'Create User'])
        {!! Form::close() !!}
    </div>
    <!--end page-content-->

 @stop

@section('js')

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>


@stop