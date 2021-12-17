<!DOCTYPE html>
<html lang="en">

@include('backend.head')

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
                                <a href="{{ url('/') }}/neon/html/horizontal/index.html" class="xp-small-logo">
                                    <img src="{{ url('/') }}/neon/html/horizontal/assets/images/logo.png" class="img-fluid" alt="logo"></a>
                                <a href="{{ url('/') }}/neon/html/horizontal/index.html" class="xp-main-logo" style="color: #d9ed92">
                                    <img src="{{ url('/') }}/neon/html/horizontal/assets/images/inventory.png" height="25px" alt="logo"> &nbsp; Yoga Inventori</a>
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
                                            <a href="{{ url('/') }}/neon/html/horizontal/#" class="text-white" data-toggle="modal" data-target="#xpSearchModal"><i class="icon-magnifier"></i></a>
                                        </di>
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
                @include('backend.sidebar')
                <!-- End XP Menubar -->

            </div>
            <!-- End XP Headerbar -->

            <!-- Start XP Breadcrumbbar -->
            <div class="xp-breadcrumbbar">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <h4 class="xp-page-title">{{ @$titlePage }}</h4>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="xp-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/neon/html/horizontal/index.html"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/') }}/neon/html/horizontal/#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ @$titlePage }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @yield('breadcrumbbar')
            <!-- End XP Breadcrumbbar -->

            <!-- Start XP Contentbar -->
            <div class="xp-contentbar" style="padding-top: 30px;">
                <!-- Write page content code here -->
                @yield('content')
            </div>
            <!-- End XP Contentbar -->

            <!-- Start XP Footerbar -->
            <div class="xp-footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2021 Wie.Artha | CV Singaraja Software Solution - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End XP Footerbar -->

        </div>
        <!-- End XP Rightbar -->

    </div>
    <!-- End XP Container -->

    @include('backend.foot')

</body>
</html>
