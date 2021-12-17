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
                        <h4 class="xp-page-title">Grids</h4>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="xp-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">UI Kits</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Grids</li>
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
                                <h5 class="card-title text-black">Grid options</h5>
                                <h6 class="card-subtitle">While Bootstrap uses <code class="highlighter-rouge">em</code>s or <code class="highlighter-rouge">rem</code>s for defining most sizes, <code class="highlighter-rouge">px</code>s are used for grid breakpoints and container widths. This is because the viewport width is in pixels and does not change with the <a href="https://drafts.csswg.org/mediaqueries-3/#units">font size</a>. See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                      <thead>
                                        <tr>
                                          <th></th>
                                          <th class="text-center">
                                            Extra small<br>
                                            <small>&lt;576px</small>
                                          </th>
                                          <th class="text-center">
                                            Small<br>
                                            <small>≥576px</small>
                                          </th>
                                          <th class="text-center">
                                            Medium<br>
                                            <small>≥768px</small>
                                          </th>
                                          <th class="text-center">
                                            Large<br>
                                            <small>≥992px</small>
                                          </th>
                                          <th class="text-center">
                                            Extra large<br>
                                            <small>≥1200px</small>
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th class="text-nowrap" scope="row">Max container width</th>
                                          <td>None (auto)</td>
                                          <td>540px</td>
                                          <td>720px</td>
                                          <td>960px</td>
                                          <td>1140px</td>
                                        </tr>
                                        <tr>
                                          <th class="text-nowrap" scope="row">Class prefix</th>
                                          <td><code>.col-</code></td>
                                          <td><code>.col-sm-</code></td>
                                          <td><code>.col-md-</code></td>
                                          <td><code>.col-lg-</code></td>
                                          <td><code>.col-xl-</code></td>
                                        </tr>
                                        <tr>
                                          <th class="text-nowrap" scope="row"># of columns</th>
                                          <td colspan="5">12</td>
                                        </tr>
                                        <tr>
                                          <th class="text-nowrap" scope="row">Gutter width</th>
                                          <td colspan="5">30px (15px on each side of a column)</td>
                                        </tr>
                                        <tr>
                                          <th class="text-nowrap" scope="row">Nestable</th>
                                          <td colspan="5">Yes</td>
                                        </tr>
                                        <tr>
                                          <th class="text-nowrap" scope="row">Column ordering</th>
                                          <td colspan="5">Yes</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div>
                <!-- End XP Row -->

                <!-- Start XP Row -->
                <div class="row">

                    <!-- Start XP Col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Grid Example</h5>
                                <h6 class="card-subtitle">Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns within any <code>.row</code>.</h6>
                            </div>
                            <div class="card-body">                                
                                <div class="xp-example-row">
                                    <div class="xp-grid-example">
                                        <div class="row">
                                            <div class="col-sm-1">.col-sm-1</div>
                                            <div class="col-sm-1">.col-sm-1</div>
                                            <div class="col-sm-1">.col-sm-1</div>
                                            <div class="col-sm-1">.col-sm-1</div>
                                            <div class="col-sm-1">.col-sm-1</div>
                                            <div class="col-sm-1">.col-sm-1</div>
                                            <div class="col-sm-1">.col-sm-1</div>
                                            <div class="col-sm-1">.col-sm-1</div>
                                            <div class="col-sm-1">.col-sm-1</div>
                                            <div class="col-sm-1">.col-sm-1</div>
                                            <div class="col-sm-1">.col-sm-1</div>
                                            <div class="col-sm-1">.col-sm-1</div>                                    
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-2">.col-sm-2</div>
                                            <div class="col-sm-2">.col-sm-2</div>
                                            <div class="col-sm-2">.col-sm-2</div>
                                            <div class="col-sm-2">.col-sm-2</div>
                                            <div class="col-sm-2">.col-sm-2</div>
                                            <div class="col-sm-2">.col-sm-2</div>                                   
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3">.col-sm-3</div>
                                            <div class="col-sm-3">.col-sm-3</div>
                                            <div class="col-sm-3">.col-sm-3</div>
                                            <div class="col-sm-3">.col-sm-3</div>                                  
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">.col-sm-4</div>
                                            <div class="col-sm-4">.col-sm-4</div>
                                            <div class="col-sm-4">.col-sm-4</div>                                
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">.col-sm-6</div>
                                            <div class="col-sm-6">.col-sm-6</div>                              
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">.col-sm-12</div>                            
                                        </div>

                                    </div>
                                </div>        
                                
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div>
                <!-- End XP Row -->

                <!-- Start XP Row -->
                <div class="row">

                    <!-- Start XP Col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Variable width content</h5>
                                <h6 class="card-subtitle">Use <code class="highlighter-rouge">col-{breakpoint}-auto</code> classes to size columns based on the natural width of their content.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-example-row">
                                    <div class="xp-grid-example">
                                        <div class="row justify-content-md-center">
                                            <div class="col col-lg-2">
                                              1 of 3
                                            </div>
                                            <div class="col-md-auto">
                                              Variable width content
                                            </div>
                                            <div class="col col-lg-2">
                                              3 of 3
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col">
                                              1 of 3
                                            </div>
                                            <div class="col-md-auto">
                                              Variable width content
                                            </div>
                                            <div class="col col-lg-2">
                                              3 of 3
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->
                </div>
                <!-- End XP Row -->

                <!-- Start XP Row -->
                <div class="row">

                    <!-- Start XP Col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Reordering</h5>
                                <h6 class="card-subtitle">Use <code class="highlighter-rouge">.order-</code> classes for controlling the <strong>visual order</strong> of your content. These classes are responsive, so you can set the <code class="highlighter-rouge">order</code> by breakpoint (e.g., <code class="highlighter-rouge">.order-1.order-md-2</code>). Includes support for <code class="highlighter-rouge">1</code> through <code class="highlighter-rouge">12</code> across all five grid tiers.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-example-row m-b-30">
                                    <div class="xp-grid-example">
                                         <div class="row">
                                            <div class="col">
                                              First, but unordered
                                            </div>
                                            <div class="col order-12">
                                              Second, but last
                                            </div>
                                            <div class="col order-1">
                                              Third, but first
                                            </div>
                                          </div>                                                    
                                    </div>
                                </div>

                                <h6 class="card-subtitle">There are also responsive <code class="highlighter-rouge">.order-first</code> and <code class="highlighter-rouge">.order-last</code> classes that change the <code class="highlighter-rouge">order</code> of an element by applying <code class="highlighter-rouge">order: -1</code> and <code class="highlighter-rouge">order: 13</code> (<code class="highlighter-rouge">order: $columns + 1</code>), respectively. These classes can also be intermixed with the numbered <code class="highlighter-rouge">.order-*</code> classes as needed.</h6>

                                <div class="xp-example-row">
                                    <div class="xp-grid-example">
                                         <div class="row">
                                            <div class="col order-last">
                                              First, but last
                                            </div>
                                            <div class="col">
                                              Second, but unordered
                                            </div>
                                            <div class="col order-first">
                                              Third, but first
                                            </div>
                                          </div>                                                    
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->
                </div>
                <!-- End XP Row -->

                <!-- Start XP Row -->
                <div class="row">

                    <!-- Start XP Col -->    
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Offsetting columns</h5>
                                <h6 class="card-subtitle">Move columns to the right using <code class="highlighter-rouge">.offset-md-*</code> classes. These classes increase the left margin of a column by <code class="highlighter-rouge">*</code> columns. For example, <code class="highlighter-rouge">.offset-md-4</code> moves <code class="highlighter-rouge">.col-md-4</code> over four columns.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-example-row m-b-30">
                                    <div class="xp-grid-example">
                                        <div class="row">
                                          <div class="col-md-4">.col-md-4</div>
                                          <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                                          <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
                                        </div>                                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div>
                <!-- End XP Row -->

                <!-- Start XP Row -->
                <div class="row">

                    <!-- Start XP Col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Nesting</h5>
                                <h6 class="card-subtitle">To nest your content with the default grid, add a new <code class="highlighter-rouge">.row</code> and set of <code class="highlighter-rouge">.col-sm-*</code> columns within an existing <code class="highlighter-rouge">.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-example-row m-b-30">
                                    <div class="xp-grid-example">
                                        <div class="row">
                                          <div class="col-sm-9">
                                            Level 1: .col-sm-9
                                            <div class="row">
                                              <div class="col-8 col-sm-6">
                                                Level 2: .col-8 .col-sm-6
                                              </div>
                                              <div class="col-4 col-sm-6">
                                                Level 2: .col-4 .col-sm-6
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div>
                <!-- End XP Row -->

                <!-- Start XP Row -->
                <div class="row">

                    <!-- Start XP Col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Horizontal alignment</h5>
                                <h6 class="card-subtitle">Use flexbox alignment utilities to vertically and horizontally align columns.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-example-row">
                                    <div class="xp-grid-example">
                                        <div class="row justify-content-start">
                                            <div class="col-4">
                                              One of two columns
                                            </div>
                                            <div class="col-4">
                                              One of two columns
                                            </div>
                                          </div>
                                          <div class="row justify-content-center">
                                            <div class="col-4">
                                              One of two columns
                                            </div>
                                            <div class="col-4">
                                              One of two columns
                                            </div>
                                          </div>
                                          <div class="row justify-content-end">
                                            <div class="col-4">
                                              One of two columns
                                            </div>
                                            <div class="col-4">
                                              One of two columns
                                            </div>
                                          </div>
                                          <div class="row justify-content-around">
                                            <div class="col-4">
                                              One of two columns
                                            </div>
                                            <div class="col-4">
                                              One of two columns
                                            </div>
                                          </div>
                                          <div class="row justify-content-between">
                                            <div class="col-4">
                                              One of two columns
                                            </div>
                                            <div class="col-4">
                                              One of two columns
                                            </div>
                                          </div>                                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div>
                <!-- End XP Row -->

                <!-- Start XP Row -->
                <div class="row">

                    <!-- Start XP Col -->
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Vertical alignment</h5>
                                <h6 class="card-subtitle">Use flexbox alignment utilities to vertically and horizontally align columns.</h6>
                            </div>
                            <div class="card-body">
                                <div class="xp-example-row xp-example-row-flex-cols">
                                    <div class="xp-grid-example">
                                        <div class="row align-items-start">
                                            <div class="col">
                                              One of three columns
                                            </div>
                                            <div class="col">
                                              One of three columns
                                            </div>
                                            <div class="col">
                                              One of three columns
                                            </div>
                                          </div>
                                        <div class="row align-items-center">
                                            <div class="col">
                                              One of three columns
                                            </div>
                                            <div class="col">
                                              One of three columns
                                            </div>
                                            <div class="col">
                                              One of three columns
                                            </div>
                                        </div>
                                        <div class="row align-items-end">
                                            <div class="col">
                                              One of three columns
                                            </div>
                                            <div class="col">
                                              One of three columns
                                            </div>
                                            <div class="col">
                                              One of three columns
                                            </div>
                                        </div> 

                                        <div class="row">
                                            <div class="col align-self-start">
                                              One of three columns
                                            </div>
                                            <div class="col align-self-center">
                                              One of three columns
                                            </div>
                                            <div class="col align-self-end">
                                              One of three columns
                                            </div>
                                        </div>                                                      
                                    </div>
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
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- End JS -->

</body>
</html>