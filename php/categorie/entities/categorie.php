<?php 

class categorie
{
  private $id ;
  private $name ;
  private $description ;




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
  public function description(){return $this->description ;}

 


  public function setId($id)
  {
    $this->id=$id ;
  }
  public function setname($name)
  {
    $this->name=$name ;
  }

  public function setdescription($description)
  {
    $this->description=$description ;
  }
  





}