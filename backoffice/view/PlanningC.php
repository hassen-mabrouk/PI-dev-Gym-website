<?PHP
	include "../config.php";
	require_once '../model/Planning.php';

	class PlanningC {
		
	
//SURFSET FITNESS	
		function afficherPlanningsSURFM(){
			
			$sql="SELECT * FROM Planning where categorie='Surfset fitness' && heure='8:00:00' && date_planning='2020-12-1'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function afficherPlanningsSURFW(){
			
			$sql="SELECT * FROM Planning where categorie='Surfset fitness' && heure='10:00:00' && date_planning='2020-12-2'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
//Friday 14h
		function afficherPlanningsSURFFR(){
			
			$sql="SELECT * FROM Planning where categorie='Surfset fitness' && heure='14:00:00'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
//friday 19h
function afficherPlanningsSURFFR19(){
			
	$sql="SELECT * FROM Planning where categorie='Surfset fitness' && heure='19:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//sunday 14h
function afficherPlanningsSURFSUN14(){
			
	$sql="SELECT * FROM Planning where categorie='Surfset fitness'&& heure='14:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}

//sunday 
		function afficherPlanningsSURFSUN(){
			
			$sql="SELECT * FROM Planning where categorie='Surfset fitness'&& heure='16:00:00'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
//AERIAL YOGA
		
//monday
function afficherPlanningsYOGAM(){
			
	$sql="SELECT * FROM Planning where categorie='Aerial yoga' && heure='10:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//wednesday
function afficherPlanningsYOGAW(){
			
	$sql="SELECT * FROM Planning where categorie='Aerial yoga' && heure='8:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//thursday
function afficherPlanningsYOGATH(){
	
	$sql="SELECT * FROM Planning where categorie='Aerial yoga' && heure='14:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//thursday 16h
function afficherPlanningsYOGATH16(){
	
	$sql="SELECT * FROM Planning where categorie='Aerial yoga' && heure='16:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//friday
function afficherPlanningsYOGAFR(){
	
	$sql="SELECT * FROM Planning where  categorie='Aerial yoga' && heure='16:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}

//sunday

function afficherPlanningsYOGASUN(){
	
	$sql="SELECT * FROM Planning where  categorie='Aerial yoga' && heure='19:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}

//Batchata
//monday
function afficherPlanningsBATM(){
			
	$sql="SELECT * FROM Planning where categorie='Batchata' && heure='14:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//monday 16h
function afficherPlanningsBATM16(){
			
	$sql="SELECT * FROM Planning where categorie='Batchata' && heure='16:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//monday 19h
function afficherPlanningsBATM19(){
			
	$sql="SELECT * FROM Planning where categorie='Batchata' && heure='19:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//wednesday 14
function afficherPlanningsBATW(){
			
	$sql="SELECT * FROM Planning where categorie='Batchata' && heure='14:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//wednesday 16h
function afficherPlanningsBATW16(){
			
	$sql="SELECT * FROM Planning where categorie='Batchata' && heure='16:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//wednesday 19h
function afficherPlanningsBATW19(){
			
	$sql="SELECT * FROM Planning where categorie='Batchata' && heure='19:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//thursday
function afficherPlanningsBATTH(){
	
	$sql="SELECT * FROM Planning where categorie='Batchata' && heure='19:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}

//Aqua Bike
//thursday
function afficherPlanningsAQUATH(){
	
	$sql="SELECT * FROM Planning where categorie='Aqua bike' && heure='8:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}

//thursday 10h
function afficherPlanningsAQUATH10(){
	
	$sql="SELECT * FROM Planning where categorie='Aqua bike' && heure='10:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//friday 
function afficherPlanningsAQUAFR(){
	
	$sql="SELECT * FROM Planning where  categorie='Aqua bike' && heure='08:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//friday 10h
function afficherPlanningsAQUAFR10(){
	
	$sql="SELECT * FROM Planning where  categorie='Aqua bike' && heure='10:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//sunday
function afficherPlanningsAQUASUN(){
			
	$sql="SELECT * FROM Planning where categorie='Aqua bike'&& heure='8:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
//sunday10h
function afficherPlanningsAQUASUN10(){
			
	$sql="SELECT * FROM Planning where categorie='Aqua bike'&& heure='10:00:00'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}





		function recupererPlanning($id){
			$sql="SELECT * from Planning where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererPlanning1($id){
			$sql="SELECT * from Planning where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>