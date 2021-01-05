<?PHP
require_once "C://xampp/htdocs/feel the burn/config.php";
require_once 'C://xampp/htdocs/feel the burn/model/Categories.php';

class CategorieC
{

    public function ajouterCategories($categorie)
    {
        $sql = "INSERT INTO produitcategorie(idCategorie,nomCategorie) 
			VALUES (:idCategorie,:nomCategorie)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'idCategorie' => $categorie->getidCategorie(),
                'nomCategorie' => $categorie->getnomCategorie()
                

            ]);
            ?>
            <script> alert("Categorie crée"); </script>
            <?PHP
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function afficherCategories()
    {

        $sql = "SELECT * FROM produitcategorie";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function supprimerCategorie($id)
    {     
        $sql = "DELETE FROM produitcategorie WHERE idCategorie = :idCategorie";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idCategorie', $id);
        try {
            $req->execute();

        } 
        catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

function recupererproduitCategorie($idC){
    $sql="SELECT * from produitcategorie where idCategorie =$idC";
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

function modifierproduitCategorie($produitcategorie, $idCategorie)
{
    {
        try {
            $db = config::getConnexion();
            $sql= "UPDATE produitcategorie SET idCategorie = :idCategorie , nomCategorie = :nomCategorie WHERE idCategorie =".$_GET['idCategorie'];
            $query = $db->prepare($sql);
            //  $query->bindValue(':id',1);
            $query->bindValue(':idCategorie', $produitcategorie->getidCategorie());
            $query->bindValue(':nomCategorie', $produitcategorie->getnomCategorie());
            
            
            //var_dump($pay->getprix_p());
            //die;
            $query->execute();
            //echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}

}




/*
    function modifierCategorie($Categorie, $idCategorie)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE newsCategorie SET 
						nomCategorie = :nomCategorie, 
						categorieCategorie= :categorieCategorie,
						couleurCategorie = :couleurCategorie,
						prixCategorie = :prixCategorie,
						marqueCategorie = :marqueCategorie,
                        quantiteCategorie = :quantiteCategorie
					WHERE idCategorie = :idCategorie'
            );
            $query->execute([
                'nomCategorie' => $Categorie->getnomCategorie(),
                'categorieCategorie' => $Categorie->getcategorieCategorie(),
                'couleurCategorie' => $Categorie->getcouleurCategorie(),
                'prixCategorie' => $Categorie->getprixCategorie(),
                'marqueCategorie' => $Categorie->getmarqueCategorie(),
                'quantiteCategorie' => $Categorie->getquantiteCategorie(),
                'idCategorie' => $idCategorie
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererCategorie($idCategorie)
    {
        $sql = "SELECT * from newsCategorie where idCategorie=$idCategorie";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
*/
