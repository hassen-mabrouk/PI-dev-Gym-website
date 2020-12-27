<!DOCTYPE html>
<html>

<!-- Mirrored from View/html/gym/time-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:53:02 GMT -->
<head>
<meta charset="utf-8">
<title>Gym HTML-5 Template | Time Table</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">



<!-- Color Themes -->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/11.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<h2>Our TimeTable</h2>
					<div class="text">Fitness is not a destination it is a way of life.</div>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="index.html">home</a></li>
						<li>Working Hours</li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- TimeTable Section -->
	<section class="timetable-section timetable-page">
		<div class="side-text">Trainer</div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Time Table</div>
				<h2>Working housr <br> & Classes</h2>
			</div>
            
            <?PHP
			   include 'show_planning.php';
			  // include 'show'
            ?>
			
	<!-- End TimeTable Section -->
	
	<!-- Clients Section -->
    <section class="clients-section style-two">
        <div class="auto-container">
            
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                </ul>
            </div>
            
        </div>
    </section>
    <!-- End Clients Section -->
	

	
	

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>

<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIJ_QKHN-bi6_1C9f5eYE3pZs1zhQIo5o"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>

<!-- Mirrored from View/html/gym/time-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:53:02 GMT -->
</html>