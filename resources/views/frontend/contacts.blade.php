@extends('layouts.master')

@section('content')

    <!-- Overlay Mobile Menu Click -->
    @include('partials.frontend.mobile-menu')
    <!-- End Mobile Menu -->

    <div id="page">

      <!-- Start top bar -->
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
                  <h2>Contact Us</h2>
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
                      <li class="active">Contact</li>
                    </ol>
               </div><!--  End col -->
            </div> <!-- End Row -->
         </div><!-- End container -->
      </div><!--  End Section -->

      <div class="line"></div>

      <!-- Section form contact -->
      <section class="padding-top:50px;">
        <div class="container">
          <div class="row">
            <div class="col-md-8 left-contact">
              <h4> Send Us a Message</h4>
                    <form class="form-inline form-contact-finance" name="contact" method="post" action="send_form_email.php">
                        <div class="row">
                          <div class="form-group col-sm-12  col-md-4">
                            <input type="text" class="form-control" name="yourName" id="yourName" placeholder="Your Name">
                          </div>
                          <div class="form-group col-sm-12 col-md-4">
                            <input type="email" class="form-control" name="yourEmail" id="yourEmail" placeholder="Your Email" >
                          </div>
                          <div class="form-group col-sm-12 col-md-4">
                            <input type="text" class="form-control" name="yourPhone" id="phoneNumber" placeholder="Phone Number" >
                          </div>
                        </div>
                        <div class="input-content">
                          <div class="form-group form-textarea">
                            <textarea id="textarea" class="form-control" name="comments" rows="6" placeholder="Your Messages" ></textarea>
                          </div>
                        </div>
                        <button  class="ot-btn large-btn btn-rounded  btn-main-color btn-submit">Send Mail</button>
                   </form> <!-- End Form -->
            </div> <!-- End col -->
            <div class="col-md-4 right-contact">
              <h4>Contact Info</h4>
              <p>
                You can contact us through the contacts below.
              </p>
              <ul class="address">
                <li>
                  <p>
                    <i class="fa fa-home" aria-hidden="true"></i>
                    &nbsp;&nbsp; 3rd Floor, Mlab East Africa,<br> Bishop Magua Cetre,<br> Ngong Road,<br> Nairobi, Kenya
                  </p>
                </li>
                <li><p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp; (+254) 723 563 980</p></li>
                <li><p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp; info@stawicapital.com</p></li>
                <!-- <li><p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp; Mon-Fri 09:00 AM - 5:00 PM</p></li> -->
              </ul>
            </div> <!-- End col -->
          </div>
        </div>
      </section>
      <!-- End Section -->
      <!-- Section Google Map -->
      <div class="no-padding ">
        <div id="map-canvas" class="margin-top-15"></div>
      </div>
      <!-- End Section -->    

      <!-- Footer --> 
      @include('partials.frontend.footer')
      <!-- End  -->

    </div>
    <!-- End Page -->
    <a id="to-the-top" style="display: block;"><i class="fa fa-angle-up"></i></a> <!-- Back To Top -->
    
</body>

@stop