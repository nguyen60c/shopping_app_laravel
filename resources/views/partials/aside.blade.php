<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>DashBoard</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link nav-dropdown-toggle">
                        <i class="fa-fw nav-icon fas fa-users"></i>
                        <p>Managing Users</p>
                        <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                    </a>

                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-fw nav-icon fas fa-unlock-alt"></i>
                                <p>
                                    Permissions
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fa-fw nav-icon fas fa-briefcase"></i>
                                <p>
                                    Roles
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://127.0.0.1:1234/admin/users" class="nav-link ">
                                <i class="fa-fw nav-icon fas fa-user"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="fa-fw nav-icon fas fa-shopping-cart">

                        </i>
                        <p>
                            Product Management
                            <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fa-fw nav-icon fas fa-folder"></i>
                                <p>
                                    Categories
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fa-fw nav-icon fas fa-folder">

                                </i>
                                <p>
                                    Tags
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fa-fw nav-icon fas fa-shopping-cart">

                                </i>
                                <p>
                                    Products
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="http://127.0.0.1:1234/profile/password">
                        <i class="fa-fw fas fa-key nav-icon">
                        </i>
                        <p>
                            Changing Password
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon"></i>
                        </p>
                        <p>Logout</p>
                        <p></p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>
