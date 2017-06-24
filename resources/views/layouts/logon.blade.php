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
    <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/backend/css/main.css">

    @yield('css')

</head>

<body>

    <!-- start content -->
    @yield('content')
    <!-- end content -->

    <script src="/backend/js/jquery.js"></script>

    @yield('js')
</body>
</html>
