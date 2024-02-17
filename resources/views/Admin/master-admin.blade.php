<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title_admin') | کنترل پنل</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('Admin/dist/css/bootstrap-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/dist/css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/bower_components/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/dist/css/AdminLTE.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/dist/css/customize-adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/dist/css/costom.css') }}">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a href="/home" class="logo">
                <span class="logo-mini">پنل</span>
                <span class="logo-lg"><b>کنترل پنل مدیریت</b></span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="user-image"
                                    alt="User Image">
                                <span class="hidden-xs">سینا پیرزاده</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle"
                                        alt="User Image">
                                    <p>
                                        پیرزاده
                                        <small>مدیریت کل سایت</small>
                                    </p>
                                </li>

                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="/admin/users/{{ auth()->user()->id }}" class="btn btn-default btn-flat">پروفایل</a>
                                    </div>
                                    <div class="pull-right">
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-default btn-flat">خروج</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-flat">خروج</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">

            <section class="sidebar">

                <div class="user-panel">
                    <div class="pull-right image">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-right info">
                        <p>{{ auth()->user()->name }}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> ادمین</a>
                    </div>
                </div>

                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="جستجو">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                    class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>

                <ul class="sidebar-menu" data-widget="tree">
                    <li class="active"><a href="/admin/home"><i class="fa fa-dashboard"></i><span>داشبورد</span></a>
                    </li>
                    <li class="active"><a href="{{route('users')}}"><i class="fa fa-inbox"></i><span>
                                کاربران</span></a></li>
                    <li class="active treeview menu-open"><a href="#"><i class="fa fa-th-large"></i> <span> دسته
                                بندی
                                ها</span>
                            <span class="pull-left-container">
                                <i class="fa fa-angle-right pull-left"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: none">
                            <li><a href="/admin/products_category"><i class="fa fa-circle-o"></i>دسته بندی محصولات</a>
                            </li>
                            <li><a href="/admin/articales_category"><i class="fa fa-circle-o"></i>دسته بندی مقالات</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="/admin/products"><i class="fa fa-inbox"></i> <span>
                                محصولات</span></a></li>
                    <li class="active"><a href="/admin/products"><i class="fa fa-file-text"></i> <span>
                                مقالات</span></a></li>
                    <li class="active treeview menu-open"><a href="#"><i class="fa fa-commenting"></i> <span>
                                پیام ها</span>
                            <span class="pull-left-container">
                                <i class="fa fa-angle-right pull-left"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: none">
                            <li><a href="/admin/comments/product"><i class="fa fa-circle-o"></i>پیام های محصولات</a>
                            </li>
                            <li><a href="/admin/comments"><i class="fa fa-circle-o"></i>پیام های مقالات</a></li>
                        </ul>
                    </li>
                    <li class="active treeview menu-open"><a href="#"><i class="fa fa-commenting"></i> <span>
                                صفحات سایت</span>
                            <span class="pull-left-container">
                                <i class="fa fa-angle-right pull-left"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: none">
                            <li><a href=""><i class="fa fa-circle-o"></i>درباره ما</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i>تماس با ما</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="/admin/products"><i class="fa fa-archive"></i> <span> شفارشات
                                مشتریان</span></a></li>
                    <li class="active"><a href="/admin/products"><i class="fa fa-envelope"></i> <span>ایمیل های
                                دریافتی</span></a></li>
                </ul>
            </section>
        </aside>

        <div class="content-wrapper">
            @yield('main')
        </div>
    </div>

    <script src="{{ asset('Admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('Admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Admin/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('Admin/dist/js/demo.js') }}"></script>
</body>

</html>
