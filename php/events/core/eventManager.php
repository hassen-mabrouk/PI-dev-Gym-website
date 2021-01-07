<?php  

/* require 'php/events/entities/event.php' ; */
 require __DIR__.'/../entities/event.php' ;

class eventManager
{

   private $bd ;

   public function __construct()
   {
     
      try
      {
       $this->bd = new PDO('mysql:host=localhost;dbname=gym;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }
   }


  public function add(event $event)
  {
    $reponse=$this->bd->prepare ('INSERT INTO event(title,nbplaces,date,description,img,idcategorie,name) VALUES(:title,:nbplaces,:date,:description,:img,:idcategorie,:name)') ;
    $reponse->execute(array(
     
     'title'=>$event->title() ,
     'nbplaces'=>$event->nbplaces() ,
     'date'=>$event->date() ,
     'description'=>$event->description() ,  
     'img'=>$event->img() ,   
     'idcategorie'=>$event->idcategorie() ,   
     'name'=>$event->name()   

    ));
  }
  public function update(event $event)
  {
    
    $reponse=$this->bd->prepare ('UPDATE event SET title=:title,nbplaces=:nbplaces,date=:date,
    description=:description,img=:img,idcategorie=:idcategorie,name=:name  WHERE id=:id') ;
    $reponse->execute(array(
     
     'id'=>$event->id() ,
     'title'=>$event->title() ,
     'nbplaces'=>$event->nbplaces() ,
     'date'=>$event->date() ,
     'description'=>$event->description() ,  
     'img'=>$event->img() ,   
     'idcategorie'=>$event->idcategorie() ,   
     'name'=>$event->name() 


    ));
  }
  public function afficher()
  {
    //$reponse=$this->bd->query( 'SELECT * FROM event '  ) ;
    $reponse=$this->bd->query('SELECT a.id ,a.title ,nbplaces,a.date,a.description,img,a.idcategorie ,b.name AS categorie_name,a.name
     FROM event a INNER JOIN categorie b ON a.idcategorie=b.id ' ) ; 

    return $reponse ; 
  }
  
  public function afficher_date()
  {
    //$reponse=$this->bd->query( 'SELECT * FROM event '  ) ;
    $reponse=$this->bd->query('SELECT a.id ,a.title ,nbplaces,a.date,a.description,img,a.idcategorie ,b.name AS categorie_name,a.name
     FROM event a INNER JOIN categorie b ON a.idcategorie=b.id ORDER BY date  DESC' ) ; 

    return $reponse ; 
  }
  
  
  
 
 
  public function delete($id)
  {
    $reponse=$this->bd->prepare( 'DELETE FROM event WHERE id=:id' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

    
  }
  
  public function get($id)
  {
    //$reponse=$this->bd->prepare( 'SELECT * FROM course WHERE id=:id' ) ;
    $reponse=$this->bd->prepare('SELECT a.id ,a.title ,nbplaces,a.date,a.description,img,a.idcategorie ,b.name AS categorie_name,a.name
    FROM event a INNER JOIN categorie b ON a.idcategorie=b.id  WHERE a.id=:id' ) ; 
    $reponse->execute(array(
     'id'=>$id
    ));

    return $reponse ;
  }


  public function afficher2($id)
  {
    //$reponse=$this->bd->query( 'SELECT * FROM blog '  ) ;
    $reponse=$this->bd->prepare('SELECT * FROM event where idcategorie=:id' ) ; 
    $reponse->execute(array(
      'id'=>$id
     ));
    return $reponse ; 
  }
 
}
