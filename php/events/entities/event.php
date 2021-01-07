<?php 

class event
{
  private $id ;
  private $title ;
  private $nbplaces ;
  private $date;
  private $description;
  private $img;
  private $idcategorie;
  private $name;



/* const ME=1 ;
const DEAD=2 ;
const DAMAGED=3 ; */

  public function __construct(array $data)        
  {
    $this->hydrate($data) ;
  }

  public function hydrate(array $data)
  {
    foreach ($data as $key=>$value )
    {
      $method='set'.ucfirst($key) ;
       if(method_exists($this,$method))
       {
         $this->$method($value) ;
       }
    }
  }

  public function id(){return $this->id ;}
  public function title(){return $this->title ;}
  public function nbplaces(){return $this->nbplaces ;}
  public function date(){return $this->date ;}
  public function description(){return $this->description ;}
  public function img(){return $this->img ;}
  public function idcategorie(){return $this->idcategorie ;}
  public function name(){return $this->name ;}
 


  public function setId($id)
  {
    $this->id=$id ;
  }
  public function settitle($title)
  {
    $this->title=$title ;
  }

  public function setnbplaces($nbplaces)
  {
    $this->nbplaces=$nbplaces ;
  }
  public function setdate($date)
  {
    $this->date=$date ;
  }
  public function setdescription($description)
  {
    $this->description=$description ;
  }
  public function setimg($img)
  {
    $this->img=$img ;
  }
  public function setidcategorie($idcategorie)
  {
    $this->idcategorie=$idcategorie ;
  }
  public function setname($name)
  {
    $this->name=$name ;
  }
  




}