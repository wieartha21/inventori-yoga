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

<body class="xp-horizontal">

    <!-- Start XP Container -->
    <div id="xp-container">

        <!-- Start XP Rightbar -->
        <div class="xp-rightbar">

            <!-- XP Search Modal -->
            <div class="modal fade xpSearchModal" id="xpSearchModal" tabindex="-1" role="dialog" aria-labelledby="xpSearchModalLabel" aria-hidden="true">
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

            <!-- Start XP Headerbar -->
            <div class="xp-headerbar">

                <!-- Start XP Topbar -->
                <div class="xp-topbar">

                    <!-- Start XP Row -->
                    <div class="row"> 

                        <!-- Start XP Col -->
                        <div class="col-2 col-md-2 col-lg-2 align-self-center">
                            <!-- Start XP Logobar -->
                            <div class="xp-logobar">
                                <a href="index.php" class="xp-small-logo"><img src="assets/images/mobile-logo.svg" class="img-fluid" alt="logo"></a>
                                <a href="index.php" class="xp-main-logo"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                            </div>                        
                            <!-- End XP Logobar -->
                        </div> 
                        <!-- End XP Col -->

                        <!-- Start XP Col -->
                        <div class="col-10 col-md-10 col-lg-10">
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
                                    <li class="list-inline-item xp-horizontal-menu-toggle">
                                        <button type="button" class="navbar-toggle bg-transparent" data-toggle="collapse" data-target="#navbar-menu">
                                            <i class="icon-menu font-20 text-white"></i>
                                        </button>                                   
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End XP Col -->

                    </div> 
                    <!-- End XP Row -->

                </div>
                <!-- End XP Topbar -->

                <!-- Start XP Menubar -->                    
                <div class="xp-menubar text-left">

                    <!-- Start XP Nav -->
                    <nav class="xp-horizontal-nav xp-mobile-navbar xp-fixed-navbar">

                        <div class="collapse navbar-collapse" id="navbar-menu">
                          <ul class="xp-horizontal-menu">

                            <li class="scroll"><a href="index.php"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                            <li class="dropdown menu-item-has-mega-menu">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-layers"></i><span>UI Kits</span></a>
                              <div class="mega-menu dropdown-menu">
                                <ul class="mega-menu-row" role="menu">
                                  <li class="mega-menu-col col-md-4">
                                    <ul class="sub-menu">
                                        <li><a href="ui-kits-alerts.php">Alerts</a></li>
                                        <li><a href="ui-kits-badges.php">Badges</a></li>
                                        <li><a href="ui-kits-buttons.php">Buttons</a></li>
                                        <li><a href="ui-kits-cards.php">Cards</a></li>
                                        <li><a href="ui-kits-carousel.php">Carousel</a></li>
                                        <li><a href="ui-kits-collapse.php">Collapse</a></li>
                                    </ul>
                                  </li>
                                  <li class="mega-menu-col col-md-4">
                                    <ul class="sub-menu">
                                        <li><a href="ui-kits-dropdowns.php">Dropdowns</a></li>
                                        <li><a href="ui-kits-grids.php">Grids</a></li>
                                        <li><a href="ui-kits-images.php">Images</a></li>
                                        <li><a href="ui-kits-media.php">Media</a></li>
                                        <li><a href="ui-kits-modals.php">Modals</a></li>                                
                                        <li><a href="ui-kits-paginations.php">Paginations</a></li>
                                    </ul>
                                  </li>
                                  <li class="mega-menu-col col-md-4">
                                    <ul class="sub-menu">
                                        <li><a href="ui-kits-popovers.php">Popovers</a></li>                                
                                        <li><a href="ui-kits-progressbars.php">Progress Bars</a></li>
                                        <li><a href="ui-kits-tabs.php">Tabs</a></li>    
                                        <li><a href="ui-kits-tooltips.php">Tooltips</a></li>
                                        <li><a href="ui-kits-typography.php">Typography</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-social-dropbox"></i><span>Components</span></a>
                              <ul class="dropdown-menu">
                                <li><a href="components-nestable.php">Nestable</a></li>
                                <li><a href="components-ratings.php">Ratings</a></li>
                                <li><a href="components-range-slider.php">Range Slider</a></li>
                                <li><a href="components-switchery.php">Switchery</a></li>
                                <li><a href="components-treeview.php">Tree View</a></li>
                                <li><a href="components-widgets.php">Widgets</a></li>
                              </ul>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-drop"></i><span>Icons</span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="icon-material-design.php">Material Design</a></li>
                                    <li><a href="icon-font-awesome.php">Font Awesome</a></li>
                                    <li><a href="icon-simple-line.php">Simple Line Icons</a></li>
                                    <li><a href="icon-themify.php">Themify Icons</a></li>
                                    <li><a href="icon-typicons.php">Typicons</a></li>
                                    <li><a href="icon-ionicons.php">Ion Icons</a></li>
                                    <li><a href="icon-dripicons.php">Dripicons</a></li>
                              </ul>
                            </li>
                            <li class="scroll"><a href="events.php"><i class="icon-event"></i><span>Events</span></a></li>
                            <li class="dropdown menu-item-has-mega-menu">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-doc"></i><span>Forms</span></a>
                              <div class="mega-menu dropdown-menu">
                                <ul class="mega-menu-row" role="menu">
                                  <li class="mega-menu-col col-md-4">
                                    <ul class="sub-menu">
                                        <li><a href="form-inputs.php">Form Inputs</a></li>
                                        <li><a href="form-groups.php">Form Groups</a></li>
                                        <li><a href="form-layouts.php">Form Layouts</a></li>
                                        <li><a href="form-validations.php">Form Validations</a></li>
                                        <li><a href="form-editors.php">Form Editors</a></li>
                                    </ul>
                                  </li>
                                  <li class="mega-menu-col col-md-4">
                                    <ul class="sub-menu">
                                        <li><a href="form-file-uploads.php">Form File Uploads</a></li>
                                        <li><a href="form-colorpickers.php">Form Color Pickers</a></li>
                                        <li><a href="form-datepickers.php">Form Date Pickers</a></li>
                                        <li><a href="form-maxlength.php">Form MaxLength</a></li>
                                        <li><a href="form-touchspin.php">Form Touchspin</a></li>
                                    </ul>
                                  </li>
                                  <li class="mega-menu-col col-md-4">
                                    <ul class="sub-menu">
                                        <li><a href="form-input-mask.php">Form Input Mask</a></li>
                                        <li><a href="form-selects.php">Form Selects</a></li>
                                        <li><a href="form-xeditable.php">Form X-editable</a></li>
                                        <li><a href="form-wizards.php">Form Wizards</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-graph"></i><span>Charts</span></a>
                              <ul class="dropdown-menu">
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
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-options-vertical"></i><span>More</span></a>
                              <ul class="dropdown-menu">
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Email</a>
                                  <ul class="dropdown-menu">
                                    <li><a href="email-inbox.php">Email Inbox</a></li>
                                    <li><a href="email-open.php">Email Open</a></li>
                                    <li><a href="email-compose.php">Email Compose</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tables</a>
                                  <ul class="dropdown-menu">
                                    <li><a href="table-bootstrap.php">Bootstrap Table</a></li>
                                    <li><a href="table-datatable.php">Data Table</a></li>
                                    <li><a href="table-editable.php">Editable Table</a></li>
                                    <li><a href="table-rwdtable.php">RWD Table</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Maps</a>
                                  <ul class="dropdown-menu">
                                    <li><a href="map-google.php">Google Map</a></li>
                                    <li><a href="map-vector.php">Vector Map</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </li> 
                            <li class="dropdown menu-item-has-mega-menu">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-book-open"></i><span>Pages</span></a>
                              <div class="mega-menu dropdown-menu">
                                <ul class="mega-menu-row" role="menu">
                                  <li class="mega-menu-col col-md-4">
                                    <ul class="sub-menu">
                                        <li><a href="page-login.php">Login</a></li>
                                        <li><a href="page-register.php">Register</a></li>
                                        <li><a href="page-forgotpsw.php">Forgot Password</a></li>
                                        <li><a href="page-lock-screen.php">Lock Screen</a></li> 
                                        <li><a href="page-comingsoon.php">Coming Soon</a></li>
                                    </ul>
                                  </li>
                                  <li class="mega-menu-col col-md-4">
                                    <ul class="sub-menu">
                                        <li><a href="page-maintenance.php">Maintenance</a></li>                               
                                        <li><a href="page-404.php">Error 404</a></li>  
                                        <li><a href="page-403.php">Error 403</a></li>
                                        <li><a href="page-500.php">Error 500</a></li>  
                                        <li><a href="page-503.php">Error 503</a></li>
                                    </ul>
                                  </li>
                                  <li class="mega-menu-col col-md-4">
                                    <ul class="sub-menu">
                                        <li><a href="page-starter.php">Starter Page</a></li>
                                        <li><a href="page-timeline.php">Timeline</a></li>
                                        <li><a href="page-pricing.php">Pricing</a></li>
                                        <li><a href="page-invoice.php">Invoice</a></li>
                                        <li><a href="page-faq.php">FAQ</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </li> 
                          </ul>
                        </div>

                    </nav>
                    <!-- End XP Nav -->

                </div>
                <!-- End XP Menubar -->

            </div>
            <!-- End XP Headerbar -->

            <!-- Start XP Breadcrumbbar -->                    
            <div class="xp-breadcrumbbar">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <h4 class="xp-page-title">Widgets</h4>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="xp-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Components</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Widgets</li>
                            </ol>
                        </div>
                    </div>
                </div>          
            </div>
            <!-- End XP Breadcrumbbar -->

            <!-- Start XP Contentbar -->    
            <div class="xp-contentbar">

                <!-- Start Widget -->

                <!-- Start XP Row -->
                <div class="row"> 

                    <!-- Start XP Col -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-primary">2580</h4>
                                        <p class="mb-0 font-16 text-muted">Total Projects</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-primary-rgba">
                                            <i class="mdi mdi-file-document font-30 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="progress mt-3 mb-1" style="height: 5px;">
                                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0 text-primary">Up 85% in last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-success">55790</h4>
                                        <p class="mb-0 font-16 text-muted">Total Revenue</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-success-rgba">
                                            <i class="mdi mdi-currency-usd font-30 text-success"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="progress mt-3 mb-1" style="height: 5px;">
                                      <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0 text-success">Up 60% in last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-warning">930</h4>
                                        <p class="mb-0 font-16 text-muted">Total Clients</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-warning-rgba">
                                            <i class="mdi mdi-account-multiple font-30 text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="progress mt-3 mb-1" style="height: 5px;">
                                      <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0 text-warning">Down 78% in last month</p>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-danger">2750</h4>
                                        <p class="mb-0 font-16 text-muted">Total Visitors</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-danger-rgba">
                                            <i class="mdi mdi-eye font-30 text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="progress mt-3 mb-1" style="height: 5px;">
                                      <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0 text-danger">Down 55% in last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col --> 

                    <!-- Start XP Col -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box text-center">
                                    <input class="xp-knob" data-width="100" data-height="100" data-linecap=round data-bgColor="#e1e4e9" data-fgColor="#4c7cf3" data-thickness=".1" readonly value="85">
                                    <h4 class="xp-counter text-primary m-t-20">2580</h4>
                                    <p class="text-muted font-16">Projects</p>
                                    <p class="mb-0 f-w-5 text-danger"><span class="badge badge-primary"><i class="mdi mdi-arrow-up mx-1"></i>85%</span></p> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box text-center">
                                    <input class="xp-knob" data-width="100" data-height="100" data-linecap=round data-bgColor="#e1e4e9" data-fgColor="#2bcd72" data-thickness=".1" readonly value="54">
                                    <h4 class="xp-counter text-success m-t-20">55790</h4>
                                    <p class="text-muted font-16">Revenue</p>
                                    <p class="mb-0 f-w-5 text-success"><span class="badge badge-success"><i class="mdi mdi-arrow-up mx-1"></i>54%</span></p> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box text-center">
                                    <input class="xp-knob" data-width="100" data-height="100" data-linecap=round data-bgColor="#e1e4e9" data-fgColor="#fac751" data-thickness=".1" readonly value="64">
                                    <h4 class="xp-counter text-warning m-t-20">930</h4>
                                    <p class="text-muted font-16">Client</p>
                                    <p class="mb-0 f-w-5 text-danger"><span class="badge badge-warning"><i class="mdi mdi-arrow-down mx-1"></i>64%</span></p> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box text-center">
                                    <input class="xp-knob" data-width="100" data-height="100" data-linecap=round data-bgColor="#e1e4e9" data-fgColor="#ff4b5b" data-thickness=".1" readonly value="72">
                                    <h4 class="xp-counter text-danger m-t-20">2750</h4>
                                    <p class="text-muted font-16">Visitors</p>
                                    <p class="mb-0 f-w-5 text-danger"><span class="badge badge-danger"><i class="mdi mdi-arrow-down mx-1"></i>72%</span></p> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card bg-primary m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-white">2580</h4>
                                        <p class="mb-0 text-white">Total Projects</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg">
                                            <i class="mdi mdi-file-document font-40 text-white"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card bg-success m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-white">55790</h4>
                                        <p class="mb-0 text-white">Total Revenue</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg">
                                            <i class="mdi mdi-currency-usd font-40 text-white"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card bg-warning m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-white">930</h4>
                                        <p class="mb-0 text-white">Total Clients</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg">
                                            <i class="mdi mdi-account-multiple font-40 text-white"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card bg-danger m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-white">2750</h4>
                                        <p class="mb-0 text-white">Total Visitors</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg">
                                            <i class="mdi mdi-eye font-40 text-white"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card bg-primary m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-white">2580</h4>
                                        <p class="mb-0 text-white">Total Projects</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                            <i class="mdi mdi-file-document font-30 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card bg-success m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-white">55790</h4>
                                        <p class="mb-0 text-white">Total Revenue</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                            <i class="mdi mdi-currency-usd font-30 text-success"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card bg-warning m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-white">930</h4>
                                        <p class="mb-0 text-white">Total Clients</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                            <i class="mdi mdi-account-multiple font-30 text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card bg-danger m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-white">2750</h4>
                                        <p class="mb-0 text-white">Total Visitors</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                            <i class="mdi mdi-eye font-30 text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-primary">2580</h4>
                                        <p class="mb-0 text-muted">Total Projects</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg">
                                            <i class="mdi mdi-file-document font-40 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-success">55790</h4>
                                        <p class="mb-0 text-muted">Total Revenue</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg">
                                            <i class="mdi mdi-currency-usd font-40 text-success"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-warning">930</h4>
                                        <p class="mb-0 text-muted">Total Clients</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg">
                                            <i class="mdi mdi-account-multiple font-40 text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-danger">2750</h4>
                                        <p class="mb-0 text-muted">Total Visitors</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg">
                                            <i class="mdi mdi-eye font-40 text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-primary">2580</h4>
                                        <p class="mb-0 text-muted">Total Projects</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-primary">
                                            <i class="mdi mdi-file-document font-30 text-white"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-success">55790</h4>
                                        <p class="mb-0 text-muted">Total Revenue</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-success">
                                            <i class="mdi mdi-currency-usd font-30 text-white"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-warning">930</h4>
                                        <p class="mb-0 text-muted">Total Clients</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-warning">
                                            <i class="mdi mdi-account-multiple font-30 text-white"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-danger">2750</h4>
                                        <p class="mb-0 text-muted">Total Visitors</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-danger">
                                            <i class="mdi mdi-eye font-30 text-white"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->                    

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-primary">2580</h4>
                                        <p class="mb-0 text-muted">Total Projects</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-primary-rgba">
                                            <i class="mdi mdi-file-document font-30 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-success">55790</h4>
                                        <p class="mb-0 text-muted">Total Revenue</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-success-rgba">
                                            <i class="mdi mdi-currency-usd font-30 text-success"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-warning">930</h4>
                                        <p class="mb-0 text-muted">Total Clients</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-warning-rgba">
                                            <i class="mdi mdi-account-multiple font-30 text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <h4 class="xp-counter text-danger">2750</h4>
                                        <p class="mb-0 text-muted">Total Visitors</p>                        
                                    </div>
                                    <div class="float-right">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-danger-rgba">
                                            <i class="mdi mdi-eye font-30 text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">                                            
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-primary-rgba">
                                            <i class="mdi mdi-file-document font-30 text-primary"></i>
                                        </div>                   
                                    </div>
                                    <div class="float-right text-right">
                                        <h4 class="xp-counter text-primary">2580</h4>
                                        <p class="mb-0 text-muted">Total Projects</p> 
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">                                        
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-success-rgba">
                                            <i class="mdi mdi-currency-usd font-30 text-success"></i>
                                        </div>                       
                                    </div>
                                    <div class="float-right text-right">
                                        <h4 class="xp-counter text-success">55790</h4>
                                        <p class="mb-0 text-muted">Total Revenue</p> 
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-warning-rgba">
                                            <i class="mdi mdi-account-multiple font-30 text-warning"></i>
                                        </div>                                                                
                                    </div>
                                    <div class="float-right text-right">
                                        <h4 class="xp-counter text-warning">930</h4>
                                        <p class="mb-0 text-muted">Total Clients</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box">
                                    <div class="float-left">
                                        <div class="xp-widget-icon xp-widget-icon-bg bg-danger-rgba">
                                            <i class="mdi mdi-eye font-30 text-danger"></i>
                                        </div>                         
                                    </div>
                                    <div class="float-right text-right">
                                        <h4 class="xp-counter text-danger">2750</h4>
                                        <p class="mb-0 text-muted">Total Visitors</p>       
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box text-center">
                                    <div class="xp-widget-icon xp-widget-icon-bg bg-primary-rgba">
                                        <i class="mdi mdi-file-document font-30 text-primary"></i>
                                    </div>
                                    <h4 class="xp-counter text-primary m-t-20">2580</h4>
                                    <p class="text-muted">Total Projects</p>
                                    <p class="mb-0 f-w-5 text-danger"><i class="mdi mdi-arrow-down mx-1"></i>24.2%</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box text-center">
                                    <div class="xp-widget-icon xp-widget-icon-bg bg-success-rgba">
                                        <i class="mdi mdi-currency-usd font-30 text-success"></i>
                                    </div>
                                    <h4 class="xp-counter text-success m-t-20">55790</h4>
                                    <p class="text-muted">Total Revenue</p>
                                    <p class="mb-0 f-w-5 text-success"><i class="mdi mdi-arrow-up mx-1"></i>112.71%</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box text-center">
                                    <div class="xp-widget-icon xp-widget-icon-bg bg-warning-rgba">
                                        <i class="mdi mdi-account-multiple font-30 text-warning"></i>
                                    </div>
                                    <h4 class="xp-counter text-warning m-t-20">930</h4>
                                    <p class="text-muted">Total Clients</p>
                                    <p class="mb-0 f-w-5 text-success"><i class="mdi mdi-arrow-up mx-1"></i>24.2%</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- End XP Col -->                       
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box text-center">
                                    <div class="xp-widget-icon xp-widget-icon-bg bg-danger-rgba">
                                        <i class="mdi mdi-eye font-30 text-danger"></i>
                                    </div>
                                    <h4 class="xp-counter text-danger m-t-20">2750</h4>
                                    <p class="text-muted">Total Visitors</p>
                                    <p class="mb-0 f-w-5 text-danger"><i class="mdi mdi-arrow-down mx-1"></i>112.71%</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->                    

                    <!-- Start XP Col -->                       
                        <div class="col-lg-6 col-xl-4">
                            <div class="card m-b-30">
                                <div class="card-header bg-white">
                                    <h5 class="card-title text-black mb-0">Social Profile</h5>
                                </div>
                                <div class="card-body">
                                    <div class="xp-social-profile">
                                        <div class="xp-social-profile-img">
                                            <div class="row">
                                                <div class="col-4 px-1">
                                                    <img src="assets/images/ui-images/image-circle.jpg" class="rounded img-fluid" alt="img">
                                                </div>
                                                <div class="col-4 px-1">
                                                    <img src="assets/images/ui-images/image-rounded.jpg" class="rounded img-fluid" alt="img">
                                                </div>
                                                <div class="col-4 px-1">
                                                    <img src="assets/images/ui-images/image-thumbnail.jpg" class="rounded img-fluid" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xp-social-profile-top">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="xp-social-profile-star py-3">
                                                        <i class="icon-star font-20"></i>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="xp-social-profile-avatar text-center">
                                                        <img src="assets/images/ui-media/media-image-8.jpg" alt="user-profile" class="rounded-circle img-fluid"><span class="xp-social-profile-live"></span>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="xp-social-profile-menu text-right py-3">
                                                        <i class="icon-options font-20"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xp-social-profile-middle text-center">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="xp-social-profile-title">
                                                        <h5 class="my-1 text-black">karina_simons</h5>
                                                    </div>
                                                    <div class="xp-social-profile-subtitle">
                                                        <p class="mb-3 text-muted">Karina Simons</p>
                                                    </div>
                                                    <div class="xp-social-profile-desc">
                                                        <p class="text-muted mb-1">Lifestyle coach and photographer <br />delivering best images only...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xp-social-profile-bottom text-center">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="xp-social-profile-media pt-3">
                                                        <h5 class="text-black my-1">45</h5>
                                                        <p class="mb-0 text-muted">Posts</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="xp-social-profile-followers pt-3">
                                                        <h5 class="text-black my-1">278k</h5>
                                                        <p class="mb-0 text-muted">Fans</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="xp-social-profile-following pt-3">
                                                        <h5 class="text-black my-1">552</h5>
                                                        <p class="mb-0 text-muted">Likes</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End XP Col -->

                    <!-- Start XP Col -->                       
                    <div class="col-lg-6 col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black mb-0">Actions History</h5>
                            </div>
                            <div class="card-body">
                                <div class="xp-actions-history">
                                    <div class="xp-actions-history-list">
                                        <div class="xp-actions-history-item">                                            
                                            <h6 class="mb-1 text-black">Start Web Designing</h6>
                                            <p class="text-muted font-12">5 mins ago</p>
                                            <p class="m-b-30">We are start working on USA Project</p>
                                        </div>
                                    </div>
                                    <div class="xp-actions-history-list">
                                        <div class="xp-actions-history-item">
                                            <h6 class="mb-1 text-black">Completed Theme Development</h6>
                                            <p class="text-muted font-12">15 mins ago</p>
                                            <p class="m-b-30">We are completed a theme development into 5 days</p>
                                        </div>
                                    </div>
                                    <div class="xp-actions-history-list">
                                        <div class="xp-actions-history-item">
                                            <h6 class="mb-1 text-black">Project Submitted</h6>
                                            <p class="text-muted font-12">30 mins ago</p>
                                            <p class="m-b-30">We are done process of submitted project</p>
                                        </div>
                                    </div>
                                    <div class="xp-actions-history-list">
                                        <div class="xp-actions-history-item">
                                            <h6 class="mb-1 text-black">Received a Payment</h6>
                                            <p class="text-muted font-12">45 mins ago</p>
                                            <p class="m-b-30">We got monthy payment from clients</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->                       
                    <div class="col-lg-6 col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black mb-0">To do Lists</h5>
                            </div>
                            <div class="card-body">
                                <div class="xp-to-do-list">
                                    <ul id="list-group" class="list-group list-group-flush"></ul>
                                    <form class="add-items">
                                        <div class="input-group mt-3">
                                            <input type="text" class="form-control" id="todo-list-item" placeholder="What do you need to do today?" aria-label="What do you need to do today?" aria-describedby="button-addon-to-do-list">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary add" id="button-addon-to-do-list" type="submit">Add to List</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
                    <p class="mb-0">?? 2020 Neon - All Rights Reserved.</p>
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
    <script src="assets/js/horizontal-menu.js"></script>

    <!-- Knob Chart JS -->
    <script src="assets/plugins/jquery-knob/excanvas.js"></script>
    <script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script> 
    <script src="assets/js/init/knob-init.js"></script>

    <!-- To Do List JS -->
    <script src="assets/js/init/to-do-list-init.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- End JS -->

</body>
</html>