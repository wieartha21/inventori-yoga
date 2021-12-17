<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Neon is a bootstrap, laravel & php admin dashboard template">
    <meta name="keywords" content="admin, admin dashboard, admin panel, admin template, admin theme, bootstrap 4, laravel, php, crm, analytics, responsive, sass support, ui kits, web app, clean design">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Invitation Validation Diskominfos Prov. Bali</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ url('/') }}/neon/html/horizontal/assets/images/logo.png">

    <!-- Start CSS -->
    <link href="{{ url('/') }}/neon/html/horizontal/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('/') }}/neon/html/horizontal/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{ url('/') }}/neon/html/horizontal/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- End CSS -->

</head>

<body class="xp-horizontal">

    <div class="xp-authenticate-bg"></div>
    <!-- Start XP Container -->
    <div id="xp-container" class="xp-container">

        <!-- Start Container -->
        <div class="container">

            <!-- Start XP Row -->
            <div class="row vh-100 align-items-center">
                <!-- Start XP Col -->
                <div class="col-lg-12 ">

                    <!-- Start XP Auth Box -->
                    <div class="xp-auth-box">

                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center mt-0 m-b-15">
                                    <a href="{{ url('/') }}" class="xp-web-logo">
                                        <img src="{{ url('/') }}/neon/html/horizontal/assets/images/logo.png" height="100" alt="logo"></a>
                                </h3>
                                <div class="p-3">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="text-center mb-0">
                                            <h4 class="text-black">Invitation Validation
                                                Sign In !</h4>
                                            <p class="text-muted"> <a href="#"> Pemerintah Provinsi Bali </p>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" name="email" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                        </div>

                                      <button type="submit" class="btn btn-primary btn-rounded btn-lg btn-block">Sign In</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End XP Auth Box -->

                </div>
                <!-- End XP Col -->
            </div>
            <!-- End XP Row -->
        </div>
        <!-- End Container -->
    </div>
    <!-- End XP Container -->

    <!-- Start JS -->
    <script src="{{ url('/') }}/neon/html/horizontal/assets/js/jquery.min.js"></script>
    <script src="{{ url('/') }}/neon/html/horizontal/assets/js/popper.min.js"></script>
    <script src="{{ url('/') }}/neon/html/horizontal/assets/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/neon/html/horizontal/assets/js/modernizr.min.js"></script>
    <script src="{{ url('/') }}/neon/html/horizontal/assets/js/detect.js"></script>
    <script src="{{ url('/') }}/neon/html/horizontal/assets/js/jquery.slimscroll.js"></script>
    <script src="{{ url('/') }}/neon/html/horizontal/assets/js/horizontal-menu.js"></script>

    <!-- Main JS -->
    <script src="{{ url('/') }}/neon/html/horizontal/assets/js/main.js"></script>
    <!-- End JS -->

</body>
</html>
