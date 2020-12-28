<?php

class produit
{
    private $nomProduit;
    private $categorieProduit;
    private $couleurProduit;
    private $prixProduit;
    private $marqueProduit;
    private $quantiteProduit;
    private $imageProduit;



    public function getidProduit()
    {
        return $this->idProduit;
    }

    public function getnomProduit()
    {
        return $this->nomProduit;
    }
    public function getcategorieProduit()
    {
        return $this->categorieProduit;
    }
    public function getcouleurProduit()
    {
        return $this->couleurProduit;
    }
    public function getprixProduit()
    {
        return $this->prixProduit;
    }
    public function getmarqueProduit()
    {
        return $this->marqueProduit;
    }
    public function getquantiteProduit()
    {
        return $this->quantiteProduit;
    }
    public function getimageProduit()
    {
        return $this->imageProduit;
    }


    public function setnomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;
    }
    public function setcategorieProduit($categorieProduit)
    {
        $this->categorieProduit = $categorieProduit;
    }
    public function setcouleurProduit($couleurProduit)
    {
        $this->couleurProduit = $couleurProduit;
    }
    public function setprixProduit($prixProduit)
    {
        $this->prixProduit = $prixProduit;
    }
    public function setmarqueProduit($marqueProduit)
    {
        $this->marqueProduit = $marqueProduit;
    }
    public function setquantiteProduit($quantiteProduit)
    {
        $this->quantiteProduit = $quantiteProduit;
    }
    public function setimageProduit($imageProduit)
    {
        $this->imageProduit = $imageProduit;
    }

    public function __construct($nomProduit, $categorieProduit, $couleurProduit, $prixProduit, $marqueProduit, $quantiteProduit,$imageProduit)
    {
        $this->nomProduit = $nomProduit;
        $this->categorieProduit = $categorieProduit;
        $this->couleurProduit = $couleurProduit;
        $this->prixProduit = $prixProduit;
        $this->marqueProduit = $marqueProduit;
        $this->quantiteProduit = $quantiteProduit;
        $this->imageProduit = $imageProduit;

    }
}
