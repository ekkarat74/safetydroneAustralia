<?php
    include_once('../../php_header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SafetyDrone</title>
    <meta name="description" content="SAFETYDRONE IS THE ONE-STOP FLIGHT LOG AND MANAGEMENT SOLUTION FOR THE UAV/DRONE INDUSTRY">
    <meta name="author" content="SAFETYDRONE">
    <meta name="keywords" content="drones, UAV, UAS, sUAS, rules, RePl, ReOC, Fleet Management, CASA, Drone Analytics, DroneLogbook, Aviation, State Government, Australian, Airservices Australia, RPAS, compliance, logbook, flight, records, digital system of record, DJI, 3DR, Parrot, SenseFly, Trimble, Yuneec, multi-rotor, quadcopter, octocopter, hexacopter" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/navigation.min.css" />
    <link rel="stylesheet" href="css/general-styles.min.css" />

    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themes/default/default.css" />

    <style type="text/css">
        .terms h3 {
            font-size: 2.2rem;
            margin: 5% auto 3%;
        }

        .terms li {
            font-size: 1.6rem;
            color: #999;
            line-height: 1.5;
            font-weight: 200;
            text-align: justify;
            list-style: none;
        }

        .terms a {
            color: black;
            font-weight: bold;
        }

        .tos {
            font-size: 1.7rem;
        }
    </style>
</head>

<body>

    <header>
        <div class="container-fluid">
            <div class="row">
                <a href="index.html" class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <img class="logo" src="img-min/logo/logo-header.png" alt="SafetyDrone Logo">
                </a>
                <div class="navbar-header hidden-md hidden-lg pull-right">
                    <button type="button" class="modal_close" title="Close"><span class="modalspan"></span></button>
                    <button type="button" class="modal_open" title="Open">
                        <span class="modalopen"></span>
                        <span class="modalopen"></span>
                        <span class="modalopen"></span>
                    </button>
                </div>
                <nav id="nav">
                    <ul class="nav navbar-nav navbar-right" id="toggle">
                        <li class="dropdown">
                            <a href="features.html" class="dropdown-toggle">Features</a>
                        </li>
                        <li class="dropdown">
                            <a href="pricing.php" class="dropdown-toggle">Pricing</a>
                        </li>
                        <li class="dropdown">
                            <a href="partners.html" class="dropdown-toggle">Support</a>
                        </li>
                        <li class="dropdown">
                            <a href="contact.php" class="dropdown-toggle">Contact Us </a>
                        </li>
                        <li class="dropdown">
                            <a href="/profile/login.php" class="dropdown-toggle signIn">Sign In </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="laptop solutions-redesign">
        <div class="green-twig solutions-twig">
            <div class="column-left">
                <h1>Safetydrone Terms of Services</h1>
                <p>
                    Your privacy is important to us. Safetydrone's Terms of Services explains how we treat your personal data.
                    Please read the Terms of Services carefully for information relating to Safetydrone's collection, use, and disclosure of your personal information.
                </p>
            </div>
        </div>
    </section>

    <section class="terms">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                    <?php include_once("../../profile/terms-include-safetydrone-australia.php"); ?>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <ul class="footer-menu">
            <li class="footer-menu__item">SafetyDrone</li>
            <li class="footer-menu__item"><a href="terms.php" class="footer-menu__link">Terms of Service</a></li>
            <li class="footer-menu__item"><a class="footer-menu__link" href="contact.php">Contacts</a></li>
            <li class="footer-menu__item">
                <a href="http://www.twitter.com/SafetyDrone" target="_blank" class="icons__logo icons__logo--fa-twitter"></a>
            </li>
        </ul>
    </footer>

    <script type="text/javascript" src="/_static/lib/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>