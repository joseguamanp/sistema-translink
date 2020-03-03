<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Geeks Coins</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App Icons -->
        <link rel="shortcut icon"href="{{asset('assets/images/favicon.ico')}}">

        <!--Morris Chart CSS -->
        <link rel="stylesheet"href="{{asset('assets/plugins/morris/morris.css')}}">
        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
        @yield('head')
    </head>
    <body>
        <!-- Loader -->
        <div  style="display:none;" id="preloader"><div id="status"><div class="spinner"></div></div></div>
        <div class="header-bg">
            <header id="topnav">
                <div class="topbar-main">
                    <div class="container-fluid">
                        <!-- Logo container-->
                        <div class="logo">
                            <!-- Text Logo -->
                            <a href="{{url('home')}}" class="logo">
                                Geeks
                            </a>
                        </div>
                        <!-- End Logo container-->
                        <div class="menu-extras topbar-custom">
                            <ul class="list-inline float-right mb-0">
                              @guest
                                  <li><a href="{{ route('login') }}">Login</a></li>
                                  <li><a href="{{ route('register') }}">Register</a></li>
                              @else
                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <img src="{{url('assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                                        <span class="ml-1">{{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i> </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                      <a class="dropdown-item" data-toggle="modal" data-target="#cambiar_clave"><i class="dripicons-user text-muted"></i>Cambiar Clave</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <i class="dripicons-exit text-muted"></i>
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                              @endguest
                                <li class="menu-item list-inline-item">
                                    <!-- Mobile menu toggle-->
                                    <a class="navbar-toggle nav-link">
                                        <div class="lines">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                    <!-- End mobile menu toggle-->
                                </li>

                            </ul>
                        </div>
                        <!-- end menu-extras -->
                        <div class="clearfix"></div>
                    </div> <!-- end container -->
                </div>
                <!-- end topbar-main -->
                <!-- MENU Start -->
                <div class="navbar-custom">
                    <div class="container-fluid">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            @guest
                            @else
                            <ul class="navigation-menu">
                                
                            </ul>
                            @endguest
                            <!-- End navigation menu -->
                        </div> <!-- end #navigation -->
                    </div> <!-- end container -->
                </div> <!-- end navbar-custom -->
            </header>
        </div>
        <div class="wrapper">
            <div class="container-fluid">
                @yield('content')
            </div> <!-- end container -->
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © {{date('Y')}} Geeks Ecuador
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
        <!--Morris Chart-->
        <script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>
        <script src="{{asset('assets/pages/dashboard.js')}}"></script>
        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        @yield('script')
    </body>
</html>
