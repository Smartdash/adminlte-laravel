<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 @yield('sidebar-class')">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard.v2') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3 + Laravel 8</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item {{ Route::is('dashboard.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Route::is('dashboard.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.v1') }}" class="nav-link {{ Route::is('dashboard.v1') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.v2') }}" class="nav-link {{ Route::is('dashboard.v2') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.v3') }}" class="nav-link {{ Route::is('dashboard.v3') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.widgets') }}" class="nav-link {{ Route::is('pages.widgets') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Widgets
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Route::is('pages.layout.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Route::is('pages.layout.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Layout Options
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pages.layout.top-nav') }}" class="nav-link {{ Route::is('pages.layout.top-nav') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.layout.top-nav-sidebar') }}" class="nav-link {{ Route::is('pages.layout.top-nav-sidebar') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation + Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.layout.boxed') }}" class="nav-link {{ Route::is('pages.layout.boxed') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Boxed</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.layout.fixed-sidebar') }}" class="nav-link {{ Route::is('pages.layout.fixed-sidebar') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.layout.fixed-sidebar-custom-area') }}" class="nav-link {{ Route::is('pages.layout.fixed-sidebar-custom-area') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Sidebar <small>+ Custom Area</small></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.layout.fixed-navbar') }}" class="nav-link {{ Route::is('pages.layout.fixed-navbar') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Navbar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.layout.fixed-footer') }}" class="nav-link {{ Route::is('pages.layout.fixed-footer') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Footer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.layout.collapsed-sidebar') }}" class="nav-link {{ Route::is('pages.layout.collapsed-sidebar') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Collapsed Sidebar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Route::is('pages.charts.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Route::is('pages.charts.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Charts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pages.charts.chartjs') }}" class="nav-link {{ Route::is('pages.charts.chartjs') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ChartJS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.charts.flot') }}" class="nav-link {{ Route::is('pages.charts.flot') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Flot</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.charts.inline-chart') }}" class="nav-link {{ Route::is('pages.charts.inline-chart') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.charts.uplot') }}" class="nav-link {{ Route::is('pages.charts.uplot') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>uPlot</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Route::is('pages.ui.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Route::is('pages.ui.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            UI Elements
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pages.ui.general') }}" class="nav-link {{ Route::is('pages.ui.general') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                                <p>General</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.ui.icons') }}" class="nav-link {{ Route::is('pages.ui.icons') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Icons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.ui.buttons') }}" class="nav-link {{ Route::is('pages.ui.buttons') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Buttons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.ui.sliders') }}" class="nav-link {{ Route::is('pages.ui.sliders') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sliders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.ui.modals') }}" class="nav-link {{ Route::is('pages.ui.modals') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Modals & Alerts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.ui.navbar') }}" class="nav-link {{ Route::is('pages.ui.navbar') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Navbar & Tabs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.ui.timeline') }}" class="nav-link {{ Route::is('pages.ui.timeline') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Timeline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.ui.ribbons') }}" class="nav-link {{ Route::is('pages.ui.ribbons') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ribbons</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Route::is('pages.forms.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Route::is('pages.forms.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pages.forms.general') }}" class="nav-link {{ Route::is('pages.forms.general') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.forms.advanced') }}" class="nav-link {{ Route::is('pages.forms.advanced') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Advanced Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.forms.editors') }}" class="nav-link {{ Route::is('pages.forms.editors') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Editors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.forms.validation') }}" class="nav-link {{ Route::is('pages.forms.validation') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Validation</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Route::is('pages.tables.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Route::is('pages.tables.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pages.tables.simple') }}" class="nav-link {{ Route::is('pages.tables.simple') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Tables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.tables.data') }}" class="nav-link {{ Route::is('pages.tables.data') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>DataTables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.tables.jsgrid') }}" class="nav-link {{ Route::is('pages.tables.jsgrid') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>jsGrid</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="{{ route('pages.celendar') }}" class="nav-link {{ Route::is('pages.celendar') ? 'active' : '' }}">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.gallery') }}" class="nav-link {{ Route::is('pages.gallery') ? 'active' : '' }}">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.kanban') }}" class="nav-link {{ Route::is('pages.kanban') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Kanban Board
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Route::is('pages.mailbox.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Route::is('pages.mailbox.*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pages.mailbox.inbox') }}" class="nav-link {{ Route::is('pages.mailbox.inbox') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.mailbox.compose') }}" class="nav-link {{ Route::is('pages.mailbox.compose') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.mailbox.read-mail') }}" class="nav-link {{ Route::is('pages.mailbox.read-mail') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Route::is('pages.examples.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Route::is('pages.examples.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.invoice') }}" class="nav-link {{ Route::is('pages.examples.invoice') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.profile') }}" class="nav-link {{ Route::is('pages.examples.profile') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.e-commerce') }}" class="nav-link {{ Route::is('pages.examples.e-commerce') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>E-commerce</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.projects') }}" class="nav-link {{ Route::is('pages.examples.projects') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.project-add') }}" class="nav-link {{ Route::is('pages.examples.project-add') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.project-edit') }}" class="nav-link {{ Route::is('pages.examples.project-edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Edit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.project-detail') }}" class="nav-link {{ Route::is('pages.examples.project-detail') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Detail</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.contacts') }}" class="nav-link {{ Route::is('pages.examples.contacts') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contacts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.faq') }}" class="nav-link {{ Route::is('pages.examples.faq') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>FAQ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.contact-us') }}" class="nav-link {{ Route::is('pages.examples.contact-us') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.legacy-user-menu') }}" class="nav-link {{ Route::is('pages.examples.legacy-user-menu') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Legacy User Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.language-menu') }}" class="nav-link {{ Route::is('pages.examples.language-menu') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Language Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.error-404') }}" class="nav-link {{ Route::is('pages.examples.error-404') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 404</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.error-500') }}" class="nav-link {{ Route::is('pages.examples.error-500') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 500</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.pace') }}" class="nav-link {{ Route::is('pages.examples.pace') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pace</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.blank') }}" class="nav-link {{ Route::is('pages.examples.blank') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blank Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Extras
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Login & Register v1
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('pages.examples.login') }}" class="nav-link {{ Route::is('pages.examples.login') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Login v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pages.examples.register') }}" class="nav-link {{ Route::is('pages.examples.register') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pages.examples.forgot-password') }}" class="nav-link {{ Route::is('pages.examples.forgot-password') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Forgot Password v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pages.examples.recover-password') }}" class="nav-link {{ Route::is('pages.examples.recover-password') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Recover Password v1</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Login & Register v2
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('pages.examples.login-v2') }}" class="nav-link {{ Route::is('pages.examples.login-v2') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Login v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pages.examples.register-v2') }}" class="nav-link {{ Route::is('pages.examples.register-v2') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pages.examples.forgot-password-v2') }}" class="nav-link {{ Route::is('pages.examples.forgot-password-v2') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Forgot Password v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pages.examples.recover-password-v2') }}" class="nav-link {{ Route::is('pages.examples.recover-password-v2') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Recover Password v2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.examples.lockscreen') }}" class="nav-link {{ Route::is('pages.examples.lockscreen') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lockscreen</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Route::is('pages.search.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Route::is('pages.search.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-search"></i>
                        <p>
                            Search
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pages.search.simple') }}" class="nav-link {{ Route::is('pages.search.simple') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Search</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.search.enhanced') }}" class="nav-link {{ Route::is('pages.search.enhanced') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Enhanced</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">MISCELLANEOUS</li>
                <li class="nav-item">
                    <a href="https://thesmartdash.com/docs/3.1/" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Documentation</p>
                    </a>
                </li>
                <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Level 1
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Level 2
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                    </a>
                </li>
                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    @if(Route::is('pages.layout.fixed-sidebar-custom-area'))
        <div class="sidebar-custom">
            <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
            <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a>
        </div>
        <!-- /.sidebar-custom -->
    @endif
</aside>
