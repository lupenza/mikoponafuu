<ul class="metismenu list-unstyled" id="side-menu">
    <li class="menu-title" key="t-menu">Dashboard</li>
    <li>
        <a href="" class="waves-effect">
            <i class="bx bx-user"></i>
            <span key="t-file-manager">Home</span>
        </a>
    </li>
    <li class="menu-title" key="t-menu">Company</li>
    <li>
        <a href="{{ route('companies.index')}}" class="waves-effect">
            <i class="bx bx-user"></i>
            <span key="t-file-manager">Companies</span>
        </a>
    </li>
    <li class="menu-title" key="t-menu">User Management</li>
    <li>
        <a href="{{ route('users.index')}}" class="waves-effect">
            <i class="bx bx-user"></i>
            <span key="t-file-manager">Users</span>
        </a>
    </li>
    <li>
        <a href="{{ route('roles.index')}}" class="waves-effect">
            <i class="bx bx-align-justify"></i>
            <span key="t-file-manager">Roles</span>
        </a>
    </li>
    <li>
        <a href="{{ route('permissions.index')}}" class="waves-effect">
            <i class="bx bx-key"></i>
            <span key="t-file-manager">Permissions</span>
        </a>
    </li>
    <li>
        <a href="{{ route('logout')}}" class="waves-effect">
            <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
            <span key="t-file-manager">Logout</span>
        </a>
    </li>

</ul>