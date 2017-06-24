<div class="sidebar left-side" id="sidebar-left">
    <div class="sidebar-user">
        <div class="media sidebar-padding">
            <div class="media-left media-middle">
                <img alt="person" class="img-circle" src="/images/backend/face-icon.png" style="width: 60px">
            </div>
            <div class="media-body media-middle">
                <a class="h4 margin-none" href="#">Administrator</a>
                <ul class="list-unstyled list-inline margin-none">
                    <li>
                        <a href="account.html">
                            <i class="md md-person-outline"></i>
                        </a>
                    </li>
                    <li>
                        <a href="email.html">
                            <i class="md md-email"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="md md-settings"></i>
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="md md-exit-to-app"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- Wrapper Reqired by Nicescroll (start scroll from here) -->
    <div class="nicescroll">
        <div class="wrapper" style="margin-bottom:90px">
            <ul class="nav nav-sidebar" id="sidebar-menu">
                <li style="list-style: none; display: inline">
                    <h4 class="sidebar-headline">Sidebar Menu</h4>
                </li>
                <li>
                    <a href="{!! route('admin.dashboard') !!}">
                        <i class="md md-desktop-mac"></i>
                        Dashboard 
                        <span class="sr-only">
                            (current)
                        </span>
                    </a>
                </li>      
        
                <li>
                    <a href="{!! route('admin.finances') !!}">
                        <i class="md md-attach-money"></i> 
                        Financial
                    </a>
                </li>                                                
            </ul>               
        </div>
    </div>
</div>