<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>
        @section('title')
            {{ app_name() }} :: Your Financial Partner
        @show        
    </title>
    <link href="/css/backend/style.css" rel="stylesheet">
    <link href="/css/backend/style2.css" rel="stylesheet">
    <link href="/css/adjust.css" rel="stylesheet">
    <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="/js/backend/jquery.js">
    </script>

    <link rel="stylesheet" href="/backend/css/lib/lobipanel/lobipanel.min.css">
    <link rel="stylesheet" href="/backend/css/lib/jqueryui/jquery-ui.min.css">
    <link rel="stylesheet" href="/backend/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="/backend/css/main.css">

    <link rel="stylesheet" href="/backend/css/lib/datatables-net/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css">

    <style type="text/css">
        a.buttons-collection {
            margin-left: 1em;
        }
    </style>

    @yield('css')

</head>

<body class="with-side-menu control-panel control-panel-compact">

    

    <!-- start header -->
    @include('partials.dashboard.header')
    <!-- end header -->

    <div class="mobile-menu-left-overlay"></div>    

    <!--start side-menu-->
    @if(Auth::check())
        @if(Auth::User()->isAdmin())
            @include('partials.dashboard.admin.sidebar')
            
        @elseif(Auth::User()->isCompany())
            @include('partials.dashboard.company.sidebar')

        @elseif(Auth::User()->isEmployee())
            @include('partials.dashboard.employee.sidebar')

        @else(Auth::User()->isUser())
            @include('partials.dashboard.user.sidebar')

        @endif
    @endif
    <!--end side-menu-->



    <!-- start content -->
    @yield('content')
    <!-- end content -->

    <!-- <script src="/backend/js/lib/jquery/jquery.min.js"></script> -->
    <script src="/backend/js/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/backend/js/plugins.js"></script>

    @yield('js')
</body>
</html>
