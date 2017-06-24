@extends('layouts.dash')

@section('css')
    <link rel="stylesheet" href="/backend/css/lib/ladda-button/ladda-themeless.min.css">

    <link rel="stylesheet" href="/backend/css/lib/font-awesome/font-awesome.min.css">
@stop

@section('content')

    <!--start page-content-->
    <div class="page-content">
        {!! Form::model($loan, ['route' => ['loans.update', $loan->getRouteKey()], '_method' => 'put', 'enctype' => 'multipart/form-data', 'files' => true]) !!}
            @include('backend.admin.loans._form', ['submitButtonText' => 'Update loan'])
        {!! Form::close() !!}
    </div>
    <!--end page-content-->

 @stop                                                        