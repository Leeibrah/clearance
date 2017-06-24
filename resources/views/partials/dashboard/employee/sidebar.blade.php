<!--start side-menu-->
<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="grey with-sub">
            <a href="{!! route('employee.dashboard') !!}">
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Employee Dashboard</span>
            </a>
        </li>

        <!-- <li class="blue with-sub">
            <a href="{!! route('employee.edit', $user->id) !!}">
                <i class="font-icon font-icon-user"></i>
                <span class="lbl">Profile</span>
            </a>
        </li> -->

        <li class="purple with-sub">
            <span>
                <i class="font-icon font-icon-user"></i>
                <span class="lbl">Profile</span>
            </span>
            <ul>
                <li><a href="#"><span class="lbl">Profile</span></a></li>
                <li><a href="{!! route('employee.basic.edit', $user->id) !!}"><span class="lbl">Edit Basic Information</span></a></li>
                <li><a href="{!! route('employee.edit', $user->id) !!}"><span class="lbl">Edit Employee Information</span></a></li>
                <!-- <li><a href="chat-index.html"><span class="lbl">Select User</span></a></li> -->
            </ul>
        </li>

        <li class="blue-dirty">
            <a href="{!! route('employee.loan', $user->id) !!}" class="label-right">
                <i class="font-icon font-icon-notebook"></i>
                <span class="lbl">Loans</span>
                <!-- <span class="label label-custom label-pill label-danger">{!! DB::table('companies')->count(); !!}</span> -->
            </a>
        </li>

    </ul>

</nav>
<!--end side-menu