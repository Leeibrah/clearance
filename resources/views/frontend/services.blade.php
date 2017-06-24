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
                  <h2>Our services</h2>
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
                      <li class="active">Our Services</li>
                    </ol>
               </div><!--  End col -->
            </div> <!-- End Row -->
         </div><!-- End container -->
      </div><!--  End Section -->

      <div class="line"></div>

      <!-- Component Thumbnail Left Icon SVG -->
      <div class="padding-top-70 padding-bottom-70">
        <div class="container">
            <div class="row clearfix">
              <div class="services-wrap">
                <div class="services-list-2">
                    <article class="col-sm-6 col-md-4 thumbnail-style thumbnail-icon-item text-left ">
                       
                         <div class="thumbnail icon-left">
                            <img src="images/frontend/services/1.png" alt="">
                           <div class="caption">
                             <h4>Capital Lending</h4>
                             <p>
                              The basis of analysis for loan limit will be credit history through a credit score.
                             </p>
                              <a class="learn-more" href="{!! route('loan-lending') !!}"><i class="fa fa-caret-right" aria-hidden="true"></i>  Learn More
                                
                              </a>
                           </div>
                         </div>
                       
                    </article><!-- End article -->
                    <article class="col-sm-6 col-md-4 thumbnail-style thumbnail-icon-item text-left ">
                       
                         <div class="thumbnail icon-left">
                             <img class="img-icon-thumbnail" src="images/frontend/services/2.png" alt="">
                           <div class="caption">
                             <h4>Salary Advance</h4>
                             <p>
                              This module will only be available to salaried employees.
                             </p>
                             <a class="learn-more" href="{!! route('salary-advance') !!}"><i class="fa fa-caret-right" aria-hidden="true"></i>  Learn More
                                
                              </a>
                           </div>
                         </div>
                       
                    </article><!-- End article -->
                  
                    <article class="col-sm-6 col-md-4 thumbnail-style thumbnail-icon-item text-left no-margin">
                       
                         <div class="thumbnail icon-left">
                             <img class="img-icon-thumbnail" src="images/frontend/services/4.png" alt="">
                           <div class="caption">
                             <h4>Invoice Discounting</h4>
                             <p>
                              This will be available to SMES that are already in business.
                             </p>
                             <a class="learn-more" href="{!! route('invoice-discounting') !!}"><i class="fa fa-caret-right" aria-hidden="true"></i>  Learn More
                                
                              </a>
                           </div>
                         </div>
                       
                    </article><!-- End article -->
                    
                    
                </div>

              </div>
            </div><!-- End Row -->
        </div><!-- End container -->
      </div> 
      <!-- End section -->

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