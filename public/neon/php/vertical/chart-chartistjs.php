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
    <!-- Chartist Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/chartist-js/chartist.min.css">

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
                        <h4 class="xp-page-title">Chartist Chart</h4>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="xp-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chartist Chart</li>
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
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Advanced Smil Animations</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-advanced-smil-animations" class="ct-chart ct-golden-section xp-chartist-advanced-smil-animations"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col --> 

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">SVG Path Animations</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-svg-path-animations" class="ct-chart ct-golden-section xp-chartist-svg-path-animations"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->
                    
                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Simple Line</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-simple-line" class="ct-chart ct-golden-section xp-chartist-simple-line"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->                    

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Holes in Data</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-holes-in-data" class="ct-chart ct-golden-section xp-chartist-holes-in-data"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Filled Holes in Data</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-filled-holes-in-data" class="ct-chart ct-golden-section xp-chartist-filled-holes-in-data"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Only Holes in Data</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-only-holes-in-data" class="ct-chart ct-golden-section xp-chartist-only-holes-in-data"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Line Scatter Diagram with Responsive Settings</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-line-scatter-diagram" class="ct-chart ct-golden-section xp-chartist-line-scatter-diagram"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Line Area</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-line-area" class="ct-chart ct-golden-section xp-chartist-line-area"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col --> 

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Bi-Polar Line Chart With Area Only</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-bi-polar-line" class="ct-chart ct-golden-section xp-chartist-bi-polar-line"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->                      

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Line Interpolation / Smoothing</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-line-interpolation-smoothing" class="ct-chart ct-golden-section xp-chartist-line-interpolation-smoothing"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col --> 

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Series Overrides</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-series-overrides" class="ct-chart ct-golden-section xp-chartist-series-overrides"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col --> 

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Bi-Polar Bar</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-bi-polar-chart" class="ct-chart ct-golden-section xp-chartist-bi-polar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Overlapping Bars on Moblie</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-overlapping-bars-on-moblie" class="ct-chart ct-golden-section xp-chartist-overlapping-bars-on-moblie"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Add Peak Circles Using The Draw Events</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-add-peak-circles" class="ct-chart ct-golden-section xp-chartist-add-peak-circles"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Multi-Line Lables</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-multi-line-lables" class="ct-chart ct-golden-section xp-chartist-multi-line-lables"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Stacked Bar</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-stacked-bar" class="ct-chart ct-golden-section xp-chartist-stacked-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Horizontal Bar</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-horizontal-bar" class="ct-chart ct-golden-section xp-chartist-horizontal-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Extreme Responsive Configuration</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-info"></i>Series E</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-extreme-responsive-configuration" class="ct-chart ct-golden-section xp-chartist-extreme-responsive-configuration"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Distributed Series</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-info"></i>Series E</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-light"></i>Series F</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-dark"></i>Series G</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-distributed-series" class="ct-chart ct-golden-section xp-chartist-distributed-series"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Label Placement</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-label-placement" class="ct-chart ct-golden-section xp-chartist-label-placement"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Simple Pie Chart</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-simple-pie-chart" class="ct-chart ct-golden-section xp-chartist-simple-pie-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Pie Chart with custom labels</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-pie-chart-with-custom-labels" class="ct-chart ct-golden-section xp-chartist-pie-chart-with-custom-labels"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Gauge Chart</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-gauge-chart" class="ct-chart ct-golden-section xp-chartist-gauge-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Animating a Donut with Svg.Animate</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-info"></i>Series E</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-light"></i>Series F</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-dark"></i>Series G</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-animating-donut-with-svg-animate" class="ct-chart ct-golden-section xp-chartist-animating-donut-with-svg-animate"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Donut Chart Using Fill Rather Than Stroke</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-donut-fill-rather-chart" class="ct-chart ct-golden-section xp-chartist-donut-fill-rather-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Gauge Chart Using Fill Rather Than Stroke</h5>
                                <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-chart-label">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="xp-chartist-gauge-fill-rather-chart" class="ct-chart ct-golden-section xp-chartist-gauge-fill-rather-chart"></div>
                            </div>
                        </div>
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
	
    <!-- Chartist Chart JS -->    
    <script src="assets/plugins/chartist-js/chartist.min.js"></script>
    <script src="assets/plugins/chartist-js/chartist-plugin-tooltip.min.js"></script>    
    <script src="assets/js/init/chartistjs-init.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- End JS -->  

</body>
</html>