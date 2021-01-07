<?php 

class blog
{
  private $id ;
  private $title ;
  private $content ;
  private $date;
  private $author;
  private $img;
  private $idcat;




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
  public function content(){return $this->content ;}
  public function date(){return $this->date ;}
  public function author(){return $this->author ;}
  public function img(){return $this->img ;}
  public function idcat(){return $this->idcat ;}


  public function setId($id)
  {
    $this->id=$id ;
  }
  public function settitle($title)
  {
    $this->title=$title ;
  }

  public function setcontent($content)
  {
    $this->content=$content ;
  }
  
  public function setdate($date)
  {
    $this->date=$date ;
  }
  public function setauthor($author)
  {
    $this->author=$author ;
  }
  public function setimg($img)
  {
    $this->img=$img ;
  } 
  public function setIdcat($idcat)
  {
    $this->idcat=$idcat ;
  }




}