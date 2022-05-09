<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Buttons</title>

  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->


        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="menu-list"><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="index_alt.html"> Dashboard 1</a></li>
                        <li><a href="index.html"> Dashboard 2</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>Layouts</span></a>
                    <ul class="sub-menu-list">
                        <li ><a href="blank_page.html"> Blank Page</a></li>
                        <li><a href="boxed_view.html"> Boxed Page</a></li>
                        <li><a href="leftmenu_collapsed_view.html"> Sidebar Collapsed</a></li>
                        <li><a href="horizontal_menu.html"> Horizontal Menu</a></li>

                    </ul>
                </li>
                <li class="menu-list nav-active"><a href=""><i class="fa fa-book"></i> <span>UI Elements</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="general.html"> General</a></li>
                        <li class="active"><a href="buttons.html"> Buttons</a></li>
                        <li><a href="tabs-accordions.html"> Tabs & Accordions</a></li>
                        <li><a href="typography.html"> Typography</a></li>
                        <li><a href="slider.html"> Slider</a></li>
                        <li><a href="panels.html"> Panels</a></li>
                        <li><a href="widgets.html"> Widgets</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>Components</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="grids.html"> Grids</a></li>
                        <li><a href="gallery.html"> Media Gallery</a></li>
                        <li><a href="calendar.html"> Calendar</a></li>
                        <li><a href="tree_view.html"> Tree View</a></li>
                        <li><a href="nestable.html"> Nestable</a></li>

                    </ul>
                </li>

                <li><a href="fontawesome.html"><i class="fa fa-bullhorn"></i> <span>Fontawesome</span></a></li>

                <li class="menu-list"><a href=""><i class="fa fa-envelope"></i> <span>Mail</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="mail.html"> Inbox</a></li>
                        <li><a href="mail_compose.html"> Compose Mail</a></li>
                        <li><a href="mail_view.html"> View Mail</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="form_layouts.html"> Form Layouts</a></li>
                        <li><a href="form_advanced_components.html"> Advanced Components</a></li>
                        <li><a href="form_wizard.html"> Form Wizards</a></li>
                        <li><a href="form_validation.html"> Form Validation</a></li>
                        <li><a href="editors.html"> Editors</a></li>
                        <li><a href="inline_editors.html"> Inline Editors</a></li>
                        <li><a href="pickers.html"> Pickers</a></li>
                        <li><a href="dropzone.html"> Dropzone</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="flot_chart.html"> Flot Charts</a></li>
                        <li><a href="morris.html"> Morris Charts</a></li>
                        <li><a href="chartjs.html"> Chartjs</a></li>
                        <li><a href="c3chart.html"> C3 Charts</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="fa fa-th-list"></i> <span>Data Tables</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="basic_table.html"> Basic Table</a></li>
                        <li><a href="dynamic_table.html"> Advanced Table</a></li>
                        <li><a href="responsive_table.html"> Responsive Table</a></li>
                        <li><a href="editable_table.html"> Edit Table</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="google_map.html"> Google Map</a></li>
                        <li><a href="vector_map.html"> Vector Map</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="profile.html"> Profile</a></li>
                        <li><a href="invoice.html"> Invoice</a></li>
                        <li><a href="pricing_table.html"> Pricing Table</a></li>
                        <li><a href="timeline.html"> Timeline</a></li>
                        <li><a href="blog_list.html"> Blog List</a></li>
                        <li><a href="blog_details.html"> Blog Details</a></li>
                        <li><a href="directory.html"> Directory </a></li>
                        <li><a href="chat.html"> Chat </a></li>
                        <li><a href="404.html"> 404 Error</a></li>
                        <li><a href="500.html"> 500 Error</a></li>
                        <li><a href="registration.html"> Registration Page</a></li>
                        <li><a href="lock_screen.html"> Lockscreen </a></li>
                    </ul>
                </li>
                <li><a href="login.html"><i class="fa fa-sign-in"></i> <span>Login Page</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--search start-->
        <form class="searchform" action="http://view.jqueryfuns.com/2014/4/10/7_df25ceea231ba5f44f0fc060c943cdae/index.html" method="post">
            <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
        </form>
        <!--search end-->

        <!--notification menu start -->
        <div class="menu-right">
            <ul class="notification-menu">
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="badge">8</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">You have 8 pending task</h5>
                        <ul class="dropdown-list user-list">
                            <li class="new">
                                <a href="#">
                                    <div class="task-info">
                                        <div>Database update</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                            <span class="">40%</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="new">
                                <a href="#">
                                    <div class="task-info">
                                        <div>Dashboard done</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                            <span class="">90%</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Web Development</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info">
                                            <span class="">66% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Mobile App</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="">33% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Issues fixed</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar">
                                            <span class="">80% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="new"><a href="">See All Pending Task</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">You have 5 Mails </h5>
                        <ul class="dropdown-list normal-list">
                            <li class="new">
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user1.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user2.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jonathan Smith</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jane Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user4.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Mark Henry</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="images/photos/user5.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jim Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li class="new"><a href="">Read All Mails</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">Notifications</h5>
                        <ul class="dropdown-list normal-list">
                            <li class="new">
                                <a href="">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #1 overloaded.  </span>
                                    <em class="small">34 mins</em>
                                </a>
                            </li>
                            <li class="new">
                                <a href="">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #3 overloaded.  </span>
                                    <em class="small">1 hrs</em>
                                </a>
                            </li>
                            <li class="new">
                                <a href="">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #5 overloaded.  </span>
                                    <em class="small">4 hrs</em>
                                </a>
                            </li>
                            <li class="new">
                                <a href="">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #31 overloaded.  </span>
                                    <em class="small">4 hrs</em>
                                </a>
                            </li>
                            <li class="new"><a href="">See All Notifications</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="images/photos/user-avatar.png" alt="" />
                        John Doe
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Buttons
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">UI Elements</a>
                </li>
                <li class="active"> Buttons Elements </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                Default Buttons
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                <p>Use any of the available button classes to quickly create a styled button.</p>
                <button class="btn btn-default" type="button">Default</button>
                <button class="btn btn-primary" type="button">Primary</button>
                <button class="btn btn-success" type="button">Success</button>
                <button class="btn btn-info" type="button">Info</button>
                <button class="btn btn-warning" type="button">Warning</button>
                <button class="btn btn-danger" type="button">Danger</button>
                <button class="btn btn-link" type="button">Link</button>
            </div>
        </section>

            <div class="row">
                <div class="col-md-6">
                    <section class="panel">
                        <header class="panel-heading">
                             Buttons Sizes
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.</p>
                            <div class=" ">
                                <p>
                                    <button class="btn btn-primary btn-lg" type="button">Large button</button>
                                    <button class="btn btn-default btn-lg" type="button">Large button</button>
                                </p>
                                <p>
                                    <button class="btn btn-primary" type="button">Default button</button>
                                    <button class="btn btn-info" type="button">Default button</button>
                                    <button class="btn btn-default" type="button">Default button</button>
                                </p>
                                <p>
                                    <button class="btn btn-primary btn-sm" type="button">Small button</button>
                                    <button class="btn btn-default btn-sm" type="button">Small button</button>
                                    <button class="btn btn-danger btn-sm" type="button">Small button</button>
                                </p>
                                <p>
                                    <button class="btn btn-primary btn-xs" type="button">Extra small button</button>
                                    <button class="btn btn-default btn-xs" type="button">Extra small button</button>
                                </p>
                                <p>
                                    <button class="btn btn-info btn-xs" type="button">Extra small button</button>
                                    <button class="btn btn-success btn-xs" type="button">Extra small button</button>
                                    <button class="btn btn-warning btn-xs" type="button">Extra small button</button>
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-6">
                    <section class="panel">
                        <header class="panel-heading">
                            block level buttons
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <p>Create block level buttons&mdash;those that span the full width of a parent&mdash; by adding <code>.btn-block</code>.</p>
                            <p>
                                <button class="btn btn-success btn-lg btn-block" type="button">Block level button</button>
                                <button class="btn btn-warning btn-block" type="button">Block level button</button>
                                <button class="btn btn-danger btn-xs btn-block" type="button">Block level button</button>
                            </p>
                            <div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg btn-block"</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span>
                            </code></pre></div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Disabled Buttons
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
                            <button disabled="disabled" class="btn btn-primary " type="button">Primary button</button>
                            <button disabled="disabled" class="btn btn-default " type="button">Button</button>
                        </div>
                    </section>
                </div>
                <div class="col-md-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Button tags
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                            <form>
                                <a role="button" href="#" class="btn btn-primary">Link</a>
                                <button type="submit" class="btn btn-primary">Button</button>
                                <input type="button" value="Input" class="btn btn-primary">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </form>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Buttons Groups
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
                            <div style="margin: 9px 0 5px;" class="btn-group">
                                <button class="btn btn-default" type="button">Left</button>
                                <button class="btn btn-default" type="button">Middle</button>
                                <button class="btn btn-default" type="button">Right</button>
                            </div>
                            <div style="margin: 9px 0 5px;" class="btn-group">
                                <button class="btn btn-primary" type="button">Left</button>
                                <button class="btn btn-primary" type="button">Middle</button>
                                <button class="btn btn-primary" type="button">Right</button>
                            </div>
                            <h4>Button toolbar</h4>
                            <p>Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex components.</p>
                            <div>
                                <div style="margin: 0;" role="toolbar" class="btn-toolbar">
                                    <div class="btn-group">
                                        <button class="btn btn-default" type="button">1</button>
                                        <button class="btn btn-default" type="button">2</button>
                                        <button class="btn btn-default" type="button">3</button>
                                        <button class="btn btn-default" type="button">4</button>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-default" type="button">5</button>
                                        <button class="btn btn-default" type="button">6</button>
                                        <button class="btn btn-default" type="button">7</button>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-default" type="button">8</button>
                                    </div>
                                </div>
                            </div>
                            <h4>Nesting</h4>
                            <p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.</p>
                            <div>
                                <div class="btn-group">
                                    <button class="btn btn-default" type="button">1</button>
                                    <button class="btn btn-default" type="button">2</button>

                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" id="btnGroupDrop1">
                                            Dropdown
                                            <span class="caret"></span>
                                        </button>
                                        <ul aria-labelledby="btnGroupDrop1" role="menu" class="dropdown-menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-success" type="button">1</button>
                                    <button class="btn btn-success" type="button">2</button>

                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="button" id="btnGroupDrop1">
                                            Dropdown
                                            <span class="caret"></span>
                                        </button>
                                        <ul aria-labelledby="btnGroupDrop1" role="menu" class="dropdown-menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    <div class="row">
                        <div class="col-md-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Button dropdowns
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                     </span>
                                </header>
                                <div class="panel-body">
                                    <p>Turn a button into a dropdown toggle with some basic markup changes.</p>
                                    <div>
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Default <span class="caret"></span></button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Primary <span class="caret"></span></button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="button">Success <span class="caret"></span></button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-info dropdown-toggle" type="button">Info <span class="caret"></span></button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle" type="button">Warning <span class="caret"></span></button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->

                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Split button dropdowns
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                     </span>
                                </header>
                                <div class="panel-body">
                                    <p>Similarly, create split button dropdowns with the same markup changes, only with a separate button.</p>
                                    <div>
                                        <div class="btn-group">
                                            <button class="btn btn-default" type="button">Default</button>
                                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group">
                                            <button class="btn btn-primary" type="button">Primary</button>
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group">
                                            <button class="btn btn-success" type="button">Success</button>
                                            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="button">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group">
                                            <button class="btn btn-info" type="button">Info</button>
                                            <button data-toggle="dropdown" class="btn btn-info dropdown-toggle" type="button">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Sizing button dropdowns
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                     </span>
                                </header>
                                <div class="panel-body">
                                    <p>Button dropdowns work with buttons of all sizes.</p>
                                    <div>
                                        <p role="toolbar" class="btn-toolbar">
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" type="button" class="btn btn-default btn-lg dropdown-toggle">
                                                    Large button <span class="caret"></span>
                                                </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" type="button" class="btn btn-success btn-lg dropdown-toggle">
                                                    Large button <span class="caret"></span>
                                                </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                        </p><!-- /btn-toolbar -->
                                        <p role="toolbar" class="btn-toolbar">
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" type="button" class="btn btn-default btn-sm dropdown-toggle">
                                                    Small button <span class="caret"></span>
                                                </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" type="button" class="btn btn-warning btn-sm dropdown-toggle">
                                                    Small button <span class="caret"></span>
                                                </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" type="button" class="btn btn-info btn-sm dropdown-toggle">
                                                    Small button <span class="caret"></span>
                                                </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                        </p><!-- /btn-toolbar -->
                                        <p role="toolbar" class="btn-toolbar">
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" type="button" class="btn btn-default btn-xs dropdown-toggle">
                                                    Extra small button <span class="caret"></span>
                                                </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" type="button" class="btn btn-info btn-xs dropdown-toggle">
                                                    Extra small button <span class="caret"></span>
                                                </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" type="button" class="btn btn-danger btn-xs dropdown-toggle">
                                                    Extra small button <span class="caret"></span>
                                                </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                        </p><!-- /btn-toolbar -->
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Buttons Groups Sizing
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to the <code>.btn-group</code>.</p>
                            <p role="toolbar" class="btn-toolbar">
                            <div class="btn-group btn-group-lg">
                                <button class="btn btn-default" type="button">Left</button>
                                <button class="btn btn-default" type="button">Middle</button>
                                <button class="btn btn-default" type="button">Right</button>
                            </div>
                            </p>
                            <p role="toolbar" class="btn-toolbar">
                            <div class="btn-group">
                                <button class="btn btn-default" type="button">Left</button>
                                <button class="btn btn-default" type="button">Middle</button>
                                <button class="btn btn-default" type="button">Right</button>
                            </div>
                            </p>
                            <p role="toolbar" class="btn-toolbar">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-default" type="button">Left</button>
                                <button class="btn btn-default" type="button">Middle</button>
                                <button class="btn btn-default" type="button">Right</button>
                            </div>
                            </p>
                            <p role="toolbar" class="btn-toolbar">
                            <div class="btn-group btn-group-xs">
                                <button class="btn btn-default" type="button">Left</button>
                                <button class="btn btn-default" type="button">Middle</button>
                                <button class="btn btn-default" type="button">Right</button>
                            </div>
                            </p>
                        </div>
                    </section>

                    <div class="row">
                        <div class="col-md-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Justified Button groups
                                    <span class="tools pull-right">
                                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="fa fa-times" href="javascript:;"></a>
                                     </span>
                                </header>
                                <div class="panel-body">
                                    <p>Just wrap a series of <code>.btn</code>s in <code>.btn-group.btn-group-justified</code>.</p>
                                    <div class="btn-group btn-group-justified">
                                        <a href="#" class="btn btn-success">Left</a>
                                        <a href="#" class="btn btn-info">Middle</a>
                                        <a href="#" class="btn btn-danger">Right</a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Buttons With Icon
                                    <span class="tools pull-right">
                                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="fa fa-times" href="javascript:;"></a>
                                     </span>
                                </header>
                                <div class="panel-body">
                                    <p>
                                        <button class="btn btn-primary" type="button"><i class="fa fa-cloud"></i> Cloud</button>
                                        <button class="btn btn-success" type="button"><i class="fa fa-eye"></i> View </button>
                                        <button class="btn btn-info " type="button"><i class="fa fa-refresh"></i> Update</button>
                                        <button class="btn btn-default " type="button"><i class="fa fa-cloud-upload"></i> Upload</button>
                                        <button class="btn btn-warning" data-toggle="button">
                                            <i class="fa fa-thumbs-up "></i>
                                            89
                                        </button>
                                    </p>
                                    <p>
                                        <button class="btn btn-default" data-toggle="button">
                                            <i class="fa fa-book"></i>
                                        </button>
                                        <button class="btn btn-default" data-toggle="button">
                                            <i class="fa fa-cogs"></i>
                                        </button>
                                        <button class="btn btn-default" data-toggle="button">
                                            <i class="fa fa-list"></i>
                                        </button>
                                        <button class="btn btn-default" data-toggle="button">
                                            <i class="fa fa-desktop"></i>
                                        </button>
                                        <button class="btn btn-default" data-toggle="button">
                                            <i class="fa fa-file"></i>
                                        </button>
                                        <button class="btn btn-default" data-toggle="button">
                                            <i class="fa fa-lemon-o"></i>
                                        </button>
                                        <button class="btn btn-default" data-toggle="button">
                                            <i class="fa fa-lock"></i>
                                        </button>
                                        <button class="btn btn-default" data-toggle="button">
                                            <i class="fa fa-male"></i>
                                        </button>
                                        <button class="btn btn-default" data-toggle="button">
                                            <i class="fa fa-map-marker"></i>
                                        </button>
                                    </p>


                                    <div class="">
                                        <button class="btn btn-block btn-primary" type="button"> <span class="pull-left"><i class="fa fa-facebook"></i></span> <span class="bold">Login with Facebook</span></button>
                                        <button class="btn btn-block btn-info" type="button"> <span class="pull-left"><i class="fa fa-twitter"></i></span> <span class="bold">Login with Twitter</span></button>
                                        <button class="btn btn-block btn-danger" type="button"> <span class="pull-left"><i class="fa fa-google-plus"></i></span> <span class="bold">Login with Google +</span></button>
                                        <button class="btn btn-block btn-default" type="button"> <span class="pull-left"><i class="fa fa-flickr"></i></span> <span class="bold">Login with Flickr</span></button>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Star Rating Example
                                    <span class="tools pull-right">
                                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="fa fa-times" href="javascript:;"></a>
                                     </span>
                                </header>
                                <div class="panel-body">
                              <span class="rating">
                                  <span class="star"></span>
                                  <span class="star"></span>
                                  <span class="star"></span>
                                  <span class="star"></span>
                                  <span class="star"></span>
                              </span>
                                </div>
                            </section>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2014 &copy; AdminEx by ThemeBucket
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

</body>
</html>
