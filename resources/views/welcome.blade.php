<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./img/apple-icon.png">
    <link rel="icon" type="image/png" href="./img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Sene Codification</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="./css2/bootstrap.min.css" rel="stylesheet" />
    <link href="./css2/material-kit.css" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./css2/demo.css" rel="stylesheet" />
    <style>
        .my-modal-style {
            background-color: rgba(255, 255, 0, 0);
            box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0), 0 40px 77px 0 rgba(0, 0, 0, 0);
        }
    </style>

</head>

<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="http://www.creative-tim.com">
                <div class="logo-container">
                    <div class="logo">
                        <img src="./img/logo.png" alt="" rel="tooltip" title="" data-placement="bottom" data-html="true">
                    </div>
                    <div class="brand">
                        <b>Sen Codification</b>
                    </div>


                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-index">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#services">
                        <i class="material-icons">dashboard</i> SERVICES
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="material-icons">add</i> A PROPOS
                    </a>
                </li>
                <li>
                    <a href="{{ route('login') }}">
                        <i class="material-icons">fingerprint</i> SE CONNECTER
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}">
                        <i class="fa fa-sign-in"></i> S'ENREGISTRER
                    </a>
                </li>


            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
    <div class="header header-filter" style="background-image: url('./img3/ucad.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="brand">
                        <h1>Gestion des Codifications</h1>
                        <h3>Une plateforme qui vous permet de gérer d'une maniére efficace vos codifications.</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="main main-raised">
        <div class="section section-basic">
            <div class="container">
                <div class="title">
                    <h2>Services</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="space-70"></div>
            </div>
        </div>

        <div class="apropos section-basic">
            <div class="container">
                <div class="title">
                    <h2>A propos</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="space-70"></div>
            </div>
        </div>

    </div>
    <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="http://www.esp.sn/">
                            ESP / UCAD
                        </a>
                    </li>
                    <li>
                        <a href="#">
                          A propos de nous !
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <a href="#">MADE TEAM</a>, Done before started
            </div>
        </div>
    </footer>
</div>
</body>
    <!--   Core JS Files   -->
    <script src="./js3/jquery.min.js" type="text/javascript"></script>
    <script src="./js3/bootstrap.min.js" type="text/javascript"></script>
    <script src="./js3/material.min.js"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./js3/nouislider.min.js" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="./js3/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="./js3/material-kit.js" type="text/javascript"></script>

</html>

