<?PHP
	include 'PlanningC.php';
	//SURFSET FITNESS
//Monday
	$planningC=new PlanningC();
	$listePlansSURF=$planningC->afficherPlanningsSURFM();

//wednesday
	$planningCSURFW=new PlanningC();
	$listePlansSURFW=$planningCSURFW->afficherPlanningsSURFW();
//friday 
$planningCSURFFR=new PlanningC();
	$listePlansSURFFR=$planningCSURFFR->afficherPlanningsSURFFR();
//Friday19
	$planningCSURFFR19=new PlanningC();
	$listePlansSURFFR19=$planningCSURFFR19->afficherPlanningsSURFFR19();
	//Sunday
	$planningCSURFSUN=new PlanningC();
	$listePlansSURFSUN=$planningCSURFSUN->afficherPlanningsSURFSUN();
//Sunday 14h
    $planningCSURFSUN14=new PlanningC();
	$listePlansSURFSUN14=$planningCSURFSUN14->afficherPlanningsSURFSUN14();

	//AERIAL YOGA
//Monday
$planningC=new PlanningC();
$listePlansYOGA=$planningC->afficherPlanningsYOGAM();

//wednesday
$planningCYOGAW=new PlanningC();
$listePlansYOGAW=$planningCYOGAW->afficherPlanningsYOGAW();
//Thursday
$planningCYOGATH=new PlanningC();
$listePlansYOGATH=$planningCYOGATH->afficherPlanningsYOGATH();
//Thursday 16h
$planningCYOGATH16=new PlanningC();
$listePlansYOGATH16=$planningCYOGATH16->afficherPlanningsYOGATH16();
//Friday
$planningCYOGAFR=new PlanningC();
$listePlansYOGAFR=$planningCYOGAFR->afficherPlanningsYOGAFR();
//Sunday
$planningCYOGASUN=new PlanningC();
$listePlansYOGASUN=$planningCYOGASUN->afficherPlanningsYOGASUN();

	//Batchata
//Monday
$planningCBAT=new PlanningC();
$listePlansBAT=$planningCBAT->afficherPlanningsBATM();
//monday 16h
$planningCBAT16=new PlanningC();
$listePlansBAT16=$planningCBAT->afficherPlanningsBATM16();
//monday 19h
$planningCBAT19=new PlanningC();
$listePlansBAT19=$planningCBAT19->afficherPlanningsBATM19();
//wednesday 14h
$planningCBATW=new PlanningC();
$listePlansBATW=$planningCBATW->afficherPlanningsBATW();
//wednesday 16h
$planningCBATW16=new PlanningC();
$listePlansBATW16=$planningCBATW16->afficherPlanningsBATW16();
//wednesday 19h
$planningCBATW19=new PlanningC();
$listePlansBATW19=$planningCBATW16->afficherPlanningsBATW19();
//thursday
$planningCBATTH=new PlanningC();
$listePlansBATTH=$planningCBATTH->afficherPlanningsBATTH();

     //Aqua Bike
//thursday
$planningCAQUATH=new PlanningC();
$listePlansAQUATH=$planningCAQUATH->afficherPlanningsAQUATH();
//thursday 10h
  $planningCAQUATH10=new PlanningC();
  $listePlansAQUATH10=$planningCAQUATH10->afficherPlanningsAQUATH10();
//friday 
$planningCAQUAFR=new PlanningC();
	$listePlansAQUAFR=$planningCAQUAFR->afficherPlanningsAQUAFR();
//friday10h
$planningCAQUAFR10=new PlanningC();
	$listePlansAQUAFR10=$planningCAQUAFR10->afficherPlanningsAQUAFR10();
//sunday
$planningCAQUASUN=new PlanningC();
$listePlansAQUASUN=$planningCAQUASUN->afficherPlanningsAQUASUN();
//sunday 10h
$planningCAQUASUN10=new PlanningC();
$listePlansAQUASUN10=$planningCAQUASUN10->afficherPlanningsAQUASUN10();
 
?>

    
  
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
 	
 	
	

	
	<!-- TimeTable Section -->
	<section class="timetable-section timetable-page">
		<div class="side-text">Trainer</div>
		<div class="auto-container">
			<!-- Sec Title -->
	<!--------------------------------------------------------->
    <div class="inner-container">
				<div class="table-outer">
					<div class="table-inner">
						<!-- Table Title Box -->
						<div class="table-title-box clearfix">
							<div class="title">ALL EVENTS</div>
							<div class="day">MONDAY</div>
							<div class="day">TUESDAY</div>
							<div class="day">WEDNESDAY</div>
							<div class="day">THURSDAY</div>
							<div class="day">FRIDAY</div>
							<div class="day">SATURDAY</div>
							<div class="day">SUNDAY</div>
						</div>
						<!-- Timetable Tabs-->
						<div class="timetable-tabs tabs-box">
							
							<!--Tab Btns-->
							<ul class="tab-btns tab-buttons clearfix">
								<li data-tab="#prod-cardio" class="tab-btn active-btn">SurfSet Fitness</li>
								<li data-tab="#prod-crossfit" class="tab-btn">Aerial Yoga</li>
								<li data-tab="#prod-gym" class="tab-btn">Batchata</li>
								<li data-tab="#prod-powerlifting" class="tab-btn">Aqua Bike</li>
								
							</ul>
							<!--<form action="" method="POST">-->
							<!--Tabs Container-->
							<div class="tabs-content">
							
								<!--Tab / Active Tab-->
								<div class="tab active-tab" id="prod-cardio">
									<div class="content">
										<div class="clearfix">
									<!--Monday-->	
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
                                                  
																	
												<?PHP
				                                foreach($listePlansSURF as $plan){
			                                    ?>
                                                    <?PHP echo $plan['categorie']; ?>
                                                    <br>
													<?PHP echo $plan['coach']; ?>
													<br>
                                                    <?PHP echo $plan['heure']; ?>	
												
			 									<?PHP
												}
												?>
		                                        	
												</div>
											</div>
							
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
                                               
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
                                                <div class="time">Lunch Time <span>12:00  -  14:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
										<!--Wednesday-->	
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
											
												<?PHP
				                                foreach($listePlansSURFW as $planW){
			                                    ?>
                                                    <?PHP echo $planW['categorie']; ?>
                                                    <br>
													<?PHP echo $planW['coach']; ?>
													<br>
                                                    <?PHP echo $planW['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
							
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
										<!--6-->	
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>	
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
									<!-- Thursday-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
										<!--6-->	
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
									<!--Friday-->		
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansSURFFR as $planSURFFR){
			                                    ?>
                                                    <?PHP echo $planSURFFR['categorie']; ?>
                                                    <br>
													<?PHP echo $planSURFFR['coach']; ?>
													<br>
                                                    <?PHP echo $planSURFFR['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansSURFFR19 as $planSURFFR19){
			                                    ?>
                                                    <?PHP echo $planSURFFR19['categorie']; ?>
                                                    <br>
													<?PHP echo $planSURFFR19['coach']; ?>
													<br>
                                                    <?PHP echo $planSURFFR19['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
									<!-- Saturday-->		
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansSURFSUN14 as $planSUN14){
			                                    ?>
                                                    <?PHP echo $planSUN14['categorie']; ?>
                                                    <br>
													<?PHP echo $planSUN14['coach']; ?>
													<br>
                                                    <?PHP echo $planSUN14['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansSURFSUN as $planSUN){
			                                    ?>
                                                    <?PHP echo $planSUN['categorie']; ?>
                                                    <br>
													<?PHP echo $planSUN['coach']; ?>
													<br>
                                                    <?PHP echo $planSUN['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
										<!--6-->	
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
										</div>
									</div>
								</div>
					<!-- Aerial yoga-->			
								<!--Tab-->
								<div class="tab" id="prod-crossfit">
									<div class="content">
										<div class="clearfix">
											<!--Monday AY-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											<!--2-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansYOGA as $plan){
			                                    ?>
                                                    <?PHP echo $plan['categorie']; ?>
                                                    <br>
													<?PHP echo $plan['coach']; ?>
													<br>
                                                    <?PHP echo $plan['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>	
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
									<!--Wednesday AY-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
												foreach($listePlansYOGAW as $planYOGAW){
			                                    ?>
                                                    <?PHP echo $planYOGAW['categorie']; ?>
                                                    <br>
													<?PHP echo $planYOGAW['coach']; ?>
													<br>
                                                    <?PHP echo $planYOGAW['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>

												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
											
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
								<!--Thursday AY-->	
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
												foreach($listePlansYOGATH as $planYOGATHU){
			                                    ?>
                                                    <?PHP echo $planYOGATHU['categorie']; ?>
                                                    <br>
													<?PHP echo $planYOGATHU['coach']; ?>
													<br>
                                                    <?PHP echo $planYOGATHU['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
												foreach($listePlansYOGATH16 as $planYOGATHU16){
			                                    ?>
                                                    <?PHP echo $planYOGATHU16['categorie']; ?>
                                                    <br>
													<?PHP echo $planYOGATHU16['coach']; ?>
													<br>
                                                    <?PHP echo $planYOGATHU16['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>	
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
										<!--friday AY-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>

												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansYOGAFR as $planYOGAFR){
			                                    ?>
                                                    <?PHP echo $planYOGAFR['categorie']; ?>
                                                    <br>
													<?PHP echo $planYOGAFR['coach']; ?>
													<br>
                                                    <?PHP echo $planYOGAFR['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>	
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
									<!--sunday AY-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
											
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
												foreach($listePlansYOGASUN as $planYOGASUN){
			                                    ?>
                                                    <?PHP echo $planYOGASUN['categorie']; ?>
                                                    <br>
													<?PHP echo $planYOGASUN['coach']; ?>
													<br>
                                                    <?PHP echo $planYOGASUN['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											
										</div>
									</div>
								</div>
						<!--Batchata-->
								<!--Tab-->
								<div class="tab" id="prod-gym">
									<div class="content">
										<div class="clearfix">
										<!--Monday BATCHATA-->
												<!-- Time Box -->
												<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>

												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansBAT as $planBAT){
			                                    ?>
                                                    <?PHP echo $planBAT['categorie']; ?>
                                                    <br>
													<?PHP echo $planBAT['coach']; ?>
													<br>
                                                    <?PHP echo $planBAT['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansBAT16 as $planBAT16){
			                                    ?>
                                                    <?PHP echo $planBAT16['categorie']; ?>
                                                    <br>
													<?PHP echo $planBAT16['coach']; ?>
													<br>
                                                    <?PHP echo $planBAT16['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>	
												</div>
											</div>
										
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansBAT19 as $planBAT19){
			                                    ?>
                                                    <?PHP echo $planBAT19['categorie']; ?>
                                                    <br>
													<?PHP echo $planBAT19['coach']; ?>
													<br>
                                                    <?PHP echo $planBAT19['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
										<!--wednesday batchata-->	
												<!-- Time Box -->
												<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>

												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansBATW as $planBATW){
			                                    ?>
                                                    <?PHP echo $planBATW['categorie']; ?>
                                                    <br>
													<?PHP echo $planBATW['coach']; ?>
													<br>
                                                    <?PHP echo $planBATW['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansBATW16 as $planBATW16){
			                                    ?>
                                                    <?PHP echo $planBATW16['categorie']; ?>
                                                    <br>
													<?PHP echo $planBATW16['coach']; ?>
													<br>
                                                    <?PHP echo $planBATW16['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>	
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansBATW19 as $planBATW19){
			                                    ?>
                                                    <?PHP echo $planBATW19['categorie']; ?>
                                                    <br>
													<?PHP echo $planBATW19['coach']; ?>
													<br>
                                                    <?PHP echo $planBATW19['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
										<!--thursday batchata-->	
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>

												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>	
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansBATTH as $planBATTH){
			                                    ?>
                                                    <?PHP echo $planBATTH['categorie']; ?>
                                                    <br>
													<?PHP echo $planBATTH['coach']; ?>
													<br>
                                                    <?PHP echo $planBATTH['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
										<!--friday batchata-->	
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>

												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>	
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>

										<!--sunday batchata-->
												<!-- Time Box -->
												<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>

												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>	
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
										</div>
									</div>
								</div>
								<!--Aqua bike-->
								<!--Tab-->
								<div class="tab" id="prod-powerlifting">
									<div class="content">
										<div class="clearfix">
										<!--Monday Aqua bike-->	
												<!-- Time Box -->
												<div class="time-box">
												<div class="box-inner">
												
												
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>

												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>	
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
										<!--wednesday aqua -->
												<!-- Time Box -->
												<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>

												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>	
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
										<!--thursday aqua bike-->
												<!-- Time Box -->
												<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansAQUATH as $planAQUATH){
			                                    ?>
                                                    <?PHP echo $planAQUATH['categorie']; ?>
                                                    <br>
													<?PHP echo $planAQUATH['coach']; ?>
													<br>
                                                    <?PHP echo $planAQUATH['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansAQUATH10 as $planAQUATH10){
			                                    ?>
                                                    <?PHP echo $planAQUATH10['categorie']; ?>
                                                    <br>
													<?PHP echo $planAQUATH10['coach']; ?>
													<br>
                                                    <?PHP echo $planAQUATH10['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>

												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>	
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
										<!--friday aqua bike-->
												<!-- Time Box -->
												<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansAQUAFR as $planAQUAFR){
			                                    ?>
                                                    <?PHP echo $planAQUAFR['categorie']; ?>
                                                    <br>
													<?PHP echo $planAQUAFR['coach']; ?>
													<br>
                                                    <?PHP echo $planAQUAFR['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
				                                foreach($listePlansAQUAFR10 as $planAQUAFR10){
			                                    ?>
                                                    <?PHP echo $planAQUAFR10['categorie']; ?>
                                                    <br>
													<?PHP echo $planAQUAFR10['coach']; ?>
													<br>
                                                    <?PHP echo $planAQUAFR10['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>

												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>	
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
										<!--sunday aqua bike-->
												<!-- Time Box -->
												<div class="time-box">
												<div class="box-inner">
												<?PHP
												foreach($listePlansAQUASUN as $planAQUASUN){
			                                    ?>
                                                    <?PHP echo $planAQUASUN['categorie']; ?>
                                                    <br>
													<?PHP echo $planAQUASUN['coach']; ?>
													<br>
                                                    <?PHP echo $planAQUASUN['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<?PHP
												foreach($listePlansAQUASUN10 as $planAQUASUN10){
			                                    ?>
                                                    <?PHP echo $planAQUASUN10['categorie']; ?>
                                                    <br>
													<?PHP echo $planAQUASUN10['coach']; ?>
													<br>
                                                    <?PHP echo $planAQUASUN10['heure']; ?>	
												
			 									<?PHP
												}
												?>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Lunch Time <span>12:00  -  14:00</span></div>

												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											<!--6-->
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												<div class="time">Water and Snacking <span>  18:00  -  18:30</span></div>	
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
												
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
    </section>
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



</body>

	
</html>

