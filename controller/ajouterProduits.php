<?PHP
require_once "C://xampp/htdocs/feel the burn/config.php";
require_once 'C://xampp\htdocs/feel the burn/model/produits.php';

class produitC
{

    public function ajouterProduits($produit,$idC)
    {
        $sql = "INSERT INTO produit(nomProduit,categorieProduit,couleurProduit,prixProduit,marqueProduit,quantiteProduit,imageProduit,idCategorie) 
			VALUES (:nomProduit,:categorieProduit,:couleurProduit,:prixProduit,:marqueProduit,:quantiteProduit,:imageProduit,:idCategorie)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'nomProduit' => $produit->getnomProduit(),
                'categorieProduit' => $produit->getcategorieProduit(),
                'couleurProduit' => $produit->getcouleurProduit(),
                'prixProduit' => $produit->getprixProduit(),
                'marqueProduit' => $produit->getmarqueProduit(),
                'quantiteProduit' => $produit->getquantiteProduit(),
                'imageProduit' => $produit->getimageProduit(),
                'idCategorie'=>$idC

            ]);
            ?>
            <script> alert("produit crée"); </script>
            <?PHP
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function afficherproduits()
    {

        $sql = "SELECT * FROM produit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function supprimerproduit($id)
    {     
        $sql = "DELETE FROM produit WHERE idProduit = :idProduit";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idProduit', $id);
        try {
            $req->execute();

        } 
        catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



function recupererproduit($idP){
    $sql="SELECT * from produit where idProduit =$idP";
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

function modifierproduit($produit, $idProduit)
{
    {
        try {
            $db = config::getConnexion();
            $sql= "UPDATE produit SET nomProduit = :nomProduit , categorieProduit = :categorieProduit , couleurProduit = :couleurProduit , prixProduit = :prixProduit , marqueProduit = :marqueProduit , quantiteProduit = :quantiteProduit , imageProduit = :imageProduit , categorieProduit = :categorieProduit WHERE idProduit =".$_GET['idProduit'];
            $query = $db->prepare($sql);
            //  $query->bindValue(':id',1);
            $query->bindValue(':nomProduit', $produit->getnomProduit());
            $query->bindValue(':categorieProduit', $produit->getcategorieProduit());
            $query->bindValue(':couleurProduit', $produit->getcouleurProduit());
            $query->bindValue(':prixProduit', $produit->getprixProduit());
            $query->bindValue(':marqueProduit', $produit->getmarqueProduit());
            $query->bindValue(':quantiteProduit', $produit->getquantiteProduit());
            $query->bindValue(':imageProduit', $produit->getimageProduit());
            
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