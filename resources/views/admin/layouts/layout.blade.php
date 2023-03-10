<!DOCTYPE html>
<html lang="en">

<head>
    <title>Instaget | Admin Dashboard</title>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords"
        content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    {{-- < !-- Favicon icon --> --}}
    <link rel="icon" href="assets/s/favicon.ico" type="image/x-icon">
    {{-- < !-- Google font--> --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    {{-- < !-- Required Fremwork --> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/bootstrap/css/bootstrap.min.css') }}">
    {{-- < !-- themify-icons line icon --> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/icon/themify-icons/themify-icons.css') }}">
    {{-- < !-- ico font --> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/icon/icofont/css/icofont.css ') }}">
    {{-- < !-- Style.css --> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/jquery.mCustomScrollbar.css') }}">
    {{-- For Colors  --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>


<body>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo"><a class="mobile-menu" id="mobile-collapse" href="#!"><i
                                class="ti-menu"></i></a><a class="mobile-search morphsearch-search" href="#"><i
                                class="ti-search"></i></a><a href="index.html"><img class="img-fluid"
                                src="{{ asset('admin_assets/images/logo.png') }}" alt="Theme-Logo" /></a><a
                            class="mobile-options"><i class="ti-more"></i></a></div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                            <li><a href="#!" onclick="javascript:toggleFullScreen()"><i
                                        class="ti-fullscreen"></i></a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            {{-- <li class="header-notification"><a href="#!"><i class="ti-bell"></i><span
                                        class="badge bg-c-pink"></span></a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6><label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media"><img class="d-flex align-self-center img-radius"
                                                src="{{ asset('admin_assets/images/avatar-4.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet,
                                                    consectetuer elit.</p><span class="notification-time">30 minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img class="d-flex align-self-center img-radius"
                                                src="{{ asset('admin_assets/images/avatar-3.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet,
                                                    consectetuer elit.</p><span class="notification-time">30 minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img class="d-flex align-self-center img-radius"
                                                src="{{ asset('admin_assets/images/avatar-4.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet,
                                                    consectetuer elit.</p><span class="notification-time">30 minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="user-profile header-notification"><a href="#!"><img
                                        src="{{ asset('admin_assets/images/avatar-4.jpg') }}" class="img-radius"
                                        alt="User-Profile-Image"><span>Admin</span><i class="ti-angle-down"></i></a>
                                <ul class="show-notification profile-notification">
                                    <li><a href="#!"><i class="ti-settings"></i>Settings </a></li>
                                    <li><a href="#"><i class="ti-user"></i>Profile </a></li>
                                    <li><a href="{{ route('admin.logout') }}"><i class="ti-layout-sidebar-left"></i>Logout
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="{{  request()->routeIs('admin.dashboard')? 'active' : '' }}">
                                    <a href="{{ route('admin.dashboard') }}">
                                        <span class="pcoded-micon">
                                            <i class="ti-home"></i><b>D</b>
                                        </span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                                <li class="{{  request()->routeIs('admin.services.*')? 'active' : '' }}">
                                    <a href="{{ route('admin.services.index') }}"><span class="pcoded-micon">
                                        <i class="ti-layers"></i><b>FC</b></span><span class="pcoded-mtext"
                                            data-i18n="nav.form-components.main">Services</span><span
                                            class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="{{  request()->routeIs('admin.category.*')? 'active' : '' }}">
                                    <a href="{{ route('admin.category.index') }}"><span class="pcoded-micon">
                                            <i class="ti-layers"></i><b>FC</b></span><span class="pcoded-mtext"
                                            data-i18n="nav.form-components.main">Categories</span><span
                                            class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="{{  request()->routeIs('admin.subcategory.*')? 'active' : '' }}">
                                    <a href="{{ route('admin.subcategory.index') }}">
                                        <span class="pcoded-micon">
                                            <i class="ti-layers"></i><b>FC</b></span><span class="pcoded-mtext"
                                            data-i18n="nav.form-components.main"> Sub Categories</span><span
                                            class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="{{  request()->routeIs('admin.review.*')? 'active' : '' }}">
                                    <a href="{{ route('admin.review.create') }}">
                                        <span class="pcoded-micon">
                                            <i class="ti-layers"></i><b>FC</b></span><span class="pcoded-mtext"
                                            data-i18n="nav.form-components.main">Review</span><span
                                            class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="{{  request()->routeIs('admin.general.*')? 'active' : '' }}">
                                    <a href="{{ route('admin.general.index') }}">
                                        <span class="pcoded-micon">
                                            <i class="ti-layers"></i><b>FC</b></span><span class="pcoded-mtext"
                                            data-i18n="nav.form-components.main">General</span><span
                                            class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="{{  request()->routeIs('front.feedback.*')? 'active' : '' }}">
                                    <a href="{{ route('front.feedback.index') }}">
                                        <span class="pcoded-micon">
                                            <i class="ti-layers"></i><b>FC</b></span><span class="pcoded-mtext"
                                            data-i18n="nav.form-components.main">Feedback</span><span
                                            class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="{{  request()->routeIs('admin.blog.*')? 'active' : '' }}">
                                    <a href="{{ route('admin.blog.index') }}">
                                        <span class="pcoded-micon">
                                            <i class="ti-layers"></i><b>FC</b></span><span class="pcoded-mtext"
                                            data-i18n="nav.form-components.main">Blog</span><span
                                            class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                                {{-- <li class="{{  request()->routeIs('admin.package.*')? 'active' : '' }}">
                                    <a href="{{ route('admin.package.index') }}">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span
                                            class="pcoded-mtext"data-i18n="nav.form-components.main">Packages</span><span
                                            class="pcoded-mcaret"></span>
                                    </a>
                                </li> --}}

                            </ul>

                        </div>
                    </nav>
                    <div class="pcoded-content">
                        @yield('container')
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('admin_assets/js/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin_assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin_assets/js/popper.js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin_assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
        {{-- < !-- jquery slimscroll js --> --}}
        <script type="text/javascript" src="{{ asset('admin_assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
        {{-- < !-- modernizr js --> --}}
        <script type="text/javascript" src="{{ asset('admin_assets/js/modernizr/modernizr.js') }}"></script>
        {{-- < !-- am chart --> --}}
        <script src="{{ asset('admin_assets/pages/widget/amchart/amcharts.min.js') }}"></script>
        <script src="{{ asset('admin_assets/pages/widget/amchart/serial.min.js') }}"></script>
        {{-- < !-- Todo js --> --}}
        <script type="text/javascript " src="{{ asset('admin_assets/pages/todo/todo.js') }} "></script>
        {{-- < !-- Custom js --> --}}
        <script type="text/javascript" src="{{ asset('admin_assets/pages/dashboard/custom-dashboard.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin_assets/js/script.js') }}"></script>
        <script type="text/javascript " src="{{ asset('admin_assets/js/SmoothScroll.js') }}"></script>
        <script src="{{ asset('admin_assets/js/pcoded.min.js') }}"></script>
        <script src="{{ asset('admin_assets/js/demo-12.js') }}"></script>
        <script src="{{ asset('admin_assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
</body>

</html>
