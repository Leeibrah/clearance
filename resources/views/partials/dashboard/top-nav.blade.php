<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button class="navbar-toggle visible-xs visible-sm collapsed pull-left" id="showLeftPush" type="button">
                <i class="md md-menu"></i>
            </button> 
            <!-- <a class="navbar-brand" href="{!! route('home') !!}">
                @section('title') 
                    {{ app_name() }} 
                @show
            </a> -->
            <a href="{!! route('home') !!}">
                <img src="/images/stawicapital-logo.png" class="img-responsive" alt="Image">
            </a>
            <button class="navbar-toggle pull-right" id="showRightPush" type="button">
                <i class="md md-more-vert"></i>
            </button>
        </div>
        <div class="hidden-xs">
            <ul class="nav navbar-nav">
                <!-- <li class="active">
                    <a href="{!! route('admin.dashboard') !!}">Admin</a>
                </li>
                <li>
                    <a href="../sidebar-mini/{!! route('admin.dashboard') !!}">Sidebar-Mini</a>
                </li>
                <li>
                    <a href="../fixed/{!! route('admin.dashboard') !!}">Fixed</a>
                </li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active dropdown">
                    <button class="btn btn-default navbar-btn btn-rounded"
                    data-toggle="dropdown"><i class=
                    "md md-notifications"></i></button>
                    <div class=
                    "dropdown-menu dropdown-caret dropdown-caret-right width-300">
                    <div class="dropdown-padding dropdown-headline">
                            <div class="media dropdown-head">
                                <div class="media-body media-middle">
                                    <h4 class="">Notifications
                                    <small class="bold text-muted">(3
                                    new)</small></h4>
                                </div>
                                <div class="media-right media-middle">
                                    <a class="text-muted" href=
                                    "#"><i class="md md-list"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-padding">
                            <div class="notification-block body-bg">
                                <span class=
                                "notification-icon orange"><i class=
                                "md md-comment"></i></span> <span class=
                                "notification-content">Andrew replied to
                                <a href="#">"How do I use
                                Grunt?"</a></span> <small>2 min ago</small>
                            </div>
                            <div class="notification-block body-bg">
                                <span class=
                                "notification-icon green"><i class=
                                "md md-today"></i></span> <span class=
                                "notification-content">Event <a href=
                                "#">SEO Conference</a> started</span>
                                <small>2 min ago</small>
                            </div>
                            <div class="notification-block body-bg">
                                <span class=
                                "notification-icon primary"><i class=
                                "md md-timelapse"></i></span> <span class=
                                "notification-content">2h 40min left to
                                <a href="#">General Board
                                Meeting</a>.</span> <small>2 min
                                ago</small>
                            </div>
                        </div>
                        <div class="dropdown-padding text-center">
                            <a href="#">View all</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <button class=
                    "btn btn-default-light navbar-btn btn-rounded"
                    data-toggle="dropdown"><i class=
                    "md md-language"></i></button>
                    <ul class=
                    "dropdown-menu dropdown-caret dropdown-caret-right dropdown-menu-auto">
                    <li>
                            <a href="#">English</a>
                        </li>
                        <li>
                            <a href="#">German</a>
                        </li>
                        <li>
                            <a href="#">French</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <button class="btn btn-primary navbar-btn btn-rounded"
                    data-toggle="dropdown"><i class=
                    "md md-email"></i></button>
                    <div class=
                    "dropdown-menu dropdown-caret dropdown-caret-right width-300">
                    <div class="dropdown-padding">
                            <a class="notification-block" href=
                            "#"><span class=
                            "notification-icon primary"><i class=
                            "md md-email"></i></span> <span class=
                            "notification-content">Hi Andrew, Is it ok to
                            meet tomorrow?</span> <small>2 min
                            ago</small></a>
                        </div>
                        <div class="dropdown-padding">
                            <a class="notification-block" href=
                            "#"><span class=
                            "notification-icon primary"><i class=
                            "md md-email"></i></span> <span class=
                            "notification-content">Hi Andrew, Is it ok to
                            meet tomorrow?</span> <small>2 min
                            ago</small></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="btn-group navbar-btn">
                        <a class="btn btn-default" href=
                        "login.html"><i class="md md-lock"></i> Login</a>
                        <a class="btn btn-orange" href="signup.html">Sign
                        up</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
