<!--start side-menu-->
<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="grey with-sub">
            <a href="{!! route('company.dashboard') !!}">
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Company Dashboard</span>
            </a>
        </li>
        <!-- <li class="magenta">
            <a href="#">
                <i class="font-icon glyphicon glyphicon-send"></i>
                <span class="lbl">Mail</span>
            </a>
        </li> -->
        <li class="red">
            <a href="{!! route('company.employee.index', $company->id) !!}" class="label-right">
                <i class="font-icon font-icon-contacts"></i>
                <span class="lbl">Employees</span>
                <span class="label label-custom label-pill label-danger">
                    {!! DB::table('users')->count(); !!}
                </span>
            </a>
        </li>
        <li class="blue with-sub">
            <a href="{!! route('company.show', $company->id) !!}">
                <i class="font-icon font-icon-user"></i>
                <span class="lbl">Profile</span>
            </a>
        </li>
      
        <li class="orange-red with-sub">
            <a href="{!! route('support') !!}">
                <i class="font-icon font-icon-help"></i>
                <span class="lbl">Support</span>
            </a>            
        </li>
    </ul>

</nav>
<!--end side-menu