<!--start side-menu-->
<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="grey with-sub">
            <a href="{!! route('admin.dashboard') !!}">
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">User Dashboard</span>
            </a>
        </li>

        <li class="blue with-sub">
            <a href="{!! route('users.show', 1) !!}">
                <i class="font-icon font-icon-user"></i>
                <span class="lbl">Profile</span>
            </a>
        </li>

        <li class="blue with-sub">
            <a href="{!! route('users.edit', 1) !!}">
                <i class="font-icon font-icon-user"></i>
                <span class="lbl">Edit Profile</span>
            </a>
        </li>

        <li class="blue-dirty">
            <a href="{!! route('loans.index') !!}" class="label-right">
                <i class="font-icon font-icon-notebook"></i>
                <span class="lbl">Loans</span>
                <!-- <span class="label label-custom label-pill label-danger">{!! DB::table('companies')->count(); !!}</span> -->
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