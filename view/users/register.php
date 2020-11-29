<?php
require './../../controller/testing.php';
require_once './../../model/user.php';

$user = new userC() ;
$error = "";

if (!empty($_POST["firstName"]) && !empty($_POST["lastName"]) && !empty($_POST["email"]) && !empty($_POST["age"]) && !empty($_POST["password"])) {
    $userC = new user (
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['age'],
        $_POST['password']
    );

    $user->adduser($userC);
} else
    $error = "Missing information";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <!-- Stylesheets -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="../css/color-switcher-design.css" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="../css/color-themes/default-theme.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap"
          rel="stylesheet">

    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="../js/respond.js"></script><![endif]-->
</head>
<body>

<?php include('../includes/Header.php'); ?>
<!-- Sidebar Cart Item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    X
                </a>
            </div>
            <div class="sidebar-textwidget">

                <!-- Sidebar Info Content -->
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo">
                            <a href="index.html"><img src="../images/logo.png" alt=""/></a>
                        </div>
                        <div class="content-box">
                            <h2>About Us</h2>
                            <p class="text">The argument in favor of using filler text goes something like this: If
                                you use real content in the Consulting Process, anytime you reach a review point
                                you’ll end up reviewing and negotiating the content itself and not the design.</p>
                            <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                        </div>
                        <div class="contact-info">
                            <h2>Contact Info</h2>
                            <ul class="list-style-one">
                                <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA
                                </li>
                                <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                <li><span class="icon fa fa-envelope"></span>Gym@gmail.com</li>
                                <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed
                                </li>
                            </ul>
                        </div>
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                            <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                            <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                            <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                            <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- END sidebar widget item -->


<!--Register Section-->
<section class="register-section">
    <div class="auto-container">
        <div class="row clearfix justify-content-center">
            <!--Form Column-->
            <div class="form-column column col-lg-6 col-md-12 col-sm-12">

                <div class="sec-title">
                    <h2>Register Here</h2>
                    <div class="separate"></div>
                </div>

                <!--Login Form-->
                <div class="styled-form register-form">

                    <form method="POST" action="register.php">
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-user"></span></span>
                            <input type="text" name="firstName" value="" placeholder="Your FirstName *">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-user"></span></span>
                            <input type="text" name="lastName" value="" placeholder="Your LastName *">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-user"></span></span>
                            <input type="text" name="age" value="" placeholder="Age *">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                            <input type="email" name="email" value="" placeholder="Email Address*">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                            <input type="password" name="password" value="" placeholder="Enter Password">
                        </div>
                        <div class="clearfix">
                            <div class="form-group pull-left">
                                <button type="submit" name="create" class="theme-btn btn-style-three"><span
                                        class="txt">Register here</span></button>
                            </div>
                            <div class="form-group submit-text pull-right">
                                * You must be a free registered to submit content.
                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</section>
<?php include('../includes/Footer.php') ?>

<!--End Register Section-->
<!-- End Header Search -->

<!--Scroll to top-->

<!--<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>-->

<script src="../js/jquery.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../js/jquery.fancybox.js"></script>
<script src="../js/appear.js"></script>
<script src="../js/parallax.min.js"></script>
<script src="../js/tilt.jquery.min.js"></script>
<script src="../js/jquery.paroller.min.js"></script>
<script src="../js/owl.js"></script>
<script src="../js/mixitup.js"></script>
<script src="../js/wow.js"></script>
<script src="../js/nav-tool.js"></script>
<script src="../js/jquery-ui.js"></script>
<script src="../js/script.js"></script>
<script src="../js/color-settings.js"></script>

</body>


</html>