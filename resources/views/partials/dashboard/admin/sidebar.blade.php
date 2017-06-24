<!--start side-menu-->
<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="grey with-sub">
            <a href="{!! route('admin.dashboard') !!}">
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Admin Dashboard</span>
            </a>
        </li>
        
        <li class="red">
            <a href="{!! route('admin.users.index') !!}" class="label-right">
                <i class="font-icon font-icon-contacts"></i>
                <span class="lbl">Students</span>
                <span class="label label-custom label-pill label-danger">{!! DB::table('users')->count(); !!}</span>
            </a>
        </li>
        <li class="magenta">
            <a href="{!! route('admin.course.index') !!}">
                <i class="font-icon glyphicon glyphicon-send"></i>
                <span class="lbl">Courses</span>
            </a>
        </li>
        <li class="magenta">
            <a href="{!! route('admin.unit.index') !!}">
                <i class="font-icon glyphicon glyphicon-send"></i>
                <span class="lbl">Units</span>
            </a>
        </li>
        <li class="magenta">
            <a href="{!! route('admin.attendance.create') !!}">
                <i class="font-icon glyphicon glyphicon-send"></i>
                <span class="lbl">Scan</span>
            </a>
        </li>
        <li class="magenta">
            <a href="{!! route('admin.attendance.index') !!}">
                <i class="font-icon glyphicon glyphicon-send"></i>
                <span class="lbl">All Attendances</span>
            </a>
        </li>
    </ul>

</nav>
<!--end side-menu