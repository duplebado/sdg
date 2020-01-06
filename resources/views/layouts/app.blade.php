<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('admin/img/favicon.png')}}">
        <!-- Scripts -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
        <title>SDG Impact at a Glance</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('admin/css/bootstrap-reset.css')}}" rel="stylesheet">
        <!--external css-->
        <link href="{{ asset('admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        <!--right slidebar-->
        <link href="{{ asset('admin/css/slidebars.css')}}" rel="stylesheet">

        @yield('style')

        <!-- Custom styles for this template -->
        <link href="{{ asset('admin/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('admin/css/style-responsive.css')}}" rel="stylesheet" />

    </head>

    <body>

    <section id="container" class="">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <i class="fa fa-bars"></i>
            </div>
            <!--logo start-->
            <a href="/" class="logo">SDG <span>Impact Project</span></a>
            <!--logo end-->
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{ asset('admin/img/avatar1_small.jpg')}}">
                            <span class="username">{{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout dropdown-menu-right">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
                    <!-- <li class="sb-toggle-right">
                        <i class="fa  fa-align-right"></i>
                    </li> -->
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a href="/home">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-laptop"></i>
                            <span>Projects</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="/projects">All Projects</a></li>
                            <li><a  href="/create/project">Add Project</a></li>
                        </ul>
                    </li>
                    @if(Auth::user()->id == 1)
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Users</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="/users">All Users</a></li>
                            <li><a  href="/user/add">Create User</a></li>
                        </ul>
                    </li>
                    @endif
                    <!--multi level menu end-->

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                @yield('content')

                    <!-- Right Slidebar start -->
                <div class="sb-slidebar sb-right sb-style-overlay">
                    <h5 class="side-title">Online Customers</h5>
                    <ul class="quick-chat-list">
                        <li class="online">
                            <div class="media">
                                <a href="#" class="">
                                    <img alt="" src="img/chat-avatar2.jpg" class="mr-3 rounded-circle">
                                </a>
                                <div class="media-body">
                                    <strong>John Doe</strong>
                                    <small>Dream Land, AU</small>
                                </div>
                            </div><!-- media -->
                        </li>
                        <li class="online">
                            <div class="media">
                                <a href="#" class="">
                                    <img alt="" src="img/chat-avatar.jpg" class="mr-3 rounded-circle">
                                </a>
                                <div class="media-body">
                                    <div class="media-status">
                                        <span class=" badge bg-important">3</span>
                                    </div>
                                    <strong>Jonathan Smith</strong>
                                    <small>United States</small>
                                </div>
                            </div><!-- media -->
                        </li>

                        <li class="online">
                            <div class="media">
                                <a href="#" class="">
                                    <img alt="" src="img/pro-ac-1.png" class="mr-3 rounded-circle">
                                </a>
                                <div class="media-body">
                                    <div class="media-status">
                                        <span class=" badge badge-success">5</span>
                                    </div>
                                    <strong>Jane Doe</strong>
                                    <small>ABC, USA</small>
                                </div>
                            </div><!-- media -->
                        </li>
                        <li class="online">
                            <div class="media">
                                <a href="#" class="">
                                    <img alt="" src="img/avatar1.jpg" class="mr-3 rounded-circle">
                                </a>
                                <div class="media-body">
                                    <strong>Anjelina Joli</strong>
                                    <small>Fockland, UK</small>
                                </div>
                            </div><!-- media -->
                        </li>
                        <li class="online">
                            <div class="media">
                                <a href="#" class="">
                                    <img alt="" src="img/mail-avatar.jpg" class="mr-3 rounded-circle">
                                </a>
                                <div class="media-body">
                                    <div class="media-status">
                                        <span class=" badge bg-warning">7</span>
                                    </div>
                                    <strong>Mr Tasi</strong>
                                    <small>Dream Land, USA</small>
                                </div>
                            </div><!-- media -->
                        </li>
                    </ul>
                    <h5 class="side-title"> pending Task</h5>
                    <ul class="p-task tasks-bar">
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Dashboard v1.3</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress">
                                    <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-striped bg-success">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Database Update</div>
                                    <div class="percent">60%</div>
                                </div>
                                <div class="progress">
                                    <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-striped bg-warning">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Iphone Development</div>
                                    <div class="percent">87%</div>
                                </div>
                                <div class="progress">
                                    <div style="width: 87%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-striped bg-info">
                                        <span class="sr-only">87% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Mobile App</div>
                                    <div class="percent">33%</div>
                                </div>
                                <div class="progress">
                                    <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-striped bg-danger">
                                        <span class="sr-only">33% Complete (danger)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Dashboard v1.3</div>
                                    <div class="percent">45%</div>
                                </div>
                                <div class="progress">
                                    <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-striped">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </div>
                <!-- Right Slidebar end -->

                <!--footer start-->
                <footer class="site-footer">
                    <div class="text-center">
                        2020 &copy; SDG Impact
                        <a href="#" class="go-top">
                            <i class="fa fa-angle-up"></i>
                        </a>
                    </div>
                </footer>
                <!--footer end-->
            </section>
    </section>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ asset('admin/js/jquery.js')}}"></script>
        <script src="{{ asset('admin/js/bootstrap.bundle.min.js')}}"></script>
        <script class="include" type="text/javascript" src="{{ asset('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
        <script src="{{ asset('admin/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{ asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/respond.min.js')}}" ></script>

        <!--right slidebar-->
        <script src="{{ asset('admin/js/slidebars.min.js')}}"></script>


        <!--Form Validation-->
        <script src="{{ asset('admin/js/bootstrap-validator.min.js')}}" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="{{ asset('admin/js/jquery.steps.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/jquery.validate.min.js')}}" type="text/javascript"></script>


        <!--common script for all pages-->
        <script src="{{ asset('admin/js/common-scripts.js')}}"></script>

        <!--script for this page-->
        <script src="{{ asset('admin/js/jquery.stepy.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        @yield('script')
    </body>
</html>
