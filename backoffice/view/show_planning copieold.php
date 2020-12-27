<?PHP
	include '../controller/PlanningC.php';

    $planningC=new PlanningC();
   if (isset($_GET['search'])) {
        $listePlans= $planningC->recherchePlan($_GET['search']);
    } else {
	$listePlans=$planningC->afficherPlannings();
    }
  
$listePlans= $planningC->triPlanning();
  

  /*  $query="SELECT * FROM Planning";
			$sortable=["id_planning","categorie","coach","date_planning","heure"];
			
			if (!empty($_GET['sort']) && in_array($_GET['sort'],$sortable)) {
				$direction=$_GET['dir'] ?? 'asc';
				if(!in_array($direction,['asc','desc'])) {
					$direction='asc';
				}
				$query .= " ORDER BY " . $_GET['sort'] . " $direction";
			}*/

?>
<!DOCTYPE html>
<html>
	<head>

    <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <link rel="stylesheet" href="./styles/style.scss">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Afficher Liste Plannings </title>
        <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
		<!--<title> Afficher Plannings </title> -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
    </head>
    <body>
    
	<div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">planning</h4>
                                            
                                            
                                            
                                          <form action="" method="POST">
                                          
                                               <table class="table table-bordred table-hover">
                                                <thead>
                                                
                                                <tr>
                                                    
                                                    <th>Id_planning</th>
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
                   /* $conn=new mysqli('localhost;dbname=projet', 'root', '','projet');
                    $sql=$conn->query('SELECT * FROM Planning  ');*/
                 /*   while($Plan =$listePlans->fetch_array()){
                        echo '<tr> 
                        <td>'.$plan['id_planning'].'</td>
                        <td>'.$plan['categorie'].'</td>
                        <td>'.$plan['date_planning'].'</td>
                        <td>'.$plan['coach'].'</td>
                        <td>'.$plan['heure'].'</td>
                        </tr>
                        ';}*/
			?>

                                                <tr>
                                                <td ><?PHP echo $plan['id_planning']; ?></td>
                                                <td ><?PHP echo $plan['categorie']; ?>
                                                    </td>
													<td ><?PHP echo $plan['date_planning']; ?></td>
                                                    <td ><?PHP echo $plan['coach']; ?></td>
                                                    <td ><?PHP echo $plan['heure']; ?></td>
                                                    <td>
                                                     <form method="POST" action="Delete_planning.php">
                                                     <button  class="btn btn-outline-primary" type="submit" name="supprimer" value="supprimer"><i class="fas fa-trash"></i></button>
                                                     <!--<button  type="button" class="btn btn-outline-primary" type="submit">supprimer</button> -->
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
                                        </form>
                                        <form class="form-inline" method="post" action="g_pdf.php">
						<button type="submit"  id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
							Generate PDF</button>
						</form>    


                                        </div>
                                    </div>
                                </div>  <!--end col -->
                            </div>  <!-- end row --> 
			
		
	</body>
</html>
<!--<script>
$(document).ready(function(){
    $('#mytable').DataTable();
}
</script>-->

