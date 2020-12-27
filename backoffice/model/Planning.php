<?php
class Planning{
    private $id;
    //private $nom;
    private $categorie;
    private $coach;
    private $date_planning;
    private $heure;
  

    public function __construct(/*$nom*/$categorie,$coach,$date_planning,$heure)
    {
        //$this->nom=$nom;
        $this->categorie= $categorie;
        $this->coach = $coach;
        $this->date_planning=$date_planning;
        $this->heure=$heure;

    }
   
    public function getId() {
        return $this->id;
    }

   /* public function setNom($nom ){
        $this->nom=$nom;
    }
    public function getNom() {
        return $this->nom;
    }*/

    public function setCategorie($categorie ){
        $this->catergorie=$categorie;
    }
    public function getCategorie() {
        return $this->categorie;
    }

    public function setCoach($coach ){
        $this->image=$coach;
    }
    public function getCoach() {
        return $this->coach;
    }

    public function setDate_planning($date_planning){
        $this->date_planning=$date_planning;
    }
    public function getDate_planning() {
        return $this->date_planning;
    }

    public function setHeure($heure){
        $this->heure=$heure;
    }
    public function getHeure() {
        return $this->heure;
    }
}
?>