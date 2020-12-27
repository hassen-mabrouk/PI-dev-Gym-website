<?PHP
	include "../controller/CategorieC.php";

	$categorieC=new CategorieC();
	
	if (isset($_POST["id_categorie_planning"])){
		$categorieC->supprimerCategorie($_POST["id_categorie_planning"]);
		header('Location:gcp copie.php');
	}

?>