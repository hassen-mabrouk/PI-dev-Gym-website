<?php

require '../../controller/testing.php';
require '../../model/userlogin.php';


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Gym </title>
    <!-- Stylesheets -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="../css/color-switcher-design.css" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="../css/color-themes/default-theme.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<!--Register Section-->
<?php include('../includes/Header.php'); ?>
    <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix justify-content-center">

                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-12 col-sm-12">

                    <div class="sec-title">
                        <h4>MEMBER SIGN IN</h4>
                        <p style="padding-left: 330px">Not a member?
                            <a href="register.php">Get Started</a></p>
                    </div>

                    <!--Login Form-->
                    <div class="styled-form login-form">
                        <form method="post" action="#">
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="email" value="" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="userpassword" value="" placeholder="Enter Password">
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                    <button type="button" class="theme-btn btn-style-three"><span class="txt">Login Now</span></button>
                                </div>
                                <div class="form-group social-links-two pull-right">
                                    Or login with <a href="#" class="img-circle facebook"><span class="fa fa-facebook-f"></span></a> <a href="#" class="img-circle twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="img-circle google-plus"><span class="fa fa-google-plus"></span></a>
                                </div>
                            </div>

                            <div class="clearfix">
                                <div class="pull-left">
                                    <input type="checkbox" id="remember-me"><label class="remember-me" for="remember-me">&nbsp; Remember Me</label>
                                </div>
                            </div>

                        </form>
                    </div>

               </div>

        </div>
    </section>
<?php include('../includes/Footer.php') ?>


</body>
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
<script src="../js/color-settings.js"></script>:

</html>