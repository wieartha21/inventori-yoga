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
                        <h4 class="xp-page-title">Form Validations</h4>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="xp-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Validations</li>
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
                        <div class="card m-b-30">

                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Form Validation</h5>
                                <h6 class="card-subtitle">For custom Bootstrap form validation messages, you’ll need to add the <code class="highlighter-rouge">novalidate</code> boolean attribute to your <code class="highlighter-rouge">&lt;form&gt;</code>.</h6>
                            </div>

                            <div class="card-body">

                                <form class="needs-validation" novalidate>
                                  <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">First name</label>
                                      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                      <div class="valid-feedback">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom02">Last name</label>
                                      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                      <div class="valid-feedback">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustomUsername">Username</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                          Please choose a username.
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationCustom03">City</label>
                                      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                      <div class="invalid-feedback">
                                        Please provide a valid city.
                                      </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label for="validationCustom04">State</label>
                                      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                      <div class="invalid-feedback">
                                        Please provide a valid state.
                                      </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label for="validationCustom05">Zip</label>
                                      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                      <div class="invalid-feedback">
                                        Please provide a valid zip.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                      <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                      </label>
                                      <div class="invalid-feedback">
                                        You must agree before submitting.
                                      </div>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">

                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Tooltips Validations</h5>
                                <h6 class="card-subtitle">If your form layout allows it, you can swap the <code class="highlighter-rouge">.{valid|invalid}-feedback</code> classes for <code class="highlighter-rouge">.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip. Be sure to have a parent with <code class="highlighter-rouge">position: relative</code> on it for tooltip positioning. In the example below, our column classes have this already, but your project may require an alternative setup.</h6>
                            </div>

                            <div class="card-body">

                                <form class="needs-validation" novalidate>
                                  <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                      <label for="validationTooltip01">First name</label>
                                      <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationTooltip02">Last name</label>
                                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationTooltipUsername">Username</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                        <div class="invalid-tooltip">
                                          Please choose a unique and valid username.
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip03">City</label>
                                      <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                                      <div class="invalid-tooltip">
                                        Please provide a valid city.
                                      </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label for="validationTooltip04">State</label>
                                      <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                                      <div class="invalid-tooltip">
                                        Please provide a valid state.
                                      </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label for="validationTooltip05">Zip</label>
                                      <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                                      <div class="invalid-tooltip">
                                        Please provide a valid zip.
                                      </div>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>                                                                                               

                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">

                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Browser defaults</h5>
                                <h6 class="card-subtitle">Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults.</h6>
                            </div>

                            <div class="card-body">

                                <form>
                                  <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                      <label for="validationDefault01">First name</label>
                                      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationDefault02">Last name</label>
                                      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationDefaultUsername">Username</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationDefault03">City</label>
                                      <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label for="validationDefault04">State</label>
                                      <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label for="validationDefault05">Zip</label>
                                      <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                      <label class="form-check-label" for="invalidCheck2">
                                        Agree to terms and conditions
                                      </label>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>                                

                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">

                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Server side</h5>
                                <h6 class="card-subtitle">We recommend using client side validation, but in case you require server side, you can indicate invalid and valid form fields with <code class="highlighter-rouge">.is-invalid</code> and <code class="highlighter-rouge">.is-valid</code>. Note that <code class="highlighter-rouge">.invalid-feedback</code> is also supported with these classes.</h6>
                            </div>

                            <div class="card-body">

                                <form>
                                  <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                      <label for="validationServer01">First name</label>
                                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                                      <div class="valid-feedback">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationServer02">Last name</label>
                                      <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                                      <div class="valid-feedback">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationServerUsername">Username</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                                        <div class="invalid-feedback">
                                          Please choose a username.
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationServer03">City</label>
                                      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                                      <div class="invalid-feedback">
                                        Please provide a valid city.
                                      </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label for="validationServer04">State</label>
                                      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                                      <div class="invalid-feedback">
                                        Please provide a valid state.
                                      </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label for="validationServer05">Zip</label>
                                      <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                                      <div class="invalid-feedback">
                                        Please provide a valid zip.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="form-check">
                                      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                                      <label class="form-check-label" for="invalidCheck3">
                                        Agree to terms and conditions
                                      </label>
                                      <div class="invalid-feedback">
                                        You must agree before submitting.
                                      </div>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>                                                                

                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">

                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Supported elements</h5>
                                <h6 class="card-subtitle">Our example forms show native textual <code class="highlighter-rouge">&lt;input&gt;</code>s above, but form validation styles are available for our custom form controls, too.</h6>
                            </div>

                            <div class="card-body">

                                <form class="was-validated">
                                  <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                    <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                                    <div class="invalid-feedback">Example invalid feedback text</div>
                                  </div>

                                  <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                    <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                                  </div>
                                  <div class="custom-control custom-radio mb-3">
                                    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                    <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                                    <div class="invalid-feedback">More example invalid feedback text</div>
                                  </div>

                                  <div class="form-group">
                                    <select class="custom-select" required>
                                      <option value="">Open this select menu</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                                  </div>

                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                  </div>
                                </form>                                                                                               

                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">

                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Form Validation</h5>
                                <h6 class="card-subtitle">Basic form validation.</h6>
                            </div>

                            <div class="card-body">

                                <form class="xp-form-validate" action="#" method="post">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-username">Username <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter a username..">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Your valid email..">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-password">Password <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Choose a safe one..">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-suggestions">Suggestions <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="What would you like to see?"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-skill">Best Skill <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <select class="form-control" id="val-skill" name="val-skill">
                                                <option value="">Please select</option>
                                                <option value="html">HTML</option>
                                                <option value="css">CSS</option>
                                                <option value="javascript">JavaScript</option>
                                                <option value="angular">Angular</option>
                                                <option value="angular">React</option>
                                                <option value="vuejs">Vue.js</option>
                                                <option value="ruby">Ruby</option>
                                                <option value="php">PHP</option>
                                                <option value="asp">ASP.NET</option>
                                                <option value="python">Python</option>
                                                <option value="mysql">MySQL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-currency">Currency <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-currency" name="val-currency" placeholder="$21.60">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-website">Website <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-website" name="val-website" placeholder="http://example.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-phoneus">Phone (US) <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="212-999-0000">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-digits">Digits <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-digits" name="val-digits" placeholder="5">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-number">Number <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-number" name="val-number" placeholder="5.0">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-range">Range [1, 5] <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-range" name="val-range" placeholder="4">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"><a data-toggle="modal" data-target="#modal-terms" href="#">Terms &amp; Conditions</a> <span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1">
                                                <span class="css-control-indicator"></span> I agree to the terms & conditions of Neon
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"></label>
                                        <div class="col-lg-8">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>

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

    <!-- Parsley JS -->
    <script src="assets/plugins/validatejs/validate.min.js"></script>

    <!-- Validate JS -->
    <script src="assets/js/init/validate-init.js"></script>
    <script src="assets/js/init/form-validation-init.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- End JS -->

</body>
</html>