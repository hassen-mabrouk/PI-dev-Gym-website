<?PHP
	include '../controller/PlanningC.php';

	$planningC=new PlanningC();
	$listePlans=$planningC->afficherPlannings();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <title> Afficher Liste Plannings </title>
  
        
    </head>
    <body>
		
	<div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">planning</h4>
                                            

                                            
                                          <form action="" method="POST">
                                               <table class="table">
                                                <thead>
                                                <tr>
                                                    
                                                    <th>Id Planning</th>
                                                    <th>Catergorie</th>
                                                    <th>Date de planning</th>
                                                    <th>Coach</th>
													<th>Heure</th>
													<th>Action<td><a   type="button" class="btn btn-outline-success"  href="add_planning copie.php" role="button"><i class="fas fa-plus-circle"></i> </a></th>

                                                </tr>
                                                </thead>
                                                <tbody>
												
												<?PHP
				foreach($listePlans as $plan){
			?>
                                                <tr>
                                                    <td><?PHP echo $plan['id_planning']; ?></td>
                                                    <td><?PHP echo $plan['categorie']; ?>
                                                    </td>
													<td><?PHP echo $plan['date_planning']; ?></td>
                                                    <td><?PHP echo $plan['coach']; ?></td>
                                                    <td><?PHP echo $plan['heure']; ?></td>
													<td>
                                                     <form method="POST" action="Delete_planning.php">
                                                     <button  class="btn btn-outline-primary" type="submit" name="supprimer" value="supprimer"><i class="fas fa-trash"></i></button>
                                                    <input type="hidden" value=<?PHP echo $plan['id_planning']; ?> name="id_planning"> <!--supp l'utilisateur par soon id sans montrer la valeur de l'id-->
						                      </form>
						                               
				                               	</td>
                                                  <td>
                                                  <a  type="button" class="btn btn-outline-primary"  href="Update_Planning.php?id_planning=<?PHP echo $plan['id_planning']; ?>" role="button"><i class="fas fa-pen-square"></i> </a>
					</td> 
             
                                                   
												
                          
				</tr> 

			<?PHP
				}
			?>
                                                </tbody>
                                            </table>
                                            <form class="form-inline" method="post" action="generate_pdf.php">
						<button type="submit"  id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
							Generate PDF</button>
						</form>
                                        </form>
                                        </div>
                                    </div>
                                </div>  <!--end col -->
                            </div>  <!-- end row --> 
			
		
	</body>
</html>

