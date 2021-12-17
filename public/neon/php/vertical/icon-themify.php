<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Neon is a bootstrap, laravel & php admin dashboard template">
    <meta name="keywords" content="admin, admin dashboard, admin panel, admin template, admin theme, bootstrap 4, laravel, php, crm, analytics, responsive, sass support, ui kits, web app, clean design">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Neon - Bootstrap + Laravel + PHP Admin Dashboard Template</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Start CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- End CSS -->

</head>

<body class="xp-vertical">
    <!-- Search Modal -->
    <div class="modal search-modal fade" id="xpSearchModal" tabindex="-1" role="dialog" aria-labelledby="xpSearchModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="xp-searchbar">
                <form>
                    <div class="input-group">
                      <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                      <div class="input-group-append">
                        <button class="btn" type="submit" id="button-addon2">GO</button>
                      </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Start XP Container -->
    <div id="xp-container">

        <!-- Start XP Leftbar -->
        <div class="xp-leftbar">    

            <!-- Start XP Sidebar -->
            <div class="xp-sidebar">

                <!-- Start XP Logobar -->
                <div class="xp-logobar text-center">
                    <a href="index.php" class="xp-logo"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                </div>
                <!-- End XP Logobar -->

                <!-- Start XP Navigationbar -->
                <div class="xp-navigationbar">
                    <ul class="xp-vertical-menu">
                        <li class="xp-vertical-header">Main</li>
                        <li>
                            <a href="index.php">
                              <i class="icon-speedometer"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                              <i class="icon-layers"></i><span>UI Kits</span><i class="icon-arrow-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="ui-kits-alerts.php">Alerts</a></li>
                                <li><a href="ui-kits-badges.php">Badges</a></li>
                                <li><a href="ui-kits-buttons.php">Buttons</a></li>
                                <li><a href="ui-kits-cards.php">Cards</a></li>
                                <li><a href="ui-kits-carousel.php">Carousel</a></li>
                                <li><a href="ui-kits-collapse.php">Collapse</a></li>
                                <li><a href="ui-kits-dropdowns.php">Dropdowns</a></li>
                                <li><a href="ui-kits-grids.php">Grids</a></li>
                                <li><a href="ui-kits-images.php">Images</a></li>
                                <li><a href="ui-kits-media.php">Media</a></li>
                                <li><a href="ui-kits-modals.php">Modals</a></li>                                
                                <li><a href="ui-kits-paginations.php">Paginations</a></li>
                                <li><a href="ui-kits-popovers.php">Popovers</a></li>                                
                                <li><a href="ui-kits-progressbars.php">Progress Bars</a></li>
                                <li><a href="ui-kits-tabs.php">Tabs</a></li>    
                                <li><a href="ui-kits-tooltips.php">Tooltips</a></li>
                                <li><a href="ui-kits-typography.php">Typography</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="icon-social-dropbox"></i><span>Components</span><i class="icon-arrow-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">                                
                                <li><a href="components-nestable.php">Nestable</a></li>                                
                                <li><a href="components-ratings.php">Ratings</a></li>
                                <li><a href="components-range-slider.php">Range Slider</a></li>
                                <li><a href="components-switchery.php">Switchery</a></li>
                                <li><a href="components-treeview.php">Tree View</a></li>
                                <li><a href="components-widgets.php">Widgets</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="icon-drop"></i><span>Icons</span><i class="icon-arrow-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="icon-material-design.php">Material Design</a></li>
                                <li><a href="icon-font-awesome.php">Font Awesome</a></li>
                                <li><a href="icon-simple-line.php">Simple Line Icons</a></li>
                                <li><a href="icon-themify.php">Themify Icons</a></li>
                                <li><a href="icon-typicons.php">Typicons</a></li>
                                <li><a href="icon-ionicons.php">Ion Icons</a></li>
                                <li><a href="icon-dripicons.php">Dripicons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="events.php">
                              <i class="icon-event"></i><span>Events</span><span class="badge badge-pill badge-success pull-right">5</span>
                            </a>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="icon-doc"></i><span>Forms</span><i class="icon-arrow-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="form-inputs.php">Form Inputs</a></li>
                                <li><a href="form-groups.php">Form Groups</a></li>
                                <li><a href="form-layouts.php">Form Layouts</a></li>
                                <li><a href="form-validations.php">Form Validations</a></li>
                                <li><a href="form-editors.php">Form Editors</a></li>
                                <li><a href="form-file-uploads.php">Form File Uploads</a></li>
                                <li><a href="form-colorpickers.php">Form Color Pickers</a></li>
                                <li><a href="form-datepickers.php">Form Date Pickers</a></li>
                                <li><a href="form-maxlength.php">Form MaxLength</a></li>
                                <li><a href="form-touchspin.php">Form Touchspin</a></li>
                                <li><a href="form-input-mask.php">Form Input Mask</a></li>
                                <li><a href="form-selects.php">Form Selects</a></li>
                                <li><a href="form-xeditable.php">Form X-editable</a></li>
                                <li><a href="form-wizards.php">Form Wizards</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="icon-envelope"></i><span>Email</span><i class="icon-arrow-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="email-inbox.php">Email Inbox</a></li>
                                <li><a href="email-open.php">Email Open</a></li>
                                <li><a href="email-compose.php">Email Compose</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="icon-graph"></i><span>Charts</span><i class="icon-arrow-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="chart-chartistjs.php">Chartist Chart</a></li> 
                                <li><a href="chart-chartjs.php">Chartjs Chart</a></li>                                   
                                <li><a href="chart-c3.php">C3 Chart</a></li>
                                <li><a href="chart-flot.php">Flot Chart</a></li> 
                                <li><a href="chart-morris.php">Morris Chart</a></li>                                
                                <li><a href="chart-knob.php">Knob Chart</a></li>
                                <li><a href="chart-piety.php">Piety Chart</a></li>
                                <li><a href="chart-sparkline.php">Sparkline Chart</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="icon-list"></i><span>Tables</span><i class="icon-arrow-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="table-bootstrap.php">Bootstrap Table</a></li>
                                <li><a href="table-datatable.php">Data Table</a></li>
                                <li><a href="table-editable.php">Editable Table</a></li>
                                <li><a href="table-rwdtable.php">RWD Table</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="icon-map"></i><span>Maps</span><span class="badge badge-pill badge-danger pull-right">2</span>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="map-google.php">Google Map</a></li>
                                <li><a href="map-vector.php">Vector Map</a></li>
                            </ul>
                        </li>
                        <li class="xp-vertical-header">Extras</li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="icon-lock"></i><span>Authenication</span><i class="icon-arrow-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="page-login.php">Login</a></li>
                                <li><a href="page-register.php">Register</a></li>
                                <li><a href="page-forgotpsw.php">Forgot Password</a></li>
                                <li><a href="page-lock-screen.php">Lock Screen</a></li> 
                                <li><a href="page-comingsoon.php">Coming Soon</a></li>  
                                <li><a href="page-maintenance.php">Maintenance</a></li>                               
                                <li><a href="page-404.php">Error 404</a></li>  
                                <li><a href="page-403.php">Error 403</a></li>
                                <li><a href="page-500.php">Error 500</a></li>  
                                <li><a href="page-503.php">Error 503</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="icon-book-open"></i><span>Extra Pages</span><i class="icon-arrow-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="page-starter.php">Starter Page</a></li>
                                <li><a href="page-timeline.php">Timeline</a></li>
                                <li><a href="page-pricing.php">Pricing</a></li>
                                <li><a href="page-invoice.php">Invoice</a></li>
                                <li><a href="page-faq.php">FAQ</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- End XP Navigationbar -->

            </div>
            <!-- End XP Sidebar -->

        </div>
        <!-- End XP Leftbar -->

        <!-- Start XP Rightbar -->
        <div class="xp-rightbar">

            <!-- Start XP Topbar -->
            <div class="xp-topbar">

                <!-- Start XP Row -->
                <div class="row"> 

                    <!-- Start XP Col -->
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                            <a class="xp-menu-hamburger" href="javascript:void();">
                               <i class="icon-menu font-20 text-white"></i>
                             </a>
                         </div>
                    </div> 
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-10 col-md-11 col-lg-11 order-1 order-md-2">
                        <div class="xp-profilebar text-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="xp-search">
                                        <a href="#" class="text-white" data-toggle="modal" data-target="#xpSearchModal"><i class="icon-magnifier"></i></a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="dropdown xp-message">
                                        <a class="dropdown-toggle  text-white" href="#" role="button" id="xp-message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-speech font-18 v-a-m"></i>
                                            <span class="badge badge-pill bg-success-gradient xp-badge-up">8</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-message">
                                            <ul class="list-unstyled">
                                              <li class="media">
                                                <div class="media-body">
                                                  <h5 class="mt-0 mb-0 py-3 text-white text-center font-16">8 New Messages</h5>
                                                </div>
                                              </li>  
                                              <li class="media xp-msg">
                                                <img class="mr-3 align-self-center rounded-circle" src="assets/images/topbar/user-message-1.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <a href="#">  
                                                        <h5 class="mt-0 mb-1 font-14">Ariel Blue<span class="font-12 f-w-4 float-right">3 min ago</span></h5>
                                                        <p class="mb-0 font-13">Thank you for attending...<span class="badge badge-pill badge-success float-right">2</span></p>
                                                    </a>
                                                </div>
                                              </li>
                                              <li class="media xp-msg">
                                                 <img class="mr-3 align-self-center rounded-circle" src="assets/images/topbar/user-message-2.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5 class="mt-0 mb-1 font-14">Jammy Moon<span class="font-12 f-w-4 float-right">5 min ago</span></h5>
                                                        <p class="mb-0 font-13">Hey no worries! Trust me...<span class="badge badge-pill badge-success float-right">3</span></p>
                                                    </a>
                                                </div>
                                              </li>
                                              <li class="media xp-msg">
                                                 <img class="mr-3 align-self-center rounded-circle" src="assets/images/topbar/user-message-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5 class="mt-0 mb-1 font-14">Lisa Ross<span class="font-12 f-w-4 float-right">5:25 PM</span></h5>
                                                        <p class="mb-0 font-13">Remedies for colic? i don't...<span class="badge badge-pill badge-success float-right">5</span></p>
                                                    </a>
                                                </div>
                                              </li>
                                              <li class="media">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-0 py-3 text-black text-center font-14">
                                                        <a href="#" class="text-primary">View all</a>
                                                    </h5>
                                              </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="dropdown xp-notification">
                                        <a class="dropdown-toggle  text-white" href="#" role="button" id="xp-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-bell font-18 v-a-m"></i>
                                            <span class="badge badge-pill bg-danger-gradient xp-badge-up">3</span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-notification">
                                            <ul class="list-unstyled">
                                              <li class="media">
                                                <div class="media-body">
                                                  <h5 class="mt-0 mb-0 py-3 text-white text-center font-16">3 New Notifications</h5>
                                                </div>
                                              </li>  
                                              <li class="media xp-noti">                                                
                                                <div class="mr-3 xp-noti-icon primary-rgba"><i class="icon-user-follow text-primary"></i></div>
                                                <div class="media-body">
                                                    <a href="#">  
                                                        <h5 class="mt-0 mb-1 font-14">New user registered</h5>
                                                        <p class="mb-0 font-12 f-w-4">2 min ago</p>
                                                    </a>
                                                </div>
                                              </li>
                                              <li class="media xp-noti">
                                                <div class="mr-3 xp-noti-icon success-rgba"><i class="icon-basket-loaded text-success"></i></div>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5 class="mt-0 mb-1 font-14">New order placed</h5>
                                                        <p class="mb-0 font-12 f-w-4">8:45 PM</p>
                                                    </a>
                                                </div>
                                              </li>
                                              <li class="media xp-noti">
                                                <div class="mr-3 xp-noti-icon danger-rgba"><i class="icon-like text-danger"></i></div>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5 class="mt-0 mb-1 font-14">John like your photo.</h5>
                                                        <p class="mb-0 font-12 f-w-4">Yesterday</p>
                                                    </a>
                                                </div>
                                              </li>
                                              <li class="media">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-0 py-3 text-black text-center font-14">
                                                        <a href="#" class="text-primary">View all</a>
                                                    </h5>
                                                </div>
                                              </li>
                                            </ul>                                            
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <div class="dropdown xp-userprofile">
                                        <a class="dropdown-toggle " href="#" role="button" id="xp-userprofile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/topbar/user.jpg" alt="user-profile" class="rounded-circle img-fluid"><span class="xp-user-live"></span></a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-userprofile">
                                            <a class="dropdown-item py-3 text-white text-center font-16" href="#">Welcome, John Doe</a>
                                            <a class="dropdown-item" href="#"><i class="icon-user text-primary mr-2"></i> Profile</a>
                                            <a class="dropdown-item" href="#"><i class="icon-wallet text-success mr-2"></i> Billing</a>
                                            <a class="dropdown-item" href="#"><i class="icon-settings text-warning mr-2"></i> Setting</a>
                                            <a class="dropdown-item" href="#"><i class="icon-lock text-info mr-2"></i> Lock Screen</a>
                                            <a class="dropdown-item" href="#"><i class="icon-power text-danger mr-2"></i> Logout</a>
                                        </div>
                                    </div>                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div> 
                <!-- End XP Row -->

            </div>
            <!-- End XP Topbar -->
            
            <!-- Start XP Breadcrumbbar -->                    
            <div class="xp-breadcrumbbar">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <h4 class="xp-page-title">Themify Icons</h4>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="xp-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Icons</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Themify Icons</li>
                            </ol>
                        </div>
                    </div>
                </div>          
            </div>
            <!-- End XP Breadcrumbbar -->

            <!-- Start XP Contentbar -->    
            <div class="xp-contentbar">

                <!-- Start XP Row -->
                <div class="row">

                    <!-- Start XP Col -->
                    <div class="col-lg-12">

                        <!-- Start XP Card -->
                        <div class="card m-b-30">

                            <!-- Start XP Card Header -->
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Themify Icons</h5>
                                <h6 class="card-subtitle">Usage <code>&lt;i class="ti-arrow-up"&gt;&lt;/i&gt;</code>.</h6>
                            </div>
                            <!-- End XP Card Header -->

                            <!-- Start XP Card Body -->
                            <div class="card-body">
                                <div class="row xp-icon-box">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-arrow-up"></i>ti-arrow-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-arrow-right"></i>ti-arrow-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-arrow-left"></i>ti-arrow-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-arrow-down"></i>ti-arrow-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-arrows-vertical"></i>ti-arrows-vertical</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-arrows-horizontal"></i>ti-arrows-horizontal</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-angle-up"></i>ti-angle-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-angle-right"></i>ti-angle-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-angle-left"></i>ti-angle-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-angle-down"></i>ti-angle-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-angle-double-up"></i>ti-angle-double-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-angle-double-right"></i>ti-angle-double-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-angle-double-left"></i>ti-angle-double-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-angle-double-down"></i>ti-angle-double-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-move"></i>ti-move</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-fullscreen"></i>ti-fullscreen</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-arrow-top-right"></i>ti-arrow-top-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-arrow-top-left"></i>ti-arrow-top-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-arrow-circle-up"></i>ti-arrow-circle-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-arrow-circle-right"></i>ti-arrow-circle-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-arrow-circle-left"></i>ti-arrow-circle-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-arrow-circle-down"></i>ti-arrow-circle-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-arrows-corner"></i>ti-arrows-corner</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-split-v"></i>ti-split-v</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-split-v-alt"></i>ti-split-v-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-split-h"></i>ti-split-h</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-hand-point-up"></i>ti-hand-point-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-hand-point-right"></i>ti-hand-point-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-hand-point-left"></i>ti-hand-point-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-hand-point-down"></i>ti-hand-point-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-back-right"></i>ti-back-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-back-left"></i>ti-back-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-exchange-vertical"></i>ti-exchange-vertical</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-wand"></i>ti-wand</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-save"></i>ti-save</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-save-alt"></i>ti-save-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-direction"></i>ti-direction</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-direction-alt"></i>ti-direction-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-user"></i>ti-user</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-link"></i>ti-link</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-unlink"></i>ti-unlink</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-trash"></i>ti-trash</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-target"></i>ti-target</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-tag"></i>ti-tag</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-desktop"></i>ti-desktop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-tablet"></i>ti-tablet</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-mobile"></i>ti-mobile</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-email"></i>ti-email</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-star"></i>ti-star</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-spray"></i>ti-spray</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-signal"></i>ti-signal</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-shopping-cart"></i>ti-shopping-cart</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-shopping-cart-full"></i>ti-shopping-cart-full</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-settings"></i>ti-settings</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-search"></i>ti-search</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-zoom-in"></i>ti-zoom-in</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-zoom-out"></i>ti-zoom-out</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-cut"></i>ti-cut</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-ruler"></i>ti-ruler</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-ruler-alt-2"></i>ti-ruler-alt-2</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-ruler-pencil"></i>ti-ruler-pencil</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-ruler-alt"></i>ti-ruler-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-bookmark"></i>ti-bookmark</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-bookmark-alt"></i>ti-bookmark-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-reload"></i>ti-reload</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-plus"></i>ti-plus</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-minus"></i>ti-minus</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-close"></i>ti-close</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-pin"></i>ti-pin</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-pencil"></i>ti-pencil</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-pencil-alt"></i>ti-pencil-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-paint-roller"></i>ti-paint-roller</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-paint-bucket"></i>ti-paint-bucket</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-na"></i>ti-na</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-medall"></i>ti-medall</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-medall-alt"></i>ti-medall-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-marker"></i>ti-marker</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-marker-alt"></i>ti-marker-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-lock"></i>ti-lock</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-unlock"></i>ti-unlock</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-location-arrow"></i>ti-location-arrow</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout"></i>ti-layout</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layers"></i>ti-layers</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layers-alt"></i>ti-layers-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-key"></i>ti-key</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-image"></i>ti-image</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-heart"></i>ti-heart</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-heart-broken"></i>ti-heart-broken</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-hand-stop"></i>ti-hand-stop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-hand-open"></i>ti-hand-open</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-hand-drag"></i>ti-hand-drag</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-flag"></i>ti-flag</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-flag-alt"></i>ti-flag-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-flag-alt-2"></i>ti-flag-alt-2</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-eye"></i>ti-eye</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-import"></i>ti-import</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-export"></i>ti-export</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-cup"></i>ti-cup</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-crown"></i>ti-crown</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-comments"></i>ti-comments</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-comment"></i>ti-comment</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-comment-alt"></i>ti-comment-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-thought"></i>ti-thought</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-clip"></i>ti-clip</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-check"></i>ti-check</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-check-box"></i>ti-check-box</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-camera"></i>ti-camera</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-announcement"></i>ti-announcement</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-brush"></i>ti-brush</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-brush-alt"></i>ti-brush-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-palette"></i>ti-palette</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-briefcase"></i>ti-briefcase</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-bolt"></i>ti-bolt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-bolt-alt"></i>ti-bolt-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-blackboard"></i>ti-blackboard</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-bag"></i>ti-bag</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-world"></i>ti-world</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-wheelchair"></i>ti-wheelchair</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-car"></i>ti-car</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-truck"></i>ti-truck</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-timer"></i>ti-timer</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-ticket"></i>ti-ticket</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-thumb-up"></i>ti-thumb-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-thumb-down"></i>ti-thumb-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-stats-up"></i>ti-stats-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-stats-down"></i>ti-stats-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-shine"></i>ti-shine</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-shift-right"></i>ti-shift-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-shift-left"></i>ti-shift-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-shift-right-alt"></i>ti-shift-right-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-shift-left-alt"></i>ti-shift-left-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-shield"></i>ti-shield</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-notepad"></i>ti-notepad</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-server"></i>ti-server</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-pulse"></i>ti-pulse</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-printer"></i>ti-printer</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-power-off"></i>ti-power-off</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-plug"></i>ti-plug</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-pie-chart"></i>ti-pie-chart</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-panel"></i>ti-panel</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-package"></i>ti-package</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-music"></i>ti-music</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-music-alt"></i>ti-music-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-mouse"></i>ti-mouse</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-mouse-alt"></i>ti-mouse-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-money"></i>ti-money</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-microphone"></i>ti-microphone</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-menu"></i>ti-menu</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-menu-alt"></i>ti-menu-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-map"></i>ti-map</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-map-alt"></i>ti-map-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-location-pin"></i>ti-location-pin</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-light-bulb"></i>ti-light-bulb</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-info"></i>ti-info</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-infinite"></i>ti-infinite</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-id-badge"></i>ti-id-badge</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-hummer"></i>ti-hummer</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-home"></i>ti-home</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-help"></i>ti-help</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-headphone"></i>ti-headphone</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-harddrives"></i>ti-harddrives</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-harddrive"></i>ti-harddrive</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-gift"></i>ti-gift</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-game"></i>ti-game</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-filter"></i>ti-filter</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-files"></i>ti-files</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-file"></i>ti-file</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-zip"></i>ti-zip</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-folder"></i>ti-folder</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-envelope"></i>ti-envelope</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-dashboard"></i>ti-dashboard</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-cloud"></i>ti-cloud</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-cloud-up"></i>ti-cloud-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-cloud-down"></i>ti-cloud-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-clipboard"></i>ti-clipboard</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-calendar"></i>ti-calendar</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-book"></i>ti-book</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-bell"></i>ti-bell</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-basketball"></i>ti-basketball</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-bar-chart"></i>ti-bar-chart</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-bar-chart-alt"></i>ti-bar-chart-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-archive"></i>ti-archive</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-anchor"></i>ti-anchor</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-alert"></i>ti-alert</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-alarm-clock"></i>ti-alarm-clock</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-agenda"></i>ti-agenda</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-write"></i>ti-write</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-wallet"></i>ti-wallet</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-video-clapper"></i>ti-video-clapper</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-video-camera"></i>ti-video-camera</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-vector"></i>ti-vector</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-support"></i>ti-support</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-stamp"></i>ti-stamp</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-slice"></i>ti-slice</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-shortcode"></i>ti-shortcode</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-receipt"></i>ti-receipt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-pin2"></i>ti-pin2</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-pin-alt"></i>ti-pin-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-pencil-alt2"></i>ti-pencil-alt2</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-eraser"></i>ti-eraser</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-more"></i>ti-more</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-more-alt"></i>ti-more-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-microphone-alt"></i>ti-microphone-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-magnet"></i>ti-magnet</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-line-double"></i>ti-line-double</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-line-dotted"></i>ti-line-dotted</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-line-dashed"></i>ti-line-dashed</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-ink-pen"></i>ti-ink-pen</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-info-alt"></i>ti-info-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-help-alt"></i>ti-help-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-headphone-alt"></i>ti-headphone-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-gallery"></i>ti-gallery</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-face-smile"></i>ti-face-smile</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-face-sad"></i>ti-face-sad</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-credit-card"></i>ti-credit-card</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-comments-smiley"></i>ti-comments-smiley</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-time"></i>ti-time</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-share"></i>ti-share</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-share-alt"></i>ti-share-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-rocket"></i>ti-rocket</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-new-window"></i>ti-new-window</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-rss"></i>ti-rss</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-rss-alt"></i>ti-rss-alt</p>
                                    </div>    
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-control-stop"></i>ti-control-stop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-control-shuffle"></i>ti-control-shuffle</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-control-play"></i>ti-control-play</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-control-pause"></i>ti-control-pause</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-control-forward"></i>ti-control-forward</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-control-backward"></i>ti-control-backward</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-volume"></i>ti-volume</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-control-skip-forward"></i>ti-control-skip-forward</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-control-skip-backward"></i>ti-control-skip-backward</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-control-record"></i>ti-control-record</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-control-eject"></i>ti-control-eject</p>
                                    </div>    
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-paragraph"></i>ti-paragraph</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-uppercase"></i>ti-uppercase</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-underline"></i>ti-underline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-text"></i>ti-text</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-Italic"></i>ti-Italic</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-smallcap"></i>ti-smallcap</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-list"></i>ti-list</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-list-ol"></i>ti-list-ol</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-align-right"></i>ti-align-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-align-left"></i>ti-align-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-align-justify"></i>ti-align-justify</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-align-center"></i>ti-align-center</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-quote-right"></i>ti-quote-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-quote-left"></i>ti-quote-left</p>
                                    </div>    
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-width-full"></i>ti-layout-width-full</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-width-default"></i>ti-layout-width-default</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-width-default-alt"></i>ti-layout-width-default-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-tab"></i>ti-layout-tab</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-tab-window"></i>ti-layout-tab-window</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-tab-v"></i>ti-layout-tab-v</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-tab-min"></i>ti-layout-tab-min</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-slider"></i>ti-layout-slider</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-slider-alt"></i>ti-layout-slider-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-sidebar-right"></i>ti-layout-sidebar-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-sidebar-none"></i>ti-layout-sidebar-none</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-sidebar-left"></i>ti-layout-sidebar-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-placeholder"></i>ti-layout-placeholder</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-menu"></i>ti-layout-menu</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-menu-v"></i>ti-layout-menu-v</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-menu-separated"></i>ti-layout-menu-separated</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-menu-full"></i>ti-layout-menu-full</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-media-right"></i>ti-layout-media-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-media-right-alt"></i>ti-layout-media-right-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-media-overlay"></i>ti-layout-media-overlay</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-media-overlay-alt"></i>ti-layout-media-overlay-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-media-overlay-alt-2"></i>ti-layout-media-overlay-alt-2</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-media-left"></i>ti-layout-media-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-media-left-alt"></i>ti-layout-media-left-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-media-center"></i>ti-layout-media-center</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-media-center-alt"></i>ti-layout-media-center-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-list-thumb"></i>ti-layout-list-thumb</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-list-thumb-alt"></i>ti-layout-list-thumb-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-list-post"></i>ti-layout-list-post</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-list-large-image"></i>ti-layout-list-large-image</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-line-solid"></i>ti-layout-line-solid</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-grid4"></i>ti-layout-grid4</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-grid3"></i>ti-layout-grid3</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-grid2"></i>ti-layout-grid2</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-grid2-thumb"></i>ti-layout-grid2-thumb</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-cta-right"></i>ti-layout-cta-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-cta-left"></i>ti-layout-cta-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-cta-center"></i>ti-layout-cta-center</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-cta-btn-right"></i>ti-layout-cta-btn-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-cta-btn-left"></i>ti-layout-cta-btn-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-column4"></i>ti-layout-column4</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-column3"></i>ti-layout-column3</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-column2"></i>ti-layout-column2</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-accordion-separated"></i>ti-layout-accordion-separated</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-accordion-merged"></i>ti-layout-accordion-merged</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-accordion-list"></i>ti-layout-accordion-list</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-widgetized"></i>ti-widgetized</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-widget"></i>ti-widget</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-widget-alt"></i>ti-widget-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-view-list"></i>ti-view-list</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-view-list-alt"></i>ti-view-list-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-view-grid"></i>ti-view-grid</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-upload"></i>ti-upload</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-download"></i>ti-download</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-loop"></i>ti-loop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-sidebar-2"></i>ti-layout-sidebar-2</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-grid4-alt"></i>ti-layout-grid4-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-grid3-alt"></i>ti-layout-grid3-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-grid2-alt"></i>ti-layout-grid2-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-column4-alt"></i>ti-layout-column4-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-column3-alt"></i>ti-layout-column3-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-layout-column2-alt"></i>ti-layout-column2-alt</p>
                                    </div>    
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-flickr"></i>ti-flickr</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-flickr-alt"></i>ti-flickr-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-instagram"></i>ti-instagram</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-google"></i>ti-google</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-github"></i>ti-github</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-facebook"></i>ti-facebook</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-dropbox"></i>ti-dropbox</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-dropbox-alt"></i>ti-dropbox-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-dribbble"></i>ti-dribbble</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-apple"></i>ti-apple</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-android"></i>ti-android</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-yahoo"></i>ti-yahoo</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-trello"></i>ti-trello</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-stack-overflow"></i>ti-stack-overflow</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-soundcloud"></i>ti-soundcloud</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-sharethis"></i>ti-sharethis</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-sharethis-alt"></i>ti-sharethis-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-reddit"></i>ti-reddit</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-microsoft"></i>ti-microsoft</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-microsoft-alt"></i>ti-microsoft-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-linux"></i>ti-linux</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-jsfiddle"></i>ti-jsfiddle</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-joomla"></i>ti-joomla</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-html5"></i>ti-html5</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-css3"></i>ti-css3</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-drupal"></i>ti-drupal</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-wordpress"></i>ti-wordpress</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-tumblr"></i>ti-tumblr</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-tumblr-alt"></i>ti-tumblr-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-skype"></i>ti-skype</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-youtube"></i>ti-youtube</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-vimeo"></i>ti-vimeo</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-vimeo-alt"></i>ti-vimeo-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-twitter"></i>ti-twitter</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-twitter-alt"></i>ti-twitter-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-linkedin"></i>ti-linkedin</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-pinterest"></i>ti-pinterest</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-pinterest-alt"></i>ti-pinterest-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-themify-logo"></i>ti-themify-logo</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-themify-favicon"></i>ti-themify-favicon</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="ti-themify-favicon-alt"></i>ti-themify-favicon-alt</p>
                                    </div>
                                </div>
                                <!-- End XP Row -->
                            </div> 
                            <!-- End XP Card Body -->     
                        </div>  
                        <!-- End XP Card -->                     
                    </div>
                    <!-- End XP Col -->

                </div>
                <!-- End XP Row -->

            </div>
            <!-- End XP Contentbar -->

            <!-- Start XP Footerbar -->
            <div class="xp-footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2020 Neon - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End XP Footerbar -->

        </div>
        <!-- End XP Rightbar -->

    </div>
    <!-- End XP Container -->

    <!-- Start JS -->        
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/sidebar-menu.js"></script>
    
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- End JS -->

</body>
</html>