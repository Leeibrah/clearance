@extends('layouts.master')

@section('content')

    <!-- Overlay Mobile Menu Click -->
    @include('partials.frontend.mobile-menu')
    <!-- End Mobile Menu -->

    <div id="page">

      <!-- End top bar -->
      @include('partials.frontend.top-nav')
      <!-- End top bar -->
      
      <!-- START HEADER -->
      @include('partials.frontend.nav')
      <!-- END HEADER -->

      <!-- Section Header Title -->
      <section class="bg-grey padding-top-45 padding-bottom-45 clearfix">
        <div class="container">
            <div class="row">
              <div class="section-title">
                <div class="col-md-12">
                  <h2>About us</h2>
                </div>
              </div>
            </div><!-- End Row -->
        </div><!-- End container -->
      </section><!--  End Section -->

      <!-- Section BreadCrumb -->
      <div class="no-padding border-bottom">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                   <ol class="breadcrumb breadcrumb-finance">
                      <li><a href="{!! route('home') !!}"> <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                      <li class="active">About Us</li>
                    </ol>
               </div><!--  End col -->
            </div> <!-- End Row -->
         </div><!-- End container -->
      </div><!--  End Section -->

      <div class="line"></div>

      <!-- Component Counter Up-->
      <section>
          <div class="container">
              <div class="row">
                  <div class="col-xs-12 col-md-6">
                      <div class="video-intro-container">
                          <!-- <div class="background-video"> -->
                                <img src="/images/frontend/aboutpic.png" class="images-responsive" alt="Image">
                                <!-- <button data-href="https://www.youtube.com/embed/vOAB6XOkY2E" id="btn-event" class="btn btn-play" ></button > -->
                          <!-- </div> -->


                          <!-- <div id="video-container" class="embed-responsive embed-responsive-16by9 iframe-video-container">
                              <iframe id="video" class="embed-responsive-item" src="https://www.youtube.com/embed/vOAB6XOkY2E" allowfullscreen></iframe>
                          </div> -->
                      </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <h2>We are @section('title') {{ app_name() }} @show</h2>
                    <div class="clearfix"></div>
                    <p>
                        Traditional Banking systems have been
                        overtaken by the ever changing techno-savvy middle class who are demanding a
                        fast and efficient lending platform. Stawi capital is developing a mobile
                        application system that will enable Individual borrower’s access loans up to kes
                        50,000 to their mobile phones within seconds.
                        <br>
                        SMES are facing working capital challenges by holding unpaid Invoices or taking
                        too long before payments are received for services or goods provided to
                        businesses. Stawi Capital seeks to solve this financing challenge by developing a
                        web-based online.
                        <br>
                        Invoice discounting system that will enable SMES to convert their invoices into
                        cash within 24hrs.

                    </p>

                </div><!-- End col -->
              </div><!-- End row -->
          </div><!-- End container-->
      </section><!-- End section-->

      <div class="container">
          <div class="line"></div>
      </div>

      <!-- Get a quote section -->
      @include('partials.frontend.quote')
      <!-- Get a quote section -->
      

      <!-- Footer --> 
      @include('partials.frontend.footer')
      <!-- End  -->

    </div>
    <!-- End Page -->

    <a id="to-the-top" style="display: block;"><i class="fa fa-angle-up"></i></a> <!-- Back To Top -->
    
</body>

@stop