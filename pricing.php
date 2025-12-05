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

    <script src="/_static/lib/skel.min.js"></script>
    <script src="/_static/lib/skel-panels.min.js"></script>

    <link rel="stylesheet" href="/_static/lib/skel-noscript.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/navigation.min.css" />
    <link rel="stylesheet" href="css/general-styles.min.css" />
    
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themes/default/default.css" />
    <link rel="stylesheet" href="/_static/css/bootstrap-modal.css?v=20210108">
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
        <div class="green-twig solutions-twig pricing-twig">
            <div class="column-left">
                <h1>One Plan - Priced For Public Budgets</h1>
                <p>
                    SafetyDrone was developed with the idea that 1st Responders, Emergency Services and EMS Management Professionals should
                    be able to access all available features for one price. We understand that these are public budgets
                    that need to be justified. As such we have priced our platform to allow for access to all interested
                    users. At $100 per operator per year it is 70% less than our commercial plans. All we ask is you use your
                    government or organisation email when registering. It's that simple. There is a free plan for those who wish to see how
                    the basic site works prior to purchasing.
                </p>
            </div>
        </div>
    </section>

    <?php include_once("../../payment/subscriptions.php"); ?>

    <section class="appstore">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <p class="appstore__desc">The SafetyDrone solution is based on a cloud infrastructure with secure
                            data storage, online web application accompanied by our mobile application for offline access
                            and easy synchronisation with your cloud based account. In addition, the mobile app provides
                            you with access to the latest airspace status updates, local weather and solar index reading
                            that might affect your operations. Finally, you can create custom reports tracking flights,
                            drones, pilots and more.</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 appstore--center">
                        <a href="https://itunes.apple.com/fr/app/dronelogbook-companion/id1439490937?l=en&amp;mt=8" target="_blank" class="appstore__link-item appstore__link-item--itunes-lg">
                            <img src="img-min/mobileApp3.png" alt="Download on the App Store" class="appstore__img img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 appstore--alignment">
                        <a href="https://itunes.apple.com/fr/app/dronelogbook-companion/id1439490937?l=en&amp;mt=8" target="_blank" class="appstore__link-item appstore__link-item--top">
                            <img src="img-min/download-app-apple.svg" alt="Download on the App Store" class="appstore__img img-responsive">
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.droneanalytics.dlbmobile" target="_blank" class="appstore__link-item">
                            <img src="img-min/download-app-android.svg" alt="Get It On Google Play" class="appstore__img img-responsive">
                        </a>
                    </div>
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

    <?php include_once("../../payment/subscriptionsPopup.php"); ?>

</body>

</html>