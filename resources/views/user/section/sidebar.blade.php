<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="#" class="brand-link text-right">

        <span class="brand-text font-weight-light text-right">پنل کاربری</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('images\admin.png')}}" class="img-circle elevation-5" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">
                        {{Illuminate\Support\Facades\Auth::user()->firstName}} {{Illuminate\Support\Facades\Auth::user()->lastName}}
                    </a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active text-right">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p >
                                داشبوردها

                            </p>
                        </a>
                        <ul class="nav nav-treeview has-treeview menu-open">

                                <li class="nav-item">
                                    <a href="#" class="nav-link  text-right ">
                                        <i class="fa fa-dashboard  nav-icon"></i>
                                        <p>داشبورد</p>
                                    </a>
                                </li>





                              {{--  <li class="nav-item">
                                    <a href="{{route('Role.index')}}" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>نقش ها</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('Permission.index')}}" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>دسترسی ها</p>
                                    </a>
                                </li>

                            <li class="nav-item">

                                <a href="" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>پست ها</p>

                                </a>
                            </li>--}}
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
