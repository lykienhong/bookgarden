<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a class="brand-link">
            <img src="{{ asset('img/book-logo.png') }}"
                
                class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">BOOKGARDEN</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('img/admin.png') }}" class="img-circle elevation-2">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Admin</a>
                </div>
                
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>
                                Menu
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('admin/admin-index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh s??ch s???n ph???m</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('admin/create-product') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>T???o s???n ph???m m???i</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('admin/admin-category') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh s??ch c??c th??? lo???i s??ch</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('admin/create-category') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>T???o th??? lo???i s??ch m???i</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('admin/create-sales') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>T???o nh??n vi??n m???i</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('admin/admin-sales-information') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh s??ch nh??n vi??n</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('admin/admin-information') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Qu???n l?? ng?????i d??ng</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('admin/admin-order') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Qu???n l?? ????n ?????t h??ng c???a kh??ch h??ng</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('admin/admin-feedback') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Qu???n l?? ph???n h???i c???a ng?????i d??ng</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('admin/admin-comment') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Qu???n l?? b??nh lu???n c???a ng?????i d??ng</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('logoutAdmin')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>????ng xu???t</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</body>
</html>