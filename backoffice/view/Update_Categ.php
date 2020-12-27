<?php
	include "../controller/CategorieC.php";
	include_once '../model/Categorie.php';

	$categorieC = new CategorieC();
	$error = "";
	
	if (
		isset($_POST["nom"]) && 
        isset($_POST["date_creation"]) && 
        isset($_POST["description"])
        
	){
		if (
            !empty($_POST["nom"]) && 
            !empty($_POST["date_creation"]) && 
            !empty($_POST["description"])
        ) {
            $categorie = new Categorie(
                $_POST['nom'],
                $_POST['date_creation'],
                $_POST['description']
			);
			
            $categorieC->modifierCategorie($categorie, $_GET['id_categorie_planning']);
         //   header('refresh:5;url=show_categorie.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Categorie</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="gp copie.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id_categorie_planning'])){
				$categorie = $categorieC->recupererCategorie($_GET['id_categorie_planning']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='4' colspan='1'>
						<h4>Categorie<h4>
					</td>
                    <td>
                        <label for="id_categorie_planning">Id categorie planning:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id_categorie_planning" id="id_categorie_planning"  value = "<?php echo $categorie['id_categorie_planning']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="nom">Categorie:
						</label>
					</td>
					<td>
						<input type="text" name="nom" id="nom" maxlength="20" value = "<?php echo $categorie['nom']; ?>">
					</td>
				</tr>
        
                
                <tr>
                    <td>
                        <label for="date_creation">Date_Creation:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date_creation" id="date_creation"  value = "<?php echo $categorie['date_creation']; ?>">
                    </td>
                </tr>
                <tr>
                   
                    <td>
                        <label for="description">Description:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="description" id="description" value = "<?php echo $categorie['description']; ?>">
                    </td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                        <input type="button" onclick="document.getElementById('id_categorie_planning').style.display='block'" value="Modifier" name="Submit" class="btn btn-primary"> 

                        
<input type="hidden" value=<?PHP echo $categorie['id_categorie_planning']; ?> name="id_categorie_planning">
<div id="id_categorie_planning" class="modal">
  <span onclick="document.getElementById('id_categorie_planning').style.display='none'" class="close" title="Close Modal"><div class="close-btn">Close <i class="fa fa-close"></i></div></span>
  <form class="modal-content" method="POST" action="gcp copie.php">
    <div class="container ">

      <h1>You just updated  informations</h1>
      
      <div class="clearfix ">
        <input type="submit" onclick="document.getElementById('id_categorie_planning').style.display='none'" class="btn-primary" value="Okay">
      </div>

    </div>
  </form>
</div>

<script>
var modal = document.getElementById('id');

window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}
</script>


</div>
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>