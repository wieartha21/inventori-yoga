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
                        <h4 class="xp-page-title">Buttons</h4>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="xp-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">UI Kits</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Buttons</li>
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
                                <h5 class="card-title text-black">Example Bottons</h5>
                                <h6 class="card-subtitle">Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-light">Light</button>
                                    <button type="button" class="btn btn-dark">Dark</button>
                                    <button type="button" class="btn btn-link">Link</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start XP Col -->

                    <!-- End XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Outline buttons</h5>
                                <h6 class="card-subtitle">In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code class="highlighter-rouge">.btn-outline-*</code> ones to remove all background images and colors on any button.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button">
                                    <button type="button" class="btn btn-outline-primary">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                    <button type="button" class="btn btn-outline-success">Success</button>
                                    <button type="button" class="btn btn-outline-danger">Danger</button>
                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                    <button type="button" class="btn btn-outline-info">Info</button>
                                    <button type="button" class="btn btn-outline-light">Light</button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start XP Col -->

                    <!-- End XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Button Tags</h5>
                                <h6 class="card-subtitle">The <code class="highlighter-rouge">.btn</code> classes are designed to be used with the <code class="highlighter-rouge">&lt;button&gt;</code> element. However, you can also use these classes on <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;input&gt;</code> elements (though some browsers may apply a slightly different rendering).</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button">
                                    <a class="btn btn-primary" href="#" role="button">Link</a>
                                    <button class="btn btn-primary" type="submit">Button</button>
                                    <input class="btn btn-primary" type="button" value="Input">
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                    <input class="btn btn-primary" type="reset" value="Reset">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Sizes Buttons</h5>
                                <h6 class="card-subtitle">Fancy larger or smaller buttons? Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button">
                                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                    <button type="button" class="btn btn-secondary btn-lg">Large button</button>
                                    <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                    <button type="button" class="btn btn-secondary btn-sm">Small button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Block Buttons</h5>
                                <h6 class="card-subtitle">Fancy larger or smaller buttons? Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                                    <button type="button" class="btn btn-secondary btn-sm btn-block">Block level button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Active State Button</h5>
                                <h6 class="card-subtitle">Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. <strong>There’s no need to add a class to <code class="highlighter-rouge">&lt;button&gt;</code>s as they use a pseudo-class</strong>. However, you can still force the same active appearance with <code class="highlighter-rouge">.active</code> (and include the <code>aria-pressed="true"</code> attribute) should you need to replicate the state programmatically.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button">
                                    <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>    
                                    <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Disable State Buttons</h5>
                                <h6 class="card-subtitle">Make buttons look inactive by adding the <code class="highlighter-rouge">disabled</code> boolean attribute to any <code class="highlighter-rouge">&lt;button&gt;</code> element.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button">
                                    <button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
                                    <button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Toggle State Buttons</h5>
                                <h6 class="card-subtitle">Add <code class="highlighter-rouge">data-toggle="button"</code> to toggle a button’s <code class="highlighter-rouge">active</code> state. If you’re pre-toggling a button, you must manually add the <code class="highlighter-rouge">.active</code> class <strong>and</strong> <code class="highlighter-rouge">aria-pressed="true"</code> to the <code class="highlighter-rouge">&lt;button&gt;</code>.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button">
                                    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false">
                                        Single toggle
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Checkbox Button</h5>
                                <h6 class="card-subtitle">Bootstrap’s <code class="highlighter-rouge">.button</code> styles can be applied to other elements, such as <code class="highlighter-rouge">&lt;label&gt;</code>s, to provide checkbox or radio style button toggling. Add <code class="highlighter-rouge">data-toggle="buttons"</code> to a <code class="highlighter-rouge">.btn-group</code> containing those modified buttons to enable their toggling behavior via JavaScript and add <code class="highlighter-rouge">.btn-group-toggle</code> to style the <code class="highlighter-rouge">&lt;input&gt;</code>s within your buttons. <strong>Note that you can create single input-powered buttons or groups of them.</strong></h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button">
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                      <label class="btn btn-secondary active">
                                        <input type="checkbox" checked > Checked
                                      </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Radio Buttons</h5>
                                <h6 class="card-subtitle">Bootstrap’s <code class="highlighter-rouge">.button</code> styles can be applied to other elements, such as <code class="highlighter-rouge">&lt;label&gt;</code>s, to provide checkbox or radio style button toggling. Add <code class="highlighter-rouge">data-toggle="buttons"</code> to a <code class="highlighter-rouge">.btn-group</code> containing those modified buttons to enable their toggling behavior via JavaScript and add <code class="highlighter-rouge">.btn-group-toggle</code> to style the <code class="highlighter-rouge">&lt;input&gt;</code>s within your buttons. <strong>Note that you can create single input-powered buttons or groups of them.</strong></h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                      <label class="btn btn-secondary active">
                                        <input type="radio" name="options" id="option1" checked> Active
                                      </label>
                                      <label class="btn btn-secondary">
                                        <input type="radio" name="options" id="option2"> Radio
                                      </label>
                                      <label class="btn btn-secondary">
                                        <input type="radio" name="options" id="option3"> Radio
                                      </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->               
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Button with Icon</h5>
                                <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button m-b-30">
                                    <button type="button" class="btn btn-primary"><i class="mdi mdi-send mr-2"></i> Submit</button>
                                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-content-save mr-2"></i> Save</button>
                                    <button type="button" class="btn btn-success"><i class="mdi mdi-plus mr-2"></i> Insert</button>
                                    <button type="button" class="btn btn-warning"><i class="mdi mdi-upload mr-2"></i> Update</button>
                                    <button type="button" class="btn btn-danger"><i class="mdi mdi-delete-sweep mr-2"></i> Delete</button>
                                </div>
                                <div class="xp-button m-b-30">
                                    <button type="button" class="btn btn-primary">Submit<i class="mdi mdi-send ml-2"></i> </button>
                                    <button type="button" class="btn btn-secondary">Save<i class="mdi mdi-content-save ml-2"></i> </button>
                                    <button type="button" class="btn btn-success">Insert<i class="mdi mdi-plus ml-2"></i> </button>
                                    <button type="button" class="btn btn-warning">Update<i class="mdi mdi-upload ml-2"></i></button>
                                    <button type="button" class="btn btn-danger">Delete<i class="mdi mdi-delete-sweep ml-2"></i></button>
                                </div>
                                <div class="xp-button">
                                    <button type="button" class="btn btn-primary"><i class="mdi mdi-send"></i> </button>
                                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-content-save"></i> </button>
                                    <button type="button" class="btn btn-success"><i class="mdi mdi-plus"></i> </button>
                                    <button type="button" class="btn btn-warning"><i class="mdi mdi-upload"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="mdi mdi-delete-sweep"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Rounded Button with Icon</h5>
                                <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button m-b-30">
                                    <button type="button" class="btn btn-rounded btn-primary"><i class="mdi mdi-send mr-2"></i> Submit</button>
                                    <button type="button" class="btn btn-rounded btn-secondary"><i class="mdi mdi-content-save mr-2"></i> Save</button>
                                    <button type="button" class="btn btn-rounded btn-success"><i class="mdi mdi-plus mr-2"></i> Insert</button>
                                    <button type="button" class="btn btn-rounded btn-warning"><i class="mdi mdi-upload mr-2"></i> Update</button>
                                    <button type="button" class="btn btn-rounded btn-danger"><i class="mdi mdi-delete-sweep mr-2"></i> Delete</button>
                                </div>
                                <div class="xp-button m-b-30">
                                    <button type="button" class="btn btn-rounded btn-primary">Submit<i class="mdi mdi-send ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-secondary">Save<i class="mdi mdi-content-save ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-success">Insert<i class="mdi mdi-plus ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-warning">Update<i class="mdi mdi-upload ml-2"></i></button>
                                    <button type="button" class="btn btn-rounded btn-danger">Delete<i class="mdi mdi-delete-sweep ml-2"></i></button>
                                </div>
                                <div class="xp-button">
                                    <button type="button" class="btn btn-round btn-primary"><i class="mdi mdi-send"></i> </button>
                                    <button type="button" class="btn btn-round btn-secondary"><i class="mdi mdi-content-save"></i> </button>
                                    <button type="button" class="btn btn-round btn-success"><i class="mdi mdi-plus"></i> </button>
                                    <button type="button" class="btn btn-round btn-warning"><i class="mdi mdi-upload"></i></button>
                                    <button type="button" class="btn btn-round btn-danger"><i class="mdi mdi-delete-sweep"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Button with Icon - Outline</h5>
                                <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button m-b-30">
                                    <button type="button" class="btn btn-outline-primary"><i class="mdi mdi-send mr-2"></i> Submit</button>
                                    <button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-content-save mr-2"></i> Save</button>
                                    <button type="button" class="btn btn-outline-success"><i class="mdi mdi-plus mr-2"></i> Insert</button>
                                    <button type="button" class="btn btn-outline-warning"><i class="mdi mdi-upload mr-2"></i> Update</button>
                                    <button type="button" class="btn btn-outline-danger"><i class="mdi mdi-delete-sweep mr-2"></i> Delete</button>
                                </div>
                                <div class="xp-button m-b-30">
                                    <button type="button" class="btn btn-outline-primary">Submit<i class="mdi mdi-send ml-2"></i> </button>
                                    <button type="button" class="btn btn-outline-secondary">Save<i class="mdi mdi-content-save ml-2"></i> </button>
                                    <button type="button" class="btn btn-outline-success">Insert<i class="mdi mdi-plus ml-2"></i> </button>
                                    <button type="button" class="btn btn-outline-warning">Update<i class="mdi mdi-upload ml-2"></i></button>
                                    <button type="button" class="btn btn-outline-danger">Delete<i class="mdi mdi-delete-sweep ml-2"></i></button>
                                </div>
                                <div class="xp-button">
                                    <button type="button" class="btn btn-outline-primary"><i class="mdi mdi-send"></i> </button>
                                    <button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-content-save"></i> </button>
                                    <button type="button" class="btn btn-outline-success"><i class="mdi mdi-plus"></i> </button>
                                    <button type="button" class="btn btn-outline-warning"><i class="mdi mdi-upload"></i></button>
                                    <button type="button" class="btn btn-outline-danger"><i class="mdi mdi-delete-sweep"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Rounded Button with Icon - Outline</h5>
                                <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button m-b-30">
                                    <button type="button" class="btn btn-rounded btn-outline-primary"><i class="mdi mdi-send mr-2"></i> Submit</button>
                                    <button type="button" class="btn btn-rounded btn-outline-secondary"><i class="mdi mdi-content-save mr-2"></i> Save</button>
                                    <button type="button" class="btn btn-rounded btn-outline-success"><i class="mdi mdi-plus mr-2"></i> Insert</button>
                                    <button type="button" class="btn btn-rounded btn-outline-warning"><i class="mdi mdi-upload mr-2"></i> Update</button>
                                    <button type="button" class="btn btn-rounded btn-outline-danger"><i class="mdi mdi-delete-sweep mr-2"></i> Delete</button>
                                </div>
                                <div class="xp-button m-b-30">
                                    <button type="button" class="btn btn-rounded btn-outline-primary">Submit<i class="mdi mdi-send ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-outline-secondary">Save<i class="mdi mdi-content-save ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-outline-success">Insert<i class="mdi mdi-plus ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-outline-warning">Update<i class="mdi mdi-upload ml-2"></i></button>
                                    <button type="button" class="btn btn-rounded btn-outline-danger">Delete<i class="mdi mdi-delete-sweep ml-2"></i></button>
                                </div>
                                <div class="xp-button">
                                    <button type="button" class="btn btn-round btn-outline-primary"><i class="mdi mdi-send"></i> </button>
                                    <button type="button" class="btn btn-round btn-outline-secondary"><i class="mdi mdi-content-save"></i> </button>
                                    <button type="button" class="btn btn-round btn-outline-success"><i class="mdi mdi-plus"></i> </button>
                                    <button type="button" class="btn btn-round btn-outline-warning"><i class="mdi mdi-upload"></i></button>
                                    <button type="button" class="btn btn-round btn-outline-danger"><i class="mdi mdi-delete-sweep"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Social Buttons</h5>
                                <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button m-b-30">
                                    <button type="button" class="btn btn-facebook"><i class="mdi mdi-facebook mr-2"></i> Facebook</button>
                                    <button type="button" class="btn btn-whatsapp"><i class="mdi mdi-whatsapp mr-2"></i> Whatsapp</button>
                                    <button type="button" class="btn btn-googleplus"><i class="mdi mdi-google-plus mr-2"></i> Google+</button>
                                    <button type="button" class="btn btn-instagram"><i class="mdi mdi-instagram mr-2"></i> Instagram</button>
                                    <button type="button" class="btn btn-youtube"><i class="fa fa-youtube mr-2"></i> Youtube</button>
                                    <button type="button" class="btn btn-twitter"><i class="mdi mdi-twitter mr-2"></i> Twitter</button>
                                    <button type="button" class="btn btn-linkedin"><i class="mdi mdi-linkedin mr-2"></i> Linkedin</button>
                                    <button type="button" class="btn btn-dribbble"><i class="mdi mdi-dribbble mr-2"></i> Dribble</button>
                                    <button type="button" class="btn btn-skype"><i class="mdi mdi-skype mr-2"></i> Skype</button>
                                    <button type="button" class="btn btn-pinterest"><i class="mdi mdi-pinterest mr-2"></i> Pinterest</button>
                                    <button type="button" class="btn btn-vk"><i class="mdi mdi-vk mr-2"></i> VKontakte</button>
                                    <button type="button" class="btn btn-tumblr"><i class="mdi mdi-tumblr mr-2"></i> Tumblr</button>
                                    <button type="button" class="btn btn-dropbox"><i class="mdi mdi-dropbox mr-2"></i> Dropbox</button>
                                    <button type="button" class="btn btn-flickr"><i class="fa fa-flickr mr-2"></i> Flickr</button>
                                </div>
                                <div class="xp-button m-b-30">
                                    <button type="button" class="btn btn-facebook">Facebook <i class="mdi mdi-facebook ml-2"></i> </button>
                                    <button type="button" class="btn btn-whatsapp">Whatsapp <i class="mdi mdi-whatsapp ml-2"></i> </button>
                                    <button type="button" class="btn btn-googleplus">Google+ <i class="mdi mdi-google-plus ml-2"></i> </button>
                                    <button type="button" class="btn btn-instagram">Instagram <i class="mdi mdi-instagram ml-2"></i> </button>
                                    <button type="button" class="btn btn-youtube">Youtube <i class="fa fa-youtube ml-2"></i> </button>
                                    <button type="button" class="btn btn-twitter">Twitter <i class="mdi mdi-twitter ml-2"></i> </button>
                                    <button type="button" class="btn btn-linkedin">Linkedin <i class="mdi mdi-linkedin ml-2"></i> </button>
                                    <button type="button" class="btn btn-dribbble">Dribble <i class="mdi mdi-dribbble ml-2"></i> </button>
                                    <button type="button" class="btn btn-skype">Skype <i class="mdi mdi-skype ml-2"></i> </button>
                                    <button type="button" class="btn btn-pinterest">Pinterest <i class="mdi mdi-pinterest ml-2"></i> </button>
                                    <button type="button" class="btn btn-vk">VKontakte <i class="mdi mdi-vk ml-2"></i> </button>
                                    <button type="button" class="btn btn-tumblr">Tumblr <i class="mdi mdi-tumblr ml-2"></i> </button>
                                    <button type="button" class="btn btn-dropbox">Dropbox <i class="mdi mdi-dropbox ml-2"></i> </button>
                                    <button type="button" class="btn btn-flickr">Flickr <i class="fa fa-flickr ml-2"></i> </button>
                                </div>
                                <div class="xp-button">
                                    <button type="button" class="btn btn-facebook"><i class="mdi mdi-facebook"></i> </button>
                                    <button type="button" class="btn btn-whatsapp"><i class="mdi mdi-whatsapp"></i> </button>
                                    <button type="button" class="btn btn-googleplus"><i class="mdi mdi-google-plus"></i> </button>
                                    <button type="button" class="btn btn-instagram"><i class="mdi mdi-instagram"></i> </button>
                                    <button type="button" class="btn btn-youtube"><i class="fa fa-youtube"></i> </button>
                                    <button type="button" class="btn btn-twitter"><i class="mdi mdi-twitter"></i> </button>
                                    <button type="button" class="btn btn-linkedin"><i class="mdi mdi-linkedin"></i> </button>
                                    <button type="button" class="btn btn-dribbble"><i class="mdi mdi-dribbble"></i> </button>
                                    <button type="button" class="btn btn-skype"><i class="mdi mdi-skype"></i> </button>
                                    <button type="button" class="btn btn-pinterest"><i class="mdi mdi-pinterest"></i> </button>
                                    <button type="button" class="btn btn-vk"><i class="mdi mdi-vk"></i> </button>
                                    <button type="button" class="btn btn-tumblr"><i class="mdi mdi-tumblr"></i> </button>
                                    <button type="button" class="btn btn-dropbox"><i class="mdi mdi-dropbox"></i> </button>
                                    <button type="button" class="btn btn-flickr"><i class="fa fa-flickr"></i> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Social Buttons - Rounded</h5>
                                <h6 class="card-subtitle">lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-button m-b-30">
                                    <button type="button" class="btn btn-rounded btn-facebook"><i class="mdi mdi-facebook mr-2"></i> Facebook</button>
                                    <button type="button" class="btn btn-rounded btn-whatsapp"><i class="mdi mdi-whatsapp mr-2"></i> Whatsapp</button>
                                    <button type="button" class="btn btn-rounded btn-googleplus"><i class="mdi mdi-google-plus mr-2"></i> Google+</button>
                                    <button type="button" class="btn btn-rounded btn-instagram"><i class="mdi mdi-instagram mr-2"></i> Instagram</button>
                                    <button type="button" class="btn btn-rounded btn-youtube"><i class="fa fa-youtube mr-2"></i> Youtube</button>
                                    <button type="button" class="btn btn-rounded btn-twitter"><i class="mdi mdi-twitter mr-2"></i> Twitter</button>
                                    <button type="button" class="btn btn-rounded btn-linkedin"><i class="mdi mdi-linkedin mr-2"></i> Linkedin</button>
                                    <button type="button" class="btn btn-rounded btn-dribbble"><i class="mdi mdi-dribbble mr-2"></i> Dribble</button>
                                    <button type="button" class="btn btn-rounded btn-skype"><i class="mdi mdi-skype mr-2"></i> Skype</button>
                                    <button type="button" class="btn btn-rounded btn-pinterest"><i class="mdi mdi-pinterest mr-2"></i> Pinterest</button>
                                    <button type="button" class="btn btn-rounded btn-vk"><i class="mdi mdi-vk mr-2"></i> VKontakte</button>
                                    <button type="button" class="btn btn-rounded btn-tumblr"><i class="mdi mdi-tumblr mr-2"></i> Tumblr</button>
                                    <button type="button" class="btn btn-rounded btn-dropbox"><i class="mdi mdi-dropbox mr-2"></i> Dropbox</button>
                                    <button type="button" class="btn btn-rounded btn-flickr"><i class="fa fa-flickr mr-2"></i> Flickr</button>
                                </div>
                                <div class="xp-button m-b-30">
                                    <button type="button" class="btn btn-rounded btn-facebook">Facebook <i class="mdi mdi-facebook ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-whatsapp">Whatsapp <i class="mdi mdi-whatsapp ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-googleplus">Google+ <i class="mdi mdi-google-plus ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-instagram">Instagram <i class="mdi mdi-instagram ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-youtube">Youtube <i class="fa fa-youtube ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-twitter">Twitter <i class="mdi mdi-twitter ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-linkedin">Linkedin <i class="mdi mdi-linkedin ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-dribbble">Dribble <i class="mdi mdi-dribbble ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-skype">Skype <i class="mdi mdi-skype ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-pinterest">Pinterest <i class="mdi mdi-pinterest ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-vk">VKontakte <i class="mdi mdi-vk ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-tumblr">Tumblr <i class="mdi mdi-tumblr ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-dropbox">Dropbox <i class="mdi mdi-dropbox ml-2"></i> </button>
                                    <button type="button" class="btn btn-rounded btn-flickr">Flickr <i class="fa fa-flickr ml-2"></i> </button>
                                </div>
                                <div class="xp-button">
                                    <button type="button" class="btn btn-round btn-facebook"><i class="mdi mdi-facebook"></i> </button>
                                    <button type="button" class="btn btn-round btn-whatsapp"><i class="mdi mdi-whatsapp"></i> </button>
                                    <button type="button" class="btn btn-round btn-googleplus"><i class="mdi mdi-google-plus"></i> </button>
                                    <button type="button" class="btn btn-round btn-instagram"><i class="mdi mdi-instagram"></i> </button>
                                    <button type="button" class="btn btn-round btn-youtube"><i class="fa fa-youtube"></i> </button>
                                    <button type="button" class="btn btn-round btn-twitter"><i class="mdi mdi-twitter"></i> </button>
                                    <button type="button" class="btn btn-round btn-linkedin"><i class="mdi mdi-linkedin"></i> </button>
                                    <button type="button" class="btn btn-round btn-dribbble"><i class="mdi mdi-dribbble"></i> </button>
                                    <button type="button" class="btn btn-round btn-skype"><i class="mdi mdi-skype"></i> </button>
                                    <button type="button" class="btn btn-round btn-pinterest"><i class="mdi mdi-pinterest"></i> </button>
                                    <button type="button" class="btn btn-round btn-vk"><i class="mdi mdi-vk"></i> </button>
                                    <button type="button" class="btn btn-round btn-tumblr"><i class="mdi mdi-tumblr"></i> </button>
                                    <button type="button" class="btn btn-round btn-dropbox"><i class="mdi mdi-dropbox"></i> </button>
                                    <button type="button" class="btn btn-round btn-flickr"><i class="fa fa-flickr"></i> </button>
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
    <script src="assets/js/horizontal-menu.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- End JS -->

</body>
</html>