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
    <!-- Select2 CSS -->
    <link href="assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css">

    <!-- Tagsinput CSS -->
    <link href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css" rel="stylesheet" type="text/css">

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
                        <h4 class="xp-page-title">Form Selects</h4>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="xp-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Selects</li>
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

                    <!-- End XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Single Select</h5>
                                <h6 class="card-subtitle">Example of Select2</h6>
                            </div>
                            <div class="card-body">

                                <select class="xp-select2-single form-control" name="state">
                                  <option>Select</option>
                                  <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                  </optgroup>
                                  <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                  </optgroup>
                                  <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                  </optgroup>
                                  <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                  </optgroup>
                                  <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                  </optgroup>
                                </select>

                            </div>
                        </div>
                    </div>  
                    <!-- End XP Col -->

                    <!-- End XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Multiple Select</h5>
                                <h6 class="card-subtitle">Example of Select2</h6>
                            </div>
                            <div class="card-body">

                                <select class="xp-select2-multi-select form-control" name="states[]" multiple="multiple">
                                  <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                  </optgroup>
                                  <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                  </optgroup>
                                  <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                  </optgroup>
                                  <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                  </optgroup>
                                  <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                  </optgroup>
                                </select>

                            </div>
                        </div>
                    </div>  
                    <!-- End XP Col -->

                    <!-- End XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Default Tags</h5>
                                <h6 class="card-subtitle">Example of Tagsinput</h6>
                            </div>
                            <div class="card-body">

                                <input type="text" id="xp-tagsinput-default" class="form-control" value="Amsterdam,Washington,Sydney" data-role="tagsinput" />

                            </div>
                        </div>
                    </div>  
                    <!-- End XP Col -->

                    <!-- End XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Typeahead Tags</h5>
                                <h6 class="card-subtitle">Example of Tagsinput</h6>
                            </div>
                            <div class="card-body">

                                <input type="text" id="xp-tagsinput-typehead" class="form-control"  value="Amsterdam,Washington" data-role="tagsinput" />

                            </div>
                        </div>
                    </div>  
                    <!-- End XP Col -->

                    <!-- End XP Col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Categorizing tags Tags</h5>
                                <h6 class="card-subtitle">Example of Tagsinput</h6>
                            </div>
                            <div class="card-body">

                                <input type="text" id="xp-tagsinput-category" class="form-control"  value="Amsterdam,Washington" data-role="tagsinput" />

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
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/select2.min.js"></script>
    <script src="assets/js/init/form-select-init.js"></script>

    <!-- Tagsinput JS -->
    <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="assets/plugins/bootstrap-tagsinput/typeahead.bundle.js"></script>
    <script src="assets/js/init/form-select-init.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- End JS -->

</body>
</html>