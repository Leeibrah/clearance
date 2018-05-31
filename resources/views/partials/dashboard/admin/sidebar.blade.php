<!--start side-menu-->
<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="grey with-sub">
            <a href="{!! route('admin.dashboard') !!}">
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">ADMIN/HOD Dashboard</span>
            </a>
        </li>
        
        <li class="red">
            <a href="{!! route('admin.users.index') !!}" class="label-right">
                <i class="font-icon font-icon-contacts"></i>
                <span class="lbl">Students</span>
            </a>
        </li>

        <li class="green">
            <a href="{!! route('admin.lecturer.index') !!}" class="label-right">
                <i class="font-icon font-icon-home"></i>
                <span class="lbl">Departments</span>
            </a>
        </li>

        <li class="magenta">
            <a href="{!! route('admin.course.index') !!}">
                <i class="font-icon glyphicon glyphicon-send"></i>
                <span class="lbl">Clearances</span>
            </a>
        </li>
       
    </ul>

</nav>
<!--end side-menu