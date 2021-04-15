<html style="height: auto; min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CMS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet"
        href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet"
        href="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            box-sizing: content-box;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>

<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
    <div class="wrapper" style="height: auto; min-height: 100%;">

        <header class="main-header">

            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu"></div>

            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar" style="height: auto;">
                <!-- Sidebar user panel -->


                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu tree" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>


                    <li>
                        <a href="/">
                            <i class="fa fa-th"></i> <span>CRUD CARD</span>
                        </a>
                    </li>
                    <li>
                        <a href="/level">
                            <i class="fa fa-th"></i> <span>CRUD LEVEL</span>
                        </a>
                    </li>
                    <li>
                        <a href="/score">
                            <i class="fa fa-th"></i> <span>DATA SCORE</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div style="padding-right: 60px;" class="container">
                @yield('content')
            </div>
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.13
            </div>
            <strong>Copyright © 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li class="active"><a href="#control-sidebar-theme-demo-options-tab" data-toggle="tab"><i
                            class="fa fa-wrench"></i></a></li>
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <div id="control-sidebar-theme-demo-options-tab" class="tab-pane active">
                    <div>
                        <h4 class="control-sidebar-heading">Layout Options</h4>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-layout="fixed" class="pull-right"> Fixed layout</label>
                            <p>Activate the fixed layout. You can't use fixed and boxed layouts together</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-layout="layout-boxed" class="pull-right"> Boxed Layout</label>
                            <p>Activate the boxed layout</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-layout="sidebar-collapse" class="pull-right"> Toggle Sidebar</label>
                            <p>Toggle the left sidebar's state (open or collapse)</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-enable="expandOnHover" class="pull-right"> Sidebar Expand on Hover</label>
                            <p>Let the sidebar mini expand on hover</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-controlsidebar="control-sidebar-open" class="pull-right"> Toggle Right Sidebar
                                Slide</label>
                            <p>Toggle between slide over content and push content effects</p>
                        </div>
                        <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox"
                                    data-sidebarskin="toggle" class="pull-right"> Toggle Right Sidebar Skin</label>
                            <p>Toggle between dark and light skins for the right sidebar</p>
                        </div>
                        <h4 class="control-sidebar-heading">Skins</h4>
                        <ul class="list-unstyled clearfix">
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span
                                            class="bg-light-blue"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Blue</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span
                                            style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span>
                                    </div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Black</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-purple-active"></span><span class="bg-purple"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Purple</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-green" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-green-active"></span><span class="bg-green"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Green</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-red-active"></span><span class="bg-red"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Red</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-yellow" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-yellow-active"></span><span class="bg-yellow"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Yellow</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-blue-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span
                                            class="bg-light-blue"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Blue Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-black-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span
                                            style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span>
                                    </div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Black Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-purple-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-purple-active"></span><span class="bg-purple"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Purple Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-green-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-green-active"></span><span class="bg-green"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Green Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-red-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-red-active"></span><span class="bg-red"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Red Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-yellow-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-yellow-active"></span><span class="bg-yellow"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Yellow Light</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.tab-pane -->

                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked="">
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked="">
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked="">
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked="">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i
                                        class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="https://adminlte.io/themes/AdminLTE/dist/js/adminlte.min.js"></script>
    <!-- Sparkline -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js">
    </script>
    <!-- jvectormap  -->
    <script src="https://adminlte.io/themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="https://adminlte.io/themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js">
    </script>
    <!-- ChartJS -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/chart.js/Chart.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="https://adminlte.io/themes/AdminLTE/dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="https://adminlte.io/themes/AdminLTE/dist/js/demo.js"></script>
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js">
    </script>
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
    </script>
    <script>
        $('#table-score').dataTable()
    </script>

    <div class="jvectormap-label"></div>
</body>

</html>