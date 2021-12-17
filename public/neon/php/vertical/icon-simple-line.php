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
                        <h4 class="xp-page-title">Simple Line Icons</h4>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="xp-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Icons</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Simple Line Icons</li>
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
                                <h5 class="card-title text-black">Simple Line Icons</h5>
                                <h6 class="card-subtitle">Usage <code>&lt;i class="icon-user"&gt;&lt;/i&gt;</code>.</h6>
                            </div>
                            <!-- End XP Card Header -->

                            <!-- Start XP Col -->
                            <div class="card-body">
                                <div class="row xp-icon-box">
                                    
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-user"></i>icon-user</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-people"></i>icon-people</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-user-female"></i>icon-user-female</p>
                                    </div>                                    
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-user-follow"></i>icon-user-follow</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-user-following"></i>icon-user-following</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-user-unfollow"></i>icon-user-unfollow</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-login"></i>icon-login</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-logout"></i>icon-logout</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-emotsmile"></i>icon-emotsmile</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-phone"></i>icon-phone</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-call-end"></i>icon-call-end</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-call-in"></i>icon-call-in</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-call-out"></i>icon-call-out</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-map"></i>icon-map</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-location-pin"></i>icon-location-pin</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-direction"></i>icon-direction</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-directions"></i>icon-directions</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-compass"></i>icon-compass</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-layers"></i>icon-layers</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-menu"></i>icon-menu</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-list"></i>icon-list</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-options-vertical"></i>icon-options-vertical</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-options"></i>icon-options</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-arrow-down"></i>icon-arrow-down</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-arrow-left"></i>icon-arrow-left</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-arrow-right"></i>icon-arrow-right</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-arrow-up"></i>icon-arrow-up</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-arrow-up-circle"></i>icon-arrow-up-circle</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-arrow-left-circle"></i>icon-arrow-left-circle</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-arrow-right-circle"></i>icon-arrow-right-circle</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-arrow-down-circle"></i>icon-arrow-down-circle</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-check"></i>icon-check</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-clock"></i>icon-clock</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-plus"></i>icon-plus</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-minus"></i>icon-minus</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-close"></i>icon-close</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-event"></i>icon-event</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-exclamation"></i>icon-exclamation</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-organization"></i>icon-organization</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-trophy"></i>icon-trophy</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-screen-smartphone"></i>icon-screen-smartphone</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-screen-desktop"></i>icon-screen-desktop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-plane"></i>icon-plane</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-notebook"></i>icon-notebook</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-mustache"></i>icon-mustache</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-mouse"></i>icon-mouse</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-magnet"></i>icon-magnet</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-energy"></i>icon-energy</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-disc"></i>icon-disc</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-cursor"></i>icon-cursor</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-cursor-move"></i>icon-cursor-move</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-crop"></i>icon-crop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-chemistry"></i>icon-chemistry</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-speedometer"></i>icon-speedometer</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-shield"></i>icon-shield</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-screen-tablet"></i>icon-screen-tablet</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-magic-wand"></i>icon-magic-wand</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-hourglass"></i>icon-hourglass</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-graduation"></i>icon-graduation</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-ghost"></i>icon-ghost</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-game-controller"></i>icon-game-controller</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-fire"></i>icon-fire</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-eyeglass"></i>icon-eyeglass</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-envelope-open"></i>icon-envelope-open</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-envelope-letter"></i>icon-envelope-letter</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-bell"></i>icon-bell</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-badge"></i>icon-badge</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-anchor"></i>icon-anchor</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-wallet"></i>icon-wallet</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-vector"></i>icon-vector</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-speech"></i>icon-speech</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-puzzle"></i>icon-puzzle</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-printer"></i>icon-printer</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-present"></i>icon-present</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-playlist"></i>icon-playlist</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-pin"></i>icon-pin</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-picture"></i>icon-picture</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-handbag"></i>icon-handbag</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-globe-alt"></i>icon-globe-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-globe"></i>icon-globe</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-folder-alt"></i>icon-folder-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-folder"></i>icon-folder</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-film"></i>icon-film</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-feed"></i>icon-feed</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-drop"></i>icon-drop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-drawer"></i>icon-drawer</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-docs"></i>icon-docs</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-doc"></i>icon-doc</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-diamond"></i>icon-diamond</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-cup"></i>icon-cup</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-calculator"></i>icon-calculator</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-bubbles"></i>icon-bubbles</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-briefcase"></i>icon-briefcase</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-book-open"></i>icon-book-open</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-basket-loaded"></i>icon-basket-loaded</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-basket"></i>icon-basket</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-bag"></i>icon-bag</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-action-undo"></i>icon-action-undo</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-action-redo"></i>icon-action-redo</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-wrench"></i>icon-wrench</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-umbrella"></i>icon-umbrella</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-trash"></i>icon-trash</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-tag"></i>icon-tag</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-support"></i>icon-support</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-frame"></i>icon-frame</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-size-fullscreen"></i>icon-size-fullscreen</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-size-actual"></i>icon-size-actual</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-shuffle"></i>icon-shuffle</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-share-alt"></i>icon-share-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-share"></i>icon-share</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-rocket"></i>icon-rocket</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-question"></i>icon-question</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-pie-chart"></i>icon-pie-chart</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-pencil"></i>icon-pencil</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-note"></i>icon-note</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-loop"></i>icon-loop</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-home"></i>icon-home</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-grid"></i>icon-grid</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-graph"></i>icon-graph</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-microphone"></i>icon-microphone</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-music-tone-alt"></i>icon-music-tone-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-music-tone"></i>icon-music-tone</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-earphones-alt"></i>icon-earphones-alt</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-earphones"></i>icon-earphones</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-equalizer"></i>icon-equalizer</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-like"></i>icon-like</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-dislike"></i>icon-dislike</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-control-start"></i>icon-control-start</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-control-rewind"></i>icon-control-rewind</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-control-play"></i>icon-control-play</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-control-pause"></i>icon-control-pause</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-control-forward"></i>icon-control-forward</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-control-end"></i>icon-control-end</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-volume-1"></i>icon-volume-1</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-volume-2"></i>icon-volume-2</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-volume-off"></i>icon-volume-off</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-calendar"></i>icon-calendar</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-bulb"></i>icon-bulb</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-chart"></i>icon-chart</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-ban"></i>icon-ban</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-bubble"></i>icon-bubble</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-camrecorder"></i>icon-camrecorder</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-camera"></i>icon-camera</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-cloud-download"></i>icon-cloud-download</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-cloud-upload"></i>icon-cloud-upload</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-envelope"></i>icon-envelope</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-eye"></i>icon-eye</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-flag"></i>icon-flag</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-heart"></i>icon-heart</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-info"></i>icon-info</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-key"></i>icon-key</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-link"></i>icon-link</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-lock"></i>icon-lock</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-lock-open"></i>icon-lock-open</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-magnifier"></i>icon-magnifier</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-magnifier-add"></i>icon-magnifier-add</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-magnifier-remove"></i>icon-magnifier-remove</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-paper-clip"></i>icon-paper-clip</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-paper-plane"></i>icon-paper-plane</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-power"></i>icon-power</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-refresh"></i>icon-refresh</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-reload"></i>icon-reload</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-settings"></i>icon-settings</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-star"></i>icon-star</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-symbol-female"></i>icon-symbol-female</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-symbol-male"></i>icon-symbol-male</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-target"></i>icon-target</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-credit-card"></i>icon-credit-card</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-paypal"></i>icon-paypal</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-tumblr"></i>icon-social-tumblr</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-twitter"></i>icon-social-twitter</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-facebook"></i>icon-social-facebook</p>
                                    </div> 
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-instagram"></i>icon-social-instagram</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-linkedin"></i>icon-social-linkedin</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-pinterest"></i>icon-social-pinterest</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-github"></i>icon-social-github</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-google"></i>icon-social-google</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-reddit"></i>icon-social-reddit</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-skype"></i>icon-social-skype</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-dribbble"></i>icon-social-dribbble</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-behance"></i>icon-social-behance</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-foursqare"></i>icon-social-foursqare</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-soundcloud"></i>icon-social-soundcloud</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-spotify"></i>icon-social-spotify</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-stumbleupon"></i>icon-social-stumbleupon</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-youtube"></i>icon-social-youtube</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-dropbox"></i>icon-social-dropbox</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-vkontakte"></i>icon-social-vkontakte</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <p><i class="icon-social-steam"></i>icon-social-steam</p>
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