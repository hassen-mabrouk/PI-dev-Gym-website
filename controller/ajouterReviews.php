<?PHP
require_once "C://xampp/htdocs/feel the burn/config.php";
require_once 'C://xampp\htdocs/feel the burn/model/reviews.php';

class reviewC
{

    public function ajouterReviews($review)
    {
        $sql = "INSERT INTO produitreview(nomReview,emailReview,websiteReview,ratingReview,messageReview) 
			VALUES (:nomReview,:emailReview,:websiteReview,:ratingReview,:messageReview)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'nomReview' => $review->getnomReview(),
                'emailReview' => $review->getemailReview(),
                'websiteReview' => $review->getwebsiteReview(),
                'ratingReview' => $review->getratingReview(),
                'messageReview' => $review->getmessageReview()
                

            ]);
            ?>
            <script> alert("Review crée"); </script>
            <?PHP
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function afficherreviews()
    {

        $sql = "SELECT * FROM produitreview";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function supprimerreview($id)
    {     
        $sql = "DELETE FROM produitreview WHERE idReview = :idReview";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idReview', $id);
        try {
            $req->execute();

        } 
        catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
 
    function recherche($search_value)
    {
        $sql="SELECT * FROM produitreview where idReview like '$search_value' or nomReview like '%$search_value%' or emailReview like '%$search_value%' or websiteReview like '%$search_value%' ";

        //global $db;
        $db =Config::getConnexion();

        try{
            $result=$db->query($sql);

            return $result;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function sortv()
    {
        $sql = "SELECT * from produitreview order by ratingReview desc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }

    }
    public function AffichereviewPaginer($page, $perPage)
    {
        $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
        $sql = "SELECT * FROM produitreview LIMIT {$start},{$perPage}";
        $db = config::getConnexion();
        try {
            $liste = $db->prepare($sql);
            $liste->execute();
            $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    public function calcTotalRows($perPage)
    {
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM produitreview";
        $db = config::getConnexion();
        try {

            $liste = $db->query($sql);
            $total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
            $pages = ceil($total / $perPage);
            return $pages;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }






}

/*
    function modifierproduit($produit, $idProduit)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE newsproduit SET 
						nomReview = :nomReview, 
						emailReview= :emailReview,
						websiteReview = :websiteReview,
						ratingReview = :ratingReview,
						messageReview = :messageReview,
                        quantiteProduit = :quantiteProduit
					WHERE idProduit = :idProduit'
            );
            $query->execute([
                'nomReview' => $produit->getnomReview(),
                'emailReview' => $produit->getemailReview(),
                'websiteReview' => $produit->getwebsiteReview(),
                'ratingReview' => $produit->getratingReview(),
                'messageReview' => $produit->getmessageReview(),
                'quantiteProduit' => $produit->getquantiteProduit(),
                'idProduit' => $idProduit
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererproduit($idProduit)
    {
        $sql = "SELECT * from newsproduit where idProduit=$idProduit";
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
