<?PHP
	require_once "../config.php";
	require_once '../model/Planning.php';

	
		
		class PlanningC
{

    public function ajouterPlanning($Planning)
    {
        $sql = "INSERT INTO Planning(categorie,coach,date_planning,heure) 
			VALUES (:categorie,:coach,:date_planning,:heure)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'categorie' => $Planning->getCategorie(),
                'coach' => $Planning->getCoach(),
                'date_planning' => $Planning->getDate_planning(),
                'heure' => $Planning->getHeure()

            ]);
           
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
		
		function afficherPlannings(){
			
			$sql="SELECT * FROM Planning  ";
			$db = config::getConnexion();
			
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerPlanning($id){
			$sql="DELETE FROM Planning WHERE id_planning= :id_planning";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_planning',$id);
			try{
				$req->execute();
			}
			
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierPlanning($Planning, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE Planning SET 
						categorie = :categorie, 
						coach = :coach,
						date_planning = :date_planning,
						heure = :heure
					WHERE id_planning = :id_planning'
				);
				$query->execute([
					'categorie' => $Planning->getCategorie(),
					'coach' => $Planning->getCoach(),
					'date_planning' => $Planning->getDate_planning(),
					'heure' => $Planning->getHeure(),
					'id_planning' => $id
				]);
				?>
				<script> alert("updated successfully!!"); </script>
				<?php
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recherchePlan($key)
		{
			$sql = "SELECT * FROM Planning WHERE categorie LIKE '%$key%'  OR coach LIKE '%$key%' OR date_planning LIKE '%$key%' OR heure LIKE '%$key%'";
			$db = config::getConnexion();
			try {
				$liste = $db->query($sql);//retourne le resultat en un objet PDOstatement
				return $liste;
			} catch (Exception $e) {
				die('Erreur: ' . $e->getMessage());
			}
		}

	/*	function triPlanning()
		{ $query="SELECT * FROM Planning";
			$sortable=["id_planning","categorie","coach","date_planning","heure"];
			
			if (!empty($_GET['sort']) && in_array($_GET['sort'],$sortable)) {
				$direction=$GET['dir']?? 'asc';
				if(!in_array($direction,['asc','desc'])){
					$direction='asc';
				}
				$query .= "ORDER BY" . $_GET['sort'] . " $direction";
			}
		}*/
		function triPlanning()
		{
			$sql = "SELECT * FROM Planning ORDER BY coach asc";
		$db = config::getConnexion();
			try {
				$liste = $db->query($sql);//retourne le resultat en un objet PDOstatement
				return $liste;
			} catch (Exception $e) {
				die('Erreur: ' . $e->getMessage());
			}
		}
		

		function recupererPlanning($id){
			$sql="SELECT * from Planning where id_planning=$id";
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
			$sql="SELECT * from Planning where id_planning=$id";
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

?>