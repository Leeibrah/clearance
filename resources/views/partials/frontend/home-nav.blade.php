  <!-- START HEADER -->
  <header id="sticked-menu" class="header header-v1">
        <div class="logo">
              <div class="mm-toggle">
                  <i class="fa fa-bars"></i><span class="mm-label">Menu</span>
              </div> <!-- End button mobile menu -->
              <a href="{!! route('home') !!}"><img src="images/logo.png" class="img-responsive" alt="Image"></a>
        </div><!-- End Logo -->

        <!-- End Navi Desktop -->
        <nav class="navi-desktop-site">
              <ul class="navi-level-1">
                  <li><a href="{!! route('home') !!}">Home</a></li>
                  <li><a href="{!! route('about') !!}">About Us</a></li>
                  <li><a href="{!! route('services') !!}">Services</a></li>
                  <li><a href="{!! route('contacts') !!}">Contact Us</a></li>
                                          
              </ul>
        </nav>
        <!-- End Navi Desktop -->

        <div class="navi-right">
            <ul>
                <li >
                    <span class="has-icon sm-icon">
                    <span class="lnr lnr-phone-handset icon-set-1 icon-xs">
                      <span class="fa fa-phone"></span>
                    </span> 
                    <span class="sub-text-icon text-middle sub-text-middle">(+254) 723 563 980</span>
                  </span>
                </li>
                <li>
                  <a href="{!! route('auth.login') !!}" class="ot-btn btn-rounded btn-hightlight-color">
                    Login
                  </a>
                </li>
            </ul>
        </div>
  </header>
  <!-- END HEADER -->
 
  <!-- Slider -->
  <div class="no-padding">
    <div class="slider slider-dark-arrow slider-home-1">
      <div class="fullwidthbanner-container">
          <div id="revolution-slider-home-1">
            <ul>
              
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" data-delay="4000">
                  <!-- MAIN IMAGE -->
                  <img src="/images/frontend/slider/3.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center" data-bgrepeat="no-repeat">
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption sfr stt h2-text"
                    data-x="0" 
                    data-y="298"
                    data-speed="400" 
                    data-start="1000"
                    data-easing="easeInOut"
                    >Finance Focus
                  </div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption sfr stt h1-text"
                    data-x="0" 
                    data-y="381" 
                    data-speed="400"
                    data-start="1400"
                    data-easing="easeInOut"
                    >Road to Success
                  </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption sfr stb h3-text"
                    data-x="0" 
                    data-y="455" 
                   
                    data-speed="400"
                    data-start="1700"
                    data-easing="easeInOut"
                   style="max-width: 565px">
                     Listen to what you want for your future, then together we create a plan to help you get there
                  </div>

                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption sfr stb group-btn-slider"
                    data-x="0" 
                    data-y="580" 
                  
                    data-speed="400"
                    data-start="1900"
                    data-easing="easeInOut"
                    > 
                    <a href="{!! route('services') !!}" class="ot-btn large-btn btn-rounded btn-main-color btn-1">Our Services</a>  
                  </div>
                </li>
            </ul>
          </div>
      </div>
    </div>
  </div>
  <!-- Slider Revolution End -->