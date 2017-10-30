<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en"><!--<![endif]-->
    <head>

        <!-- Basic Page Needs
      ================================================== -->
        <meta charset="utf-8">
        <title>
            @section('title') 
               {{ app_name() }} 
            @show
            :: Attendance System
        </title>
        <meta name="description" content="">
        <meta name="author" content="">

      <!-- Mobile Specific Metas
      ================================================== -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

      <!-- Font
      ================================================== -->
      
      <!-- By Lee -->
      <!-- <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css"> -->
      <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.css">
      <!-- CSS
      ================================================== -->
      <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css"/>
      <!-- SELECTBOX
      ================================================== -->
      <link rel="stylesheet" type="text/css" href="/css/frontend/fancySelect.css" media="screen" /> 
      <!-- SLIDER REVOLUTION 4.x SCRIPTS
      ================================================== --> 
      <link rel="stylesheet" type="text/css" href="/css/frontend/extralayers.css" media="screen" /> 
      <link rel="stylesheet" type="text/css" href="/assets/rs-plugin/css/settings.css" media="screen" />
      <!-- SCROLL BAR MOBILE MENU
      ================================================== --> 
      <link rel="stylesheet" href="/css/frontend/jquery.mCustomScrollbar.css" />
      <!-- OWL CAROUSEL
      ================================================== --> 
      <link rel="stylesheet" href="/css/frontend/owl.carousel.css">
      <!-- SCROLL BAR MOBILE MENU
      ================================================== --> 
      <link rel="stylesheet" href="/css/frontend/jquery.mCustomScrollbar.css" />
      <!-- MAIN STYLE
      ================================================== -->
      <link rel="stylesheet" href="/css/frontend/style.css"/>
      
      
      <!-- Favicons
      ================================================== -->
      <link rel="shortcut icon" href="/favicon.png">
        
      @yield('css')

    </head>
    <body>  

        <!-- Start Page -->
        @yield('content')
        <!-- End Page -->


        <!-- Loading Lazy Images -->
        <div id=jSplash>
          <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
          </div>
        </div>
        <div id="overlay"></div>
        <!-- Overlay Mobile Menu Click -->
        <a id="to-the-top" style="display: block;"><i class="fa fa-angle-up"></i></a> <!-- Back To Top -->
     
        @include('includes.frontend.js')   

        @yield('js')     

    </body>
</html>