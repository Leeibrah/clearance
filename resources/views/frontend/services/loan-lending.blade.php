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
                  <h2>Loan Lending</h2>
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
                      <li><a href="{!! route('services') !!}"> <i class="fa fa-home" aria-hidden="true"></i> Services</a></li>
                      <li class="active">Loan Lending</li>
                    </ol>
               </div><!--  End col -->
            </div> <!-- End Row -->
         </div><!-- End container -->
      </div><!--  End Section -->

      <div class="line"></div>

      <!--Services Detail -->
      <section class="padding-top-50">
        <div class="container">
          <div class="row">
              <div class="col-md-3 slidebar">
                  <div class="list-group">
                    <a href="{!! route('loan-lending') !!}" class="list-group-item active">Loan Lending</a>
                    <a href="{!! route('salary-advance') !!}" class="list-group-item">Salary Advance</a>
                    <a href="{!! route('invoice-discounting') !!}" class="list-group-item">Invoice Discounting</a>
                    
                  </div>
              </div>  <!-- End col slidebar -->
              <div class="col-md-9 services-detail-content">
                <img src="/images/Services/detail.jpg" class="img-responsive img-header-detail" alt="Image">
               
                  <div class="h-block">
                      <h3>Financial Statements</h3>
                      <div class="row">
                        <div class="col-md-9 left-hblock">
                              <p>Nulla commodo iaculis ligula, ac dapibus quam ornare ut. Praesent ac hendrerit sem, et tempus sem. Donec sit amet elit a felis tristique eleifend. Aliquam erat volutpat. Cras metus ipsum, tincidunt in bibendum vitae, fringilla ac ipsum. Sed at eros quis mi pulvinar lacinia eget sed ex. Vestibulum eget ipsum porttitor, cursus urna nec, ultrices enim. Sed eget dignissim nulla, non facilisis augue. Fusce nec dictum nunc. Maecenas hendrerit tempus magna eu ultricies. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas eros ligula, porta non leo porttitor, laoreet mollis nisl.
                              </p>
                        </div>
                        <div class="col-sm-6 col-md-4 right-hblock">
                            <!-- <div class="brochures-download">
                              <p>DOWNLOAD BROCHURES</p>
                              <button type="button" class="btn btn-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> DownloadFile.pdf</button>
                              <button type="button" class="btn btn-download"><i class="fa fa-file-word-o" aria-hidden="true"></i> DownloadFile.pdf</button>
                            </div> -->
                        </div>
                      </div><!-- End row -->
                  </div><!-- End H-block -->
                 
              </div>

          </div><!-- End Row -->

        </div><!-- End container -->
      </section><!--  End Section -->

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