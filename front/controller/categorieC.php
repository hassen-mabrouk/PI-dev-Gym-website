<?PHP
include "config.php";
class categorieC
{
 
	function ajoutercategorie($categorie)
	{
		 $sql = "INSERT INTO categorie (name,description,creation) values (:name, :description , :creation) ";
        $db = config::getConnexion(); 
        try {
            $req = $db->prepare($sql);
			$req->bindValue(':name', $categorie->getname());
			$req->bindValue(':creation', $categorie->getcreation());
			$req->bindValue(':description', $categorie->getdescription());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
	function rechercheCateg($key)
	{
		$sql = "SELECT * FROM categorie WHERE name LIKE '%$key%'  OR creation LIKE '%$key%' OR description LIKE '%$key%'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function affichercategorie()
	{
		$sql = " SELECT * FROM categorie ";
        $db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimercategorie($name)
	{
		$sql = "DELETE FROM categorie where name= :name";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':name', $name);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	
}
