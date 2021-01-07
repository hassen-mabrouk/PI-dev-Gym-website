<?php 

class comment
{
  private $id ;
  private $name ;
  private $email ;
  private $message;
  private $idarticle;
  private $date;
  private $idcategorie;



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
  public function name(){return $this->name ;}
  public function email(){return $this->email ;}
  public function message(){return $this->message ;}
  public function idarticle(){return $this->idarticle ;}
  public function date(){return $this->date ;}
  public function idcategorie(){return $this->idcategorie ;}

 


  public function setId($id)
  {
    $this->id=$id ;
  }
  public function setname($name)
  {
    $this->name=$name ;
  }

  public function setemail($email)
  {
    $this->email=$email ;
  }
  public function setmessage($message)
  {
    $this->message=$message ;
  }
  public function setidarticle($idarticle)
  {
    $this->idarticle=$idarticle ;
  }
  public function setdate($date)
  {
    $this->date=$date ;
  }
  public function setidcategorie($idcategorie)
  {
    $this->idcategorie=$idcategorie ;
  }
  




}