<!--start side-menu-->
<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="grey with-sub">
            <a href="{!! route('user.dashboard') !!}">
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">User Dashboard</span>
            </a>
        </li>

        <li class="blue with-sub">
            <a href="{!! route('user.show', $user->id) !!}">
                <i class="font-icon font-icon-user"></i>
                <span class="lbl">Profile</span>
            </a>
        </li>

        <li class="blue with-sub">
            <a href="{!! route('user.edit', $user->id) !!}">
                <i class="font-icon font-icon-user"></i>
                <span class="lbl">Edit Profile</span>
            </a>
        </li>

        <li class="blue-dirty">
            <a href="{!! route('user.loans.index') !!}" class="label-right">
                <i class="font-icon font-icon-notebook"></i>
                <span class="lbl">Loans</span>
                <!-- <span class="label label-custom label-pill label-danger">{!! DB::table('companies')->count(); !!}</span> -->
            </a>
        </li>

    </ul>

</nav>
<!--end side-menu