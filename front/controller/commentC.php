<?PHP
include "config.php";
class commentC
{
 
	function ajoutercomment($comment)
	{
		 $sql = "INSERT INTO comment (name,email,message) values (:name, :email , :message) ";
        $db = config::getConnexion(); 
        try {
            $req = $db->prepare($sql);
			$req->bindValue(':name', $comment->getname());
			$req->bindValue(':message', $comment->getmessage());
			$req->bindValue(':email', $comment->getemail());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
	function rechercheCateg($key)
	{
		$sql = "SELECT * FROM comment WHERE name LIKE '%$key%'  OR message LIKE '%$key%' OR email LIKE '%$key%'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function affichercomment()
	{
		$sql = " SELECT * FROM comment ";
        $db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimercomment($name)
	{
		$sql = "DELETE FROM comment where name= :name";
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
