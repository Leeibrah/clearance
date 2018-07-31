@extends('layouts.dash')

@section('css')
    <link rel="stylesheet" href="/backend/css/lib/ladda-button/ladda-themeless.min.css">

    <link rel="stylesheet" href="/backend/css/lib/font-awesome/font-awesome.min.css">
@stop

@section('content')

    <!--start page-content-->
    <div class="page-content">
        {!! Form::model($department, ['route' => ['admin.companies.update', $department->getRouteKey()], '_method' => 'put', 'enctype' => 'multipart/form-data', 'files' => true]) !!}
            @include('backend.admin.companies._form', ['submitButtonText' => 'Update department'])
        {!! Form::close() !!}
    </div>
    <!--end page-content-->

 @stop                                                        