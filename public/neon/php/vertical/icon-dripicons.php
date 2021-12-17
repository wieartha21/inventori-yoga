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
                        <h4 class="xp-page-title">Dripicons</h4>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="xp-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Icons</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dripicons</li>
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

                        <!-- Start XP Col -->
                        <div class="card m-b-30">

                            <!-- Start XP Card Header -->
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Dripicons Icons</h5>
                                <h6 class="card-subtitle">Usage <code>&lt;i class="dripicons-zoom-out"&gt;&lt;/i&gt;</code>.</h6>
                            </div>
                            <!-- End XP Card Header -->

                            <!-- Start XP Col -->
                            <div class="card-body">
                                <div class="row xp-icon-box">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-alarm"></i>dripicons-alarm</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-align-center"></i>dripicons-align-center</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-align-justify"></i>dripicons-align-justify</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-align-left"></i>dripicons-align-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-align-right"></i>dripicons-align-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-anchor"></i>dripicons-anchor</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-archive"></i>dripicons-archive</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-arrow-down"></i>dripicons-arrow-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-arrow-left"></i>dripicons-arrow-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-arrow-right"></i>dripicons-arrow-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-arrow-thin-down"></i>dripicons-arrow-thin-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-arrow-thin-left"></i>dripicons-arrow-thin-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-arrow-thin-right"></i>dripicons-arrow-thin-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-arrow-thin-up"></i>dripicons-arrow-thin-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-arrow-up"></i>dripicons-arrow-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-article"></i>dripicons-article</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-backspace"></i>dripicons-backspace</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-basket"></i>dripicons-basket</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-basketball"></i>dripicons-basketball</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-battery-empty"></i>dripicons-battery-empty</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-battery-full"></i>dripicons-battery-full</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-battery-low"></i>dripicons-battery-low</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-battery-medium"></i>dripicons-battery-medium</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-bell"></i>dripicons-bell</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-blog"></i>dripicons-blog</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-bluetooth"></i>dripicons-bluetooth</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-bold"></i>dripicons-bold</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-bookmark"></i>dripicons-bookmark</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-bookmarks"></i>dripicons-bookmarks</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-box"></i>dripicons-box</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-briefcase"></i>dripicons-briefcase</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-brightness-low"></i>dripicons-brightness-low</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-brightness-max"></i>dripicons-brightness-max</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-brightness-medium"></i>dripicons-brightness-medium</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-broadcast"></i>dripicons-broadcast</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-browser"></i>dripicons-browser</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-browser-upload"></i>dripicons-browser-upload</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-brush"></i>dripicons-brush</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-calendar"></i>dripicons-calendar</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-camcorder"></i>dripicons-camcorder</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-camera"></i>dripicons-camera</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-card"></i>dripicons-card</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-cart"></i>dripicons-cart</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-checklist"></i>dripicons-checklist</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-checkmark"></i>dripicons-checkmark</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-chevron-down"></i>dripicons-chevron-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-chevron-left"></i>dripicons-chevron-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-chevron-right"></i>dripicons-chevron-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-chevron-up"></i>dripicons-chevron-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-clipboard"></i>dripicons-clipboard</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-clock"></i>dripicons-clock</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-clockwise"></i>dripicons-clockwise</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-cloud"></i>dripicons-cloud</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-cloud-download"></i>dripicons-cloud-download</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-cloud-upload"></i>dripicons-cloud-upload</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-code"></i>dripicons-code</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-contract"></i>dripicons-contract</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-contract-2"></i>dripicons-contract-2</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-conversation"></i>dripicons-conversation</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-copy"></i>dripicons-copy</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-crop"></i>dripicons-crop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-cross"></i>dripicons-cross</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-crosshair"></i>dripicons-crosshair</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-cutlery"></i>dripicons-cutlery</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-device-desktop"></i>dripicons-device-desktop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-device-mobile"></i>dripicons-device-mobile</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-device-tablet"></i>dripicons-device-tablet</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-direction"></i>dripicons-direction</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-disc"></i>dripicons-disc</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-document"></i>dripicons-document</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-document-delete"></i>dripicons-document-delete</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-document-edit"></i>dripicons-document-edit</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-document-new"></i>dripicons-document-new</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-document-remove"></i>dripicons-document-remove</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-dot"></i>dripicons-dot</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-dots-2"></i>dripicons-dots-2</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-dots-3"></i>dripicons-dots-3</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-download"></i>dripicons-download</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-duplicate"></i>dripicons-duplicate</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-enter"></i>dripicons-enter</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-exit"></i>dripicons-exit</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-expand"></i>dripicons-expand</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-expand-2"></i>dripicons-expand-2</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-experiment"></i>dripicons-experiment</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-export"></i>dripicons-export</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-feed"></i>dripicons-feed</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-flag"></i>dripicons-flag</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-flashlight"></i>dripicons-flashlight</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-folder"></i>dripicons-folder</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-folder-open"></i>dripicons-folder-open</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-forward"></i>dripicons-forward</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-gaming"></i>dripicons-gaming</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-gear"></i>dripicons-gear</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-graduation"></i>dripicons-graduation</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-graph-bar"></i>dripicons-graph-bar</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-graph-line"></i>dripicons-graph-line</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-graph-pie"></i>dripicons-graph-pie</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-headset"></i>dripicons-headset</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-heart"></i>dripicons-heart</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-help"></i>dripicons-help</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-home"></i>dripicons-home</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-hourglass"></i>dripicons-hourglass</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-inbox"></i>dripicons-inbox</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-information"></i>dripicons-information</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-italic"></i>dripicons-italic</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-jewel"></i>dripicons-jewel</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-lifting"></i>dripicons-lifting</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-lightbulb"></i>dripicons-lightbulb</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-link"></i>dripicons-link</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-link-broken"></i>dripicons-link-broken</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-list"></i>dripicons-list</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-loading"></i>dripicons-loading</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-location"></i>dripicons-location</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-lock"></i>dripicons-lock</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-lock-open"></i>dripicons-lock-open</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-mail"></i>dripicons-mail</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-map"></i>dripicons-map</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-media-loop"></i>dripicons-media-loop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-media-next"></i>dripicons-media-next</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-media-pause"></i>dripicons-media-pause</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-media-play"></i>dripicons-media-play</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-media-previous"></i>dripicons-media-previous</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-media-record"></i>dripicons-media-record</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-media-shuffle"></i>dripicons-media-shuffle</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-media-stop"></i>dripicons-media-stop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-medical"></i>dripicons-medical</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-menu"></i>dripicons-menu</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-message"></i>dripicons-message</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-meter"></i>dripicons-meter</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-microphone"></i>dripicons-microphone</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-minus"></i>dripicons-minus</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-monitor"></i>dripicons-monitor</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-move"></i>dripicons-move</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-music"></i>dripicons-music</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-network-1"></i>dripicons-network-1</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-network-2"></i>dripicons-network-2</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-network-3"></i>dripicons-network-3</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-network-4"></i>dripicons-network-4</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-network-5"></i>dripicons-network-5</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-pamphlet"></i>dripicons-pamphlet</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-paperclip"></i>dripicons-paperclip</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-pencil"></i>dripicons-pencil</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-phone"></i>dripicons-phone</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-photo"></i>dripicons-photo</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-photo-group"></i>dripicons-photo-group</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-pill"></i>dripicons-pill</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-pin"></i>dripicons-pin</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-plus"></i>dripicons-plus</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-power"></i>dripicons-power</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-preview"></i>dripicons-preview</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-print"></i>dripicons-print</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-pulse"></i>dripicons-pulse</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-question"></i>dripicons-question</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-reply"></i>dripicons-reply</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-reply-all"></i>dripicons-reply-all</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-return"></i>dripicons-return</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-retweet"></i>dripicons-retweet</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-rocket"></i>dripicons-rocket</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-scale"></i>dripicons-scale</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-search"></i>dripicons-search</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-shopping-bag"></i>dripicons-shopping-bag</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-skip"></i>dripicons-skip</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-stack"></i>dripicons-stack</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-star"></i>dripicons-star</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-stopwatch"></i>dripicons-stopwatch</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-store"></i>dripicons-store</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-suitcase"></i>dripicons-suitcase</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-swap"></i>dripicons-swap</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-tag"></i>dripicons-tag</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-tag-delete"></i>dripicons-tag-delete</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-tags"></i>dripicons-tags</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-thumbs-down"></i>dripicons-thumbs-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-thumbs-up"></i>dripicons-thumbs-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-ticket"></i>dripicons-ticket</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-time-reverse"></i>dripicons-time-reverse</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-to-do"></i>dripicons-to-do</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-toggles"></i>dripicons-toggles</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-trash"></i>dripicons-trash</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-trophy"></i>dripicons-trophy</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-upload"></i>dripicons-upload</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-user"></i>dripicons-user</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-user-group"></i>dripicons-user-group</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-user-id"></i>dripicons-user-id</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-vibrate"></i>dripicons-vibrate</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-view-apps"></i>dripicons-view-apps</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-view-list"></i>dripicons-view-list</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-view-list-large"></i>dripicons-view-list-large</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-view-thumb"></i>dripicons-view-thumb</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-volume-full"></i>dripicons-volume-full</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-volume-low"></i>dripicons-volume-low</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-volume-medium"></i>dripicons-volume-medium</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-volume-off"></i>dripicons-volume-off</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-wallet"></i>dripicons-wallet</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-warning"></i>dripicons-warning</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-web"></i>dripicons-web</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-weight"></i>dripicons-weight</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-wifi"></i>dripicons-wifi</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-wrong"></i>dripicons-wrong</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-zoom-in"></i>dripicons-zoom-in</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="dripicons-zoom-out"></i>dripicons-zoom-out</p>
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