<?PHP
	include "../controller/CategorieC.php";
    
    
      
    
    $categorieC=new CategorieC();
    if (isset($_GET['search'])) {
        $listeCategs= $categorieC->rechercheCateg($_GET['search']);
       
    } else {
       
	$listeCategs=$categorieC->afficherCategories();
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <title> Afficher Liste Categories </title>
		<!--<title> Afficher categories </title> -->
    </head>
    <body>
   
	<div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Categorie</h4>
                                            

                                            
                                          <form action="" method="POST">
                                               <table class="table">
                                                <thead>
                                                <tr>
                                                    
                                                    <th>Id categorie planning</th>
                                                    <th>Nom</th>
                                                    <th>Date de creation</th>
													<th>Description</th>
													<th>Action  <td><a type="submit"  class="btn btn-outline-success"href="add_categorie.php"><i class="fas fa-plus-circle"></i> </a></button></td></th>

                                                </tr>
                                                </thead>
                                                <tbody>
												
												<?PHP
				foreach($listeCategs as $categ){
			?>
                                                <tr>
                                                  <td ><?PHP echo $categ['id_categorie_planning']; ?></td>
                                                  <td ><?PHP echo $categ['nom']; ?>
                                                    </td>
                                                    <td ><?PHP echo $categ['date_creation']; ?></td>
                                                    <td ><?PHP echo $categ['description']; ?></td>
													<td>
                                                     <form method="POST" action="Delete_categorie.php">
                                                     <button   class="btn btn-outline-primary" type="submit"name="supprimer" value="supprimer" ><i class="fas fa-trash"></i></button>
                                                    <input type="hidden" value=<?PHP echo $categ['id_categorie_planning']; ?> name="id_categorie_planning"> <!--supp l'utilisateur par soon id sans montrer la valeur de l'id-->
						                      </form>
						                               
				                               	</td>
                                                  <td>
                                                  <a  type="button" class="btn btn-outline-primary" href="Update_Categorie.php?id_categorie_planning=<?PHP echo $categ['id_categorie_planning']; ?>"> <i class="fas fa-pen-square"></i> </a>
                                            
                                                  
					</td> 
             
                                                   
												<!--  <td><button type="submit" class="btn btn-primary">Supprimer</button></td>-->
												   <!--<td><button type="submit" ><a href="add_categorie.php">Ajouter </a></button></td>-->
                          
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