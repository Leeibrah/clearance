@extends('layouts.dash')

@section('css')
    <link rel="stylesheet" href="/backend/css/lib/ladda-button/ladda-themeless.min.css">

    <link rel="stylesheet" href="/backend/css/lib/font-awesome/font-awesome.min.css">
@stop

@section('content')

    <!--start page-content-->
    <div class="page-content">
        {!! Form::model(new \App\Models\Clearance, ['route' => ['admin.clearance.store']]) !!}
            @include('backend.admin.clearance._form', ['submitButtonText' => 'Create Clearance'])
        {!! Form::close() !!}
    </div>
    <!--end page-content-->

 @stop


 @section('js')
    <script src="/backend/js/lib/jquery/jquery.min.js"></script>
    <script src="/backend/js/lib/tether/tether.min.js"></script>
    <script src="/backend/js/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/backend/js/plugins.js"></script>

    <script src="/backend/js/lib/ladda-button/spin.min.js"></script>
    <script src="/backend/js/lib/ladda-button/ladda.min.js"></script>
    <script src="/backend/js/lib/ladda-button/ladda-button-init.js"></script>
    <script type="text/javascript" src="/backend/js/lib/jquery-contextmenu/jquery.contextMenu.min.js"></script>
    <script type="text/javascript" src="/backend/js/lib/jquery-contextmenu/jquery.ui.position.min.js"></script>
 @stop