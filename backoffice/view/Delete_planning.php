<?PHP
	include "../controller/PlanningC.php";

	$planningC=new PlanningC();
	
	if (isset($_POST["id_planning"])){
		$planningC->supprimerPlanning($_POST["id_planning"]);
		header('Location:gp copie.php');
	}

?>