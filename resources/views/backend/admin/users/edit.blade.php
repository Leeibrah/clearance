@extends('layouts.dash')

@section('css')
    <link rel="stylesheet" href="/backend/css/lib/ladda-button/ladda-themeless.min.css">

    <link rel="stylesheet" href="/backend/css/lib/font-awesome/font-awesome.min.css">
@stop

@section('content')

    <!--start page-content-->
    <div class="page-content">
        {!! Form::model($user, ['route' => ['admin.users.update', $user->getRouteKey()], '_method' => 'put', 'enctype' => 'multipart/form-data', 'files' => true]) !!}
            @include('backend.admin.users._form', ['submitButtonText' => 'Update User'])
        {!! Form::close() !!}
    </div>
    <!--end page-content-->

 @stop                                                        