<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        @viteReactRefresh
        @vite(['resources/css/app.css', 'resources/js/app.jsx'])
        @inertiaHead
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">
             <!-- Navbar -->
             <nav class="navbar-custom">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                        </span>
                        <span>
                            <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topbar-nav float-right mb-0">

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline nav-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications (258)
                            </h6>
                            <div class="slimscroll notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                    <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" />
                            <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                    <li class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link" id="mobileToggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                </ul>

                <ul class="list-unstyled topbar-nav mb-0">
                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fas fa-search"></i></a>
                        </form>
                    </li>

                </ul>

            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
        <div class="page-wrapper-img">
            <div class="page-wrapper-img-inner">
                <div class="sidebar-user media">
                    <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
                    <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
                    <div class="media-body">
                        <h5 class="text-light">Mr. Michael Hill </h5>
                        <ul class="list-unstyled list-inline mb-0 mt-2">
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-account text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-settings text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-power text-danger"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right align-item-center mt-2">
                                <button class="btn btn-info px-4 align-self-center report-btn">Create Report</button>
                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-view-dashboard-outline mr-2"></i>Dashboard</h4>
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Dashboard-2</li>
                                </ol>
                            </div>
                        </div><!--end page title box-->
                    </div><!--end col-->
                </div><!--end row-->
                <!-- end page title end breadcrumb -->
            </div><!--end page-wrapper-img-inner-->
        </div><!--end page-wrapper-img-->

        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Navbar Custom Menu -->
                <div class="navbar-custom-menu">

                    <div class="container-fluid">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu list-unstyled">

                                <li class="has-submenu">
                                    <a href="#">
                                        <i class="mdi mdi-monitor"></i>
                                        Dashboard
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="index.html">Dashboard 1</a></li>
                                        <li><a href="index-2.html">Dashboard 2</a></li>
                                        <li><a href="index-3.html">Dashboard 3</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="mdi mdi-apps"></i>Apps</a>
                                    <ul class="submenu">
                                        <li><a href="app-chat.html">Chat</a></li>
                                        <li><a href="app-calendar.html">Calendar</a></li>
                                        <li class="has-submenu">
                                            <a href="#">ECommerce</a>
                                            <ul class="submenu">
                                                <li><a href="app-ecommerce-product.html">Product</a></li>
                                                <li><a href="app-ecommerce-product-list.html">Product List</a></li>
                                                <li><a href="app-ecommerce-product-detail.html">Product Detail</a></li>
                                                <li><a href="app-ecommerce-cart.html">Cart</a></li>
                                                <li><a href="app-ecommerce-checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="app-contact-list.html">Contact List</a></li>
                                        <li class="has-submenu">
                                            <a href="#">Email</a>
                                            <ul class="submenu">
                                                <li><a href="app-email-inbox.html">Inbox</a></li>
                                                <li><a href="app-email-read.html">Read Email</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="mdi mdi-buffer"></i>Advanced UI</a>
                                    <ul class="submenu">
                                        <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                        <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>
                                        <li><a href="advanced-nestable.html">Nestable List</a></li>
                                        <li><a href="advanced-ratings.html">Ratings</a></li>
                                        <li><a href="advanced-highlight.html">Highlight</a></li>
                                        <li><a href="advanced-session.html">Session Timeout</a></li>
                                        <li><a href="advanced-idle-timer.html">Idle Timer</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="mdi mdi-cards-playing-outline"></i>UI Elements</a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                                <li><a href="ui-alerts.html">Alerts</a></li>
                                                <li><a href="ui-buttons.html">Buttons</a></li>
                                                <li><a href="ui-cards.html">Cards</a></li>
                                                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                                <li><a href="ui-modals.html">Modals</a></li>
                                                <li><a href="ui-typography.html">Typography</a></li>
                                                <li><a href="ui-progress.html">Progress</a></li>
                                                <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><a href="ui-tooltips-popovers.html">Tooltips & Popover</a></li>
                                                <li><a href="ui-carousel.html">Carousel</a></li>
                                                <li><a href="ui-pagination.html">Pagination</a></li>
                                                <li><a href="ui-grid.html">Grid System</a></li>
                                                <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                                                <li><a href="ui-spinners.html">Spinners</a></li>
                                                <li><a href="ui-toasts.html">Toasts</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><p class="font-12 mb-0 py-2 rounded-pill mt-2 badge badge-soft-success">Extra Components</p></li>
                                                <li><a href="ui-other-animation.html">Animation</a></li>
                                                <li><a href="ui-other-avatar.html">Avatar</a></li>
                                                <li><a href="ui-other-clipboard.html">Clip Board</a></li>
                                                <li><a href="ui-other-files.html">File Meneger</a></li>
                                                <li><a href="ui-other-ribbons.html">Ribbons</a></li>
                                                <li><a href="ui-other-dragula.html">Dragula</a></li>
                                                <li><a href="ui-other-check-radio.html">Check & Radio Buttons</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="mdi mdi-arrow-down-drop-circle-outline"></i>More</a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="#">Icons</a>
                                            <ul class="submenu">
                                                <li><a href="icons-materialdesign.html">Material Design</a></li>
                                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                                <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                                <li><a href="icons-themify.html">Themify</a></li>
                                                <li><a href="icons-typicons.html">Typicons</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Tables </a>
                                            <ul class="submenu">
                                                <li><a href="tables-basic.html">Basic</a></li>
                                                <li><a href="tables-datatable.html">Datatables</a></li>
                                                <li><a href="tables-responsive.html">Responsive</a></li>
                                                <li><a href="tables-footable.html">Footable</a></li>
                                                <li><a href="tables-jsgrid.html">Jsgrid</a></li>
                                                <li><a href="tables-editable.html">Editable</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Forms</a>
                                            <ul class="submenu">
                                                <li><a href="forms-elements.html">Basic Elements</a></li>
                                                <li><a href="forms-advanced.html">Advance Elements</a></li>
                                                <li><a href="forms-validation.html">Validation</a></li>
                                                <li><a href="forms-wizard.html">Wizard</a></li>
                                                <li><a href="forms-editors.html">Editors</a></li>
                                                <li><a href="forms-repeater.html">Repeater</a></li>
                                                <li><a href="forms-x-editable.html">X Editable</a></li>
                                                <li><a href="forms-uploads.html">File Upload</a></li>
                                                <li><a href="forms-img-crop.html">Image Crop</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Maps</a>
                                            <ul class="submenu">
                                                <li><a href="maps-google.html">Google Maps</a></li>
                                                <li><a href="maps-vector.html">Vector Maps</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Email Templates</a>
                                            <ul class="submenu">
                                                <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                                                <li><a href="email-templates-alert.html">Alert Email</a></li>
                                                <li><a href="email-templates-billing.html">Billing Email</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="mdi mdi-chart-bar"></i>Charts</a>
                                    <ul class="submenu">
                                        <li><a href="charts-apex.html">Apex</a></li>
                                        <li><a href="charts-morris.html">Morris</a></li>
                                        <li><a href="charts-chartist.html">Chartist</a></li>
                                        <li><a href="charts-flot.html">Flot</a></li>
                                        <li><a href="charts-peity.html">Peity</a></li>
                                        <li><a href="charts-chartjs.html">Chartjs</a></li>
                                        <li><a href="charts-sparkline.html">Sparkline</a></li>
                                        <li><a href="charts-knob.html">Jquery Knob</a></li>
                                        <li><a href="charts-justgage.html">JustGage</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="mdi mdi-book-open-page-variant"></i>Pages</a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                                <li><a href="page-tour.html">Tour</a></li>
                                                <li><a href="page-timeline.html">Timeline</a></li>
                                                <li><a href="page-invoice.html">Invoice</a></li>
                                                <li><a href="page-treeview.html">Treeview</a></li>
                                                <li><a href="page-profile.html">Profile</a></li>
                                                <li><a href="page-pricing.html">Pricing</a></li>
                                                <li><a href="page-blogs.html">Blogs</a></li>

                                                <li><a href="page-gallery.html">Gallery</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><a href="page-faq.html">FAQs</a></li>
                                                <li><a href="page-starter.html">Starter Page</a></li>
                                                <li><a href="auth-login.html">Login</a></li>
                                                <li><a href="auth-register.html">Register</a></li>
                                                <li><a href="auth-recoverpw.html">Recover Password</a></li>
                                                <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                                <li><a href="auth-404.html">Error 404</a></li>
                                                <li><a href="auth-500.html">Error 500</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- End navigation menu -->
                        </div> <!-- end navigation -->
                    </div> <!-- end container-fluid -->
                </div>
                <!-- end left-sidenav-->
            </div>
            <!--end page-wrapper-inner -->
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    @inertia
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                    </div><!--end row-->
                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    Footer
                </footer>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
        <script>
            const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
        </script>
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>

        <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <script src="assets/pages/jquery.dashboard-2.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
