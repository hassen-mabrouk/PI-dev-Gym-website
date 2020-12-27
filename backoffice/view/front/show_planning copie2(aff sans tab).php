<?PHP
	include 'PlanningC.php';

	$planningC=new PlanningC();
	$listePlans=$planningC->afficherPlannings();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Afficher Liste Plannings </title>
		<!--<title> Afficher Plannings </title> -->
    </head>
    <body>

	
                                            

                                            
                                      
                                         
												
												<?PHP
				foreach($listePlans as $plan){
			?>
                                                
                                                   
                                                    <?PHP echo $plan['categorie']; ?>
                                                    <br>
												
                                                    <?PHP echo $plan['coach']; ?>
                                                    <?PHP echo $plan['heure']; ?>
											
             
                                       
                          
				
			<?PHP
				}
			?>
                                                
                                          
                                       
                                        
                                   
			
		
	</body>
</html>

