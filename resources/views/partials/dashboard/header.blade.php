<!--start site-header-->
<header class="site-header">
    <div class="container-fluid">
        <a href="#" class="site-logo">
            <!-- <div class="hidden-md-down">
                ATTENDANCE SYSTEM
            </div> -->
            <img class="hidden-md-down" src="/images/saslogo.png" alt="{!! app_name() !!}">
        </a>
        <button class="hamburger hamburger--htla">
            <span>toggle menu</span>
        </button>
        <div class="site-header-conten">
            <div class="site-header-content-in">
            	<!--start site-header-shown-->
                <div class="site-header-shown">                    

                    <div class="dropdown user-menu">
                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/backend/img/avatar-2-64.png" alt="">
                        </button>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                            <a class="dropdown-item" href="#">
                                <span class="font-icon glyphicon glyphicon-user"></span>
                                Settings
                            </a>
                 
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">
                            	<span class="font-icon glyphicon glyphicon-log-out"></span>
                            	Logout
                            </a>
                        </div>
                    </div>

                    <button type="button" class="burger-right">
                        <i class="font-icon-menu-addl"></i>
                    </button>
                </div>
                <!--end site-header-shown-->
                
            </div><!--site-header-content-in-->
        </div><!--.site-header-content-->
    </div><!--.container-fluid-->
</header>
<!--end site-header