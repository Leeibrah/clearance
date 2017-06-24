@extends('layouts.master')

@section('content')

    <!-- Start Mobile Menu -->
    @include('partials.frontend.mobile-menu')
    <!-- End Mobile Menu -->

    <!-- Start Page -->
    <div id="page">

        @include('partials.frontend.home-nav')

        <!-- Component Blog -->
        <section class="padding-top-50">
            <div class="container">
               <div class="row"> 
                  <div class="services-home-1">
                    <div class="col-md-4">
                      <div class="item-blog">
                        <div class="thumbnail">
                            <a href="#" class="img-blog-contain"><img src="images/frontend/good.png" alt=""></a>
                            <div class="caption">
                              <a href="#"><h4>Start A Good Plan</h4></a>
                              <p>
                                Stawi capital is developing a mobile
                                application system that will enable Individual borrower’s access loans up to kes
                                50,000 to their mobile phones within 30seconds.

                              </p>
                              <a class="learn-more" href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Learn More
                                
                              </a>
                            </div>
                        </div>
                      </div>
                    </div>
                   
                    <div class="col-md-4">
                      <div class="item-blog">
                          <div class="thumbnail">
                              <a href="#" class="img-blog-contain"><img src="images/frontend/platforms.png" alt=""></a>
                              <div class="caption">
                                <a href="#"><h4>Experienced Experts</h4></a>
                                <p>
                                  By use of proprietary technology. Traditional Banking systems have been
                                  overtaken by the ever changing techno-savvy middle class who are demanding a
                                  fast and efficient lending
                            
                                </p>
                                <a class="learn-more" href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Learn More
                                </a>
                              </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-md-4">
                      <div class="item-blog">
                          <div class="thumbnail">
                              <a href="#" class="img-blog-contain"><img src="images/frontend/growth.png" alt=""></a>
                              <div class="caption">
                                <a href="#"><h4>Grow Your Financial</h4></a>
                                <p>
                                  Invoice discounting system that will enable SMES to convert their invoices into cash within 24hrs.
                                </p>
                                <a class="learn-more" href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Learn More
                                  
                                </a>
                              </div>
                          </div>
                      </div> 
                    </div>
                  </div>

                </div><!-- End Row 2 -->
           </div><!-- End container -->
        </section>
      
        <!-- Component Media Left Icon Our Services-->
        <section class="bg-grey">
             <div class="container">
             <div class="row">
                  <div class="col-md-12">
                        <h2 class="title clearfix">Our Services</h2>
                  </div><!-- End col -->
                  <div class="services-warp">
                      
                      <article class=" col-sm-6 col-md-4 media-style media-left-icon-item">
                         <div class="media">
                            <div class="media-left">
                              <i class="fa fa-money"></i>
                            </div>
                            <div class="media-body">
                              <h4 class="">Capital Lending</h4>
                              <p>
                                The basis of analysis for loan limit will be credit history through a credit score.
                              </p>
                            </div>
                          </div>
                      </article><!-- End article -->
                      
                      <article class=" col-sm-6 col-md-4 media-style media-left-icon-item no-margin">
                         <div class="media">
                            <div class="media-left">
                              <i class="fa fa-shield"></i>
                            </div>
                            <div class="media-body">
                              <h4 class="">Salary Advance</h4>
                              <p>
                                This module will only be available to salaried employees.
                              </p>
                            </div>
                          </div>
                      </article><!-- End article -->

                      <article class=" col-sm-6 col-md-4 media-style media-left-icon-item no-margin">
                         <div class="media">
                            <div class="media-left">
                              <i class="fa fa-home"></i>
                            </div>
                            <div class="media-body">
                              <h4 class="">Invoice Discounting</h4>
                              <p>
                                This will be available to SMES that are already in business.
                              </p>
                            </div>
                          </div>
                      </article><!-- End article -->
                  </div><!-- End Services Warp -->
               </div> <!-- End Row -->
           </div><!-- End container -->
        </section>

        <!-- Component Courter Up -->
        <section>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="counter-up counter-up-style-1 text-center">
                  <h2>We are help you to grow your business</h2>
                  <p>
                    SMES are facing working capital challenges by holding unpaid Invoices or taking
                    too long before payments are received for services or goods provided to
                    businesses. Stawi Capital seeks to solve this financing challenge by developing a
                    web-based online

                  </p>
                  <ul>
                    <li>
                      <p><span class="couterup" id="yoe"></span></p>
                      <span class="label-counter">Mobile Application</span>
                    </li>
                    <li>
                      <p><span class="couterup" id="hc"></span><span class="unit"></span></p>
                      <span class="label-counter">Services</span>
                    </li>
                    <li>
                      <p><span class="couterup" id="satis"></span><span class="unit">%</span></p>
                      <span class="label-counter">Customers Satisfaction</span>
                    </li>
                  </ul>
                </div><!-- End counter up -->
              </div> <!-- End cold -->
            </div><!-- End row -->
          </div><!-- End container -->
        </section><!-- End Section -->
       

       
        <!-- Component Get a Call Back-->
        <section class="bg-dark">
            <div class="container">
                <div class="row">
                  <div class="get-call-back-contain">
                    <div class="col-md-6 get-call-back-left">
                      <div class="call-back-text">
                        <h2 class="text-white">Get Application</h2>
                        <div class="clearfix"></div>
                        <p class="text-grey">Download our Mobile Application and Enjoy our services<br> from the comfort of your Mobile Phone.</p>
                      </div><!-- End call back text left -->
                    </div>
                    <div class="col-md-6 get-call-back-right">
                      <div class="call-back-form">
                        <form action="GET" method="POST">
                          <p>How can we help? *</p>
                          
                          <select class="form-control custom-form custom-select">
                            <option selected="selected">Discussions with Financial Experts</option>
                            <option>Meet Finance Assistant - PR Agency </option>
                            <option>Discussions with Senior Finance Manager</option>
                            <option>Designer</option>
                            <option>Our CEO Finanace Theme Group</option>
                          </select>
                          <div class="row">
                            <div class="form-group col-md-6 custom-form">
                              <input type="text" class="form-control" id="name" placeholder="Your Name: *">
                            </div>
                            <div class="form-group col-md-6 custom-form">
                              <input type="text" class="form-control" id="phone" placeholder="Phone Number: *">
                            </div>
                          </div>
                          <button type="submit" class="ot-btn large-btn btn-rounded btn-main-color btn-submit">DOWNLOAD</button>
                        </form>
                      </div><!-- End call back form -->
                    </div>
                  </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </section><!-- End Section -->
        
        <!-- Section Text 3 Column-->
        <section class="bg-grey">
            <div class="container">
               <div class="row">
                        <div class="three-column-text"> 
                          <h2 class="title ">We Makes It Easy</h2>
                          <div class="col-md-4">
                            <div class="make-easy-item">
                               <h4>Whatever</h4>
                               <p>
                                  Stawi capital is developing a mobile
                                  application system that will enable Individual borrower’s access loans up to kes
                                  50,000 to their mobile phones within 30seconds.
                               </p>
                            </div>
                          </div><!-- end col -->
                          <div class="col-md-4">
                            <div class="make-easy-item">
                              <h4>Wherever</h4>
                              <p>
                                  Stawi Capital seeks to solve this financing challenge by developing a web-based online.
                              </p>
                            </div>
                          </div><!-- end col -->
                          <div class="col-md-4">
                            <div class="make-easy-item">
                              <h4>Whenever</h4>
                              <p>
                                Invoice discounting system that will enable SMES to convert their invoices into cash within 24hrs.
                              </p>
                            </div>
                          </div><!-- end col -->
                        </div> <!-- End 3 column text -->
              </div><!-- End row -->
            </div><!-- End Container -->
        </section><!-- End Section -->
      
        <!-- Component Our Partners Owl -->
        <section>
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h2 class="title">Our Partners</h2>
                      <div class="customNavigation">
                          <a class="btn prev-partners"><i class="fa fa-angle-left"></i></a>
                          <a class="btn next-partners"><i class="fa fa-angle-right"></i></a>
                      </div><!-- End owl button -->
                      <div id="owl-partners" class="owl-carousel owl-theme owl-partners clearfix">
                        
                        <div class="item">
                            <a href="#">
                              <img src="images/frontend/partners/helasoft-logo.png" class="img-responsive" alt="Image">
                            </a>
                        </div>
                        <div class="item">
                            &nbsp;
                        </div>
                        <div class="item">
                            <a href="#">
                              <img src="images/frontend/partners/stawicapital-logo.png" class="img-responsive" alt="Image">
                            </a>
                        </div>
                        
                      </div>

                  </div><!-- End row partners -->
              </div><!-- End Row -->
          </div>
        </section><!-- End container -->
        
        <!-- Footer --> 
        @include('partials.frontend.footer')
        <!-- End  -->

    </div>
    <!-- End Page -->

@stop