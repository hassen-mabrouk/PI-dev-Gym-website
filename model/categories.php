<?php

class categorie
{
    private $idCategorie;
    private $nomCategorie;
   


    public function getidCategorie()
    {
        return $this->idCategorie;
    }

    public function getnomCategorie()
    {
        return $this->nomCategorie;
    }
    


    public function setidCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;
    }
    public function setnomCategorie($nomCategorie)
    {
        $this->nomCategorie = $nomCategorie;
    }
    
    public function __construct($idCategorie, $nomCategorie)
    {
        $this->idCategorie = $idCategorie;
        $this->nomCategorie = $nomCategorie;
        

    }
}
