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
                        <h4 class="xp-page-title">Typicons</h4>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="xp-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Icons</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Typicons</li>
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
                                <h5 class="card-title text-black">Typicons Icons</h5>
                                <h6 class="card-subtitle">Usage <code>&lt;i class="typcn typcn-adjust-brightness"&gt;&lt;/i&gt;</code>.</h6>
                            </div>
                            <!-- End XP Card Header -->

                            <!-- Start XP Col -->
                            <div class="card-body">
                                <div class="row xp-icon-box">
                                    
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-adjust-brightness"></i>typcn typcn-adjust-brightness</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-adjust-contrast"></i>typcn typcn-adjust-contrast</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-anchor-outline"></i>typcn typcn-anchor-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-anchor"></i>typcn typcn-anchor</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-archive"></i>typcn typcn-archive</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-back-outline"></i>typcn typcn-arrow-back-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-back"></i>typcn typcn-arrow-back</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-down-outline"></i>typcn typcn-arrow-down-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-down-thick"></i>typcn typcn-arrow-down-thick</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-down"></i>typcn typcn-arrow-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-forward-outline"></i>typcn typcn-arrow-forward-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-forward"></i>typcn typcn-arrow-forward</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-left-outline"></i>typcn typcn-arrow-left-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-left-thick"></i>typcn typcn-arrow-left-thick</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-left"></i>typcn typcn-arrow-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-loop-outline"></i>typcn typcn-arrow-loop-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-loop"></i>typcn typcn-arrow-loop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-maximise-outline"></i>typcn typcn-arrow-maximise-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-maximise"></i>typcn typcn-arrow-maximise</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-minimise-outline"></i>typcn typcn-arrow-minimise-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-minimise"></i>typcn typcn-arrow-minimise</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-move-outline"></i>typcn typcn-arrow-move-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-move"></i>typcn typcn-arrow-move</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-repeat-outline"></i>typcn typcn-arrow-repeat-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-repeat"></i>typcn typcn-arrow-repeat</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-right-outline"></i>typcn typcn-arrow-right-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-right-thick"></i>typcn typcn-arrow-right-thick</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-right"></i>typcn typcn-arrow-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-shuffle"></i>typcn typcn-arrow-shuffle</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-sorted-down"></i>typcn typcn-arrow-sorted-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-sorted-up"></i>typcn typcn-arrow-sorted-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-sync-outline"></i>typcn typcn-arrow-sync-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-sync"></i>typcn typcn-arrow-sync</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-unsorted"></i>typcn typcn-arrow-unsorted</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-up-outline"></i>typcn typcn-arrow-up-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-up-thick"></i>typcn typcn-arrow-up-thick</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-arrow-up"></i>typcn typcn-arrow-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-at"></i>typcn typcn-at</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-attachment-outline"></i>typcn typcn-attachment-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-attachment"></i>typcn typcn-attachment</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-backspace-outline"></i>typcn typcn-backspace-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-backspace"></i>typcn typcn-backspace</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-battery-charge"></i>typcn typcn-battery-charge</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-battery-full"></i>typcn typcn-battery-full</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-battery-high"></i>typcn typcn-battery-high</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-battery-low"></i>typcn typcn-battery-low</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-battery-mid"></i>typcn typcn-battery-mid</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-beaker"></i>typcn typcn-beaker</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-beer"></i>typcn typcn-beer</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-bell"></i>typcn typcn-bell</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-book"></i>typcn typcn-book</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-bookmark"></i>typcn typcn-bookmark</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-briefcase"></i>typcn typcn-briefcase</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-brush"></i>typcn typcn-brush</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-business-card"></i>typcn typcn-business-card</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-calculator"></i>typcn typcn-calculator</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-calendar-outline"></i>typcn typcn-calendar-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-calendar"></i>typcn typcn-calendar</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-camera-outline"></i>typcn typcn-camera-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-camera"></i>typcn typcn-camera</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-cancel-outline"></i>typcn typcn-cancel-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-cancel"></i>typcn typcn-cancel</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-chart-area-outline"></i>typcn typcn-chart-area-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-chart-area"></i>typcn typcn-chart-area</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-chart-bar-outline"></i>typcn typcn-chart-bar-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-chart-bar"></i>typcn typcn-chart-bar</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-chart-line-outline"></i>typcn typcn-chart-line-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-chart-line"></i>typcn typcn-chart-line</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-chart-pie-outline"></i>typcn typcn-chart-pie-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-chart-pie"></i>typcn typcn-chart-pie</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-chevron-left-outline"></i>typcn typcn-chevron-left-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-chevron-left"></i>typcn typcn-chevron-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-chevron-right-outline"></i>typcn typcn-chevron-right-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-chevron-right"></i>typcn typcn-chevron-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-clipboard"></i>typcn typcn-clipboard</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-cloud-storage"></i>typcn typcn-cloud-storage</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-cloud-storage-outline"></i>typcn typcn-cloud-storage-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-code-outline"></i>typcn typcn-code-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-code"></i>typcn typcn-code</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-coffee"></i>typcn typcn-coffee</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-cog-outline"></i>typcn typcn-cog-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-cog"></i>typcn typcn-cog</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-compass"></i>typcn typcn-compass</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-contacts"></i>typcn typcn-contacts</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-credit-card"></i>typcn typcn-credit-card</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-css3"></i>typcn typcn-css3</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-database"></i>typcn typcn-database</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-delete-outline"></i>typcn typcn-delete-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-delete"></i>typcn typcn-delete</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-device-desktop"></i>typcn typcn-device-desktop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-device-laptop"></i>typcn typcn-device-laptop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-device-phone"></i>typcn typcn-device-phone</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-device-tablet"></i>typcn typcn-device-tablet</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-directions"></i>typcn typcn-directions</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-divide-outline"></i>typcn typcn-divide-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-divide"></i>typcn typcn-divide</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-document-add"></i>typcn typcn-document-add</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-document-delete"></i>typcn typcn-document-delete</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-document-text"></i>typcn typcn-document-text</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-document"></i>typcn typcn-document</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-download-outline"></i>typcn typcn-download-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-download"></i>typcn typcn-download</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-dropbox"></i>typcn typcn-dropbox</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-edit"></i>typcn typcn-edit</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-eject-outline"></i>typcn typcn-eject-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-eject"></i>typcn typcn-eject</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-equals-outline"></i>typcn typcn-equals-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-equals"></i>typcn typcn-equals</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-export-outline"></i>typcn typcn-export-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-export"></i>typcn typcn-export</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-eye-outline"></i>typcn typcn-eye-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-eye"></i>typcn typcn-eye</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-feather"></i>typcn typcn-feather</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-film"></i>typcn typcn-film</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-filter"></i>typcn typcn-filter</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-flag-outline"></i>typcn typcn-flag-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-flag"></i>typcn typcn-flag</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-flash-outline"></i>typcn typcn-flash-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-flash"></i>typcn typcn-flash</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-flow-children"></i>typcn typcn-flow-children</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-flow-merge"></i>typcn typcn-flow-merge</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-flow-parallel"></i>typcn typcn-flow-parallel</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-flow-switch"></i>typcn typcn-flow-switch</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-folder-add"></i>typcn typcn-folder-add</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-folder-delete"></i>typcn typcn-folder-delete</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-folder-open"></i>typcn typcn-folder-open</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-folder"></i>typcn typcn-folder</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-gift"></i>typcn typcn-gift</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-globe-outline"></i>typcn typcn-globe-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-globe"></i>typcn typcn-globe</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-group-outline"></i>typcn typcn-group-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-group"></i>typcn typcn-group</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-headphones"></i>typcn typcn-headphones</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-heart-full-outline"></i>typcn typcn-heart-full-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-heart-half-outline"></i>typcn typcn-</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-heart-outline"></i>typcn typcn-heart-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-heart"></i>typcn typcn-heart</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-home-outline"></i>typcn typcn-home-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-home"></i>typcn typcn-home</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-html5"></i>typcn typcn-html5</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-image-outline"></i>typcn typcn-image-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-image"></i>typcn typcn-image</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-infinity-outline"></i>typcn typcn-infinity-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-infinity"></i>typcn typcn-infinity</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-info-large-outline"></i>typcn typcn-info-large-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-info-large"></i>typcn typcn-info-large</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-info-outline"></i>typcn typcn-info-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-info"></i>typcn typcn-info</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-input-checked-outline"></i>typcn typcn-input-checked-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-input-checked"></i>typcn typcn-input-checked</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-key-outline"></i>typcn typcn-key-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-key"></i>typcn typcn-key</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-keyboard"></i>typcn typcn-keyboard</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-leaf"></i>typcn typcn-leaf</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-lightbulb"></i>typcn typcn-lightbulb</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-link-outline"></i>typcn typcn-link-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-link"></i>typcn typcn-link</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-location-arrow-outline"></i>typcn typcn-location-arrow-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-location-arrow"></i>typcn typcn-location-arrow</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-location-outline"></i>typcn typcn-location-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-location"></i>typcn typcn-location</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-lock-closed-outline"></i>typcn typcn-lock-closed-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-lock-closed"></i>typcn typcn-lock-closed</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-lock-open-outline"></i>typcn typcn-lock-open-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-lock-open"></i>typcn typcn-lock-open</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-mail"></i>typcn typcn-mail</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-map"></i>typcn typcn-map</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-eject-outline"></i>typcn typcn-media-eject-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-eject"></i>typcn typcn-media-eject</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-fast-forward-outline"></i>typcn typcn-media-fast-forward-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-fast-forward"></i>typcn typcn-media-fast-forward</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-pause-outline"></i>typcn typcn-media-pause-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-pause"></i>typcn typcn-media-pause</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-play-outline"></i>typcn typcn-media-play-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-play-reverse-outline"></i>typcn typcn-media-play-reverse-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-play-reverse"></i>typcn typcn-media-play-reverse</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-play"></i>typcn typcn-media-play</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-record-outline"></i>typcn typcn-media-record-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-record"></i>typcn typcn-media-record</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-rewind-outline"></i>typcn typcn-media-rewind-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-rewind"></i>typcn typcn-media-rewind</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-stop-outline"></i>typcn typcn-media-stop-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-media-stop"></i>typcn typcn-media-stop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-message-typing"></i>typcn typcn-message-typing</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-message"></i>typcn typcn-message</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-messages"></i>typcn typcn-messages</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-microphone-outline"></i>typcn typcn-microphone-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-microphone"></i>typcn typcn-microphone</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-minus-outline"></i>typcn typcn-minus-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-minus"></i>typcn typcn-minus</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-mortar-board"></i>typcn typcn-mortar-board</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-news"></i>typcn typcn-news</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-notes-outline"></i>typcn typcn-notes-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-notes"></i>typcn typcn-notes</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-pen"></i>typcn typcn-pen</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-pencil"></i>typcn typcn-pencil</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-phone-outline"></i>typcn typcn-phone-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-phone"></i>typcn typcn-phone</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-pi-outline"></i>typcn typcn-pi-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-pi"></i>typcn typcn-pi</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-pin-outline"></i>typcn typcn-pin-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-pin"></i>typcn typcn-pin</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-pipette"></i>typcn typcn-pipette</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-plane-outline"></i>typcn typcn-plane-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-plane"></i>typcn typcn-plane</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-plug"></i>typcn typcn-plug</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-plus-outline"></i>typcn typcn-plus-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-plus"></i>typcn typcn-plus</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-point-of-interest-outline"></i>typcn typcn-point-of-interest-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-point-of-interest"></i>typcn typcn-point-of-interest</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-power-outline"></i>typcn typcn-power-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-power"></i>typcn typcn-power</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-printer"></i>typcn typcn-printer</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-puzzle-outline"></i>typcn typcn-puzzle-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-puzzle"></i>typcn typcn-puzzle</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-radar-outline"></i>typcn typcn-radar-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-radar"></i>typcn typcn-typcn-radar</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-refresh-outline"></i>typcn typcn-refresh-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-refresh"></i>typcn typcn-refresh</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-rss-outline"></i>typcn typcn-rss-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-rss"></i>typcn typcn-rss</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-scissors-outline"></i>typcn typcn-scissors-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-scissors"></i>typcn typcn-scissors</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-shopping-bag"></i>typcn typcn-shopping-bag</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-shopping-cart"></i>typcn typcn-shopping-cart</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-at-circular"></i>typcn typcn-social-at-circular</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-dribbble-circular"></i>typcn typcn-social-dribbble-circular</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-dribbble"></i>typcn typcn-social-dribbble</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-facebook-circular"></i>typcn typcn-social-facebook-circular</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-facebook"></i>typcn typcn-social-facebook</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-flickr-circular"></i>typcn typcn-social-flickr-circular</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-flickr"></i>typcn typcn-social-flickr</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-github-circular"></i>typcn typcn-social-github-circular</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-github"></i>typcn typcn-social-github</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-google-plus-circular"></i>typcn typcn-social-google-plus-circular</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-google-plus"></i>typcn typcn-social-google-plus</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-instagram-circular"></i>typcn typcn-social-instagram-circular</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-instagram"></i>typcn typcn-social-instagram</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-last-fm-circular"></i>typcn typcn-social-last-fm-circular</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-last-fm"></i>typcn typcn-social-last-fm</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-linkedin-circular"></i>typcn typcn-social-linkedin-circular</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-linkedin"></i>typcn typcn-social-linkedin</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-pinterest-circular"></i>typcn typcn-social-pinterest-circular</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-pinterest"></i>typcn typcn-social-pinterest</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-skype-outline"></i>typcn typcn-social-skype-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-skype"></i>typcn typcn-social-skype</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-tumbler-circular"></i>typcn typcn-social-tumbler-circular</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-tumbler"></i>typcn typcn-social-tumbler</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-twitter-circular"></i>typcn typcn-social-twitter-circular</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-twitter"></i>typcn typcn-social-twitter</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-vimeo-circular"></i>typcn typcn-social-vimeo-circular</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-vimeo"></i>typcn typcn-social-vimeo</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-youtube-circular"></i>typcn typcn-social-youtube-circular</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-social-youtube"></i>typcn typcn-social-youtube</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-sort-alphabetically-outline"></i>typcn typcn-sort-alphabetically-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-sort-alphabetically"></i>typcn typcn-sort-alphabetically</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-sort-numerically-outline"></i>typcn typcn-sort-numerically-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-sort-numerically"></i>typcn typcn-sort-numerically</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn typcn-spanner-outline"></i>typcn typcn-spanner-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-spanner"></i>typcn typcn-spanner</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-spiral"></i>typcn typcn-spiral</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-star-full-outline"></i>typcn typcn-star-full-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-star-half-outline"></i>typcn typcn-star-half-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-star-half"></i>typcn typcn-star-half</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-star-outline"></i>typcn typcn-star-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-star"></i>typcn typcn-star</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-starburst-outline"></i>typcn typcn-starburst-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-starburst"></i>typcn typcn-starburst</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-stopwatch"></i>typcn typcn-stopwatch</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-support"></i>typcn typcn-support</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-tabs-outline"></i>typcn typcn-tabs-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-tag"></i>typcn typcn-tag</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-tags"></i>typcn typcn-tags</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-th-large-outline"></i>typcn typcn-th-large-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-th-large"></i>typcn typcn-th-large</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-th-list-outline"></i>typcn typcn-th-list-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-th-list"></i>typcn typcn-th-list</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-th-menu-outline"></i>typcn typcn-th-menu-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-th-menu"></i>typcn typcn-th-menu</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-th-small-outline"></i>typcn typcn-th-small-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-th-small"></i>typcn typcn-th-small</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-thermometer"></i>typcn typcn-thermometer</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-thumbs-down"></i>typcn typcn-thumbs-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-thumbs-ok"></i>typcn typcn-thumbs-ok</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-thumbs-up"></i>typcn typcn-thumbs-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-tick-outline"></i>typcn typcn-tick-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-tick"></i>typcn typcn-tick</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-ticket"></i>typcn typcn-ticket</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-time"></i>typcn typcn-time</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-times-outline"></i>typcn typcn-times-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-times"></i>typcn typcn-times</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-trash"></i>typcn typcn-trash</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-tree"></i>typcn typcn-tree</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-upload-outline"></i>typcn typcn-upload-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-upload"></i>typcn typcn-upload</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-user-add-outline"></i>typcn typcn-user-add-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-user-add"></i>typcn typcn-user-add</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-user-delete-outline"></i>typcn typcn-user-delete-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-user-delete"></i>typcn typcn-user-delete</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-user-outline"></i>typcn typcn-user-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-user"></i>typcn typcn-user</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-vendor-android"></i>typcn typcn-vendor-android</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-vendor-apple"></i>typcn typcn-vendor-apple</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-vendor-microsoft"></i>typcn typcn-vendor-microsoft</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-video-outline"></i>typcn typcn-video-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-video"></i>typcn typcn-video</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-volume-down"></i>typcn typcn-volume-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-volume-mute"></i>typcn typcn-volume-mute</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-volume-up"></i>typcn typcn-volume-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-volume"></i>typcn typcn-volume</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-warning-outline"></i>typcn typcn-warning-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-warning"></i>typcn typcn-warning</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-watch"></i>typcn typcn-watch</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-waves-outline"></i>typcn typcn-waves-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-waves"></i>typcn typcn-waves</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-weather-cloudy"></i>typcn typcn-weather-cloudy</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-weather-downpour"></i>typcn typcn-weather-downpour</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-weather-night"></i>typcn typcn-weather-night</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-weather-partly-sunny"></i>typcn typcn-weather-partly-sunny</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-weather-shower"></i>typcn typcn-weather-shower</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-weather-snow"></i>typcn typcn-weather-snow</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-weather-stormy"></i>typcn typcn-weather-stormy</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-weather-sunny"></i>typcn typcn-weather-sunny</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-weather-windy-cloudy"></i>typcn typcn-weather-windy-cloudy</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-weather-windy"></i>typcn typcn-weather-windy</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-wi-fi-outline"></i>typcn typcn-wi-fi-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-wi-fi"></i>typcn typcn-wi-fi</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-wine"></i>typcn typcn-wine</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-world-outline"></i>typcn typcn-world-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-world"></i>typcn typcn-world</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-zoom-in-outline"></i>typcn typcn-zoom-in-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-zoom-in"></i>typcn typcn-zoom-in</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-zoom-out-outline"></i>typcn typcn-zoom-out-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-zoom-out"></i>typcn typcn-zoom-out</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-zoom-outline"></i>typcn typcn-zoom-outline</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="typcn typcn-zoom"></i>typcn typcn-zoom</p>
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