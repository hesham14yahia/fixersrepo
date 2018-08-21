<!DOCTYPE html>
<html>
    @include('inc.headers')
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        @include('inc.navbar')
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{url('/img/avatar3.png')}}" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Jane Doe</p>

                            <a href="#"><i class="fa fa-circle text-danger"></i> Admin</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Fixer</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{url('/')}}"><i class="fa fa-angle-double-right"></i> Fixer List</a></li>
                                <li><a href="{{url('/create')}}"><i class="fa fa-angle-double-right"></i> Add Fixer</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Location</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{url('/location/')}}"><i class="fa fa-angle-double-right"></i> Locations List</a></li>
                                <li><a href="{{url('/location/create')}}"><i class="fa fa-angle-double-right"></i> Add Locations</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Category</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{url('/categiry/')}}"><i class="fa fa-angle-double-right"></i> Category List</a></li>
                                <li><a href="{{url('/categiry/create')}}"><i class="fa fa-angle-double-right"></i> Add Category</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <aside class="right-side">
                <h1 class="content-header page-header">
                    @yield('page_header')
                </h1>
                <div class="row">
                    @yield('filters')
                </div>
                <div class="row">
                    @yield('content')
                </div>
            </aside>
        </div><!-- ./wrapper -->

        @include('inc.scripts')        

    </body>
</html>