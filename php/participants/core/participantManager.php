<?php  

/* require 'php/participants/entities/participant.php' ; */
 require __DIR__.'/../entities/participant.php' ;

class participantManager
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


  public function add(participant $participant)
  {
    $reponse=$this->bd->prepare ('INSERT INTO participant(name,mail,idevent) VALUES(:name,:mail,:idevent)') ;
    $reponse->execute(array(
     
     'name'=>$participant->name() ,
     'mail'=>$participant->mail() ,  
     'idevent'=>$participant->idevent() 


    ));
    $reponse=$this->bd->prepare ('UPDATE event SET nbplaces = CASE WHEN nbplaces > 0 THEN nbplaces-1 ELSE nbplaces END  WHERE id=:id') ;
    $reponse->execute(array(
     
     'id'=>$participant->idevent() 


    ));
  }
  
  public function update(participant $participant)
  {
    
    $reponse=$this->bd->prepare ('UPDATE participant SET name=:name
    mail=:mail,idevent=:idevent  WHERE id=:id') ;
    $reponse->execute(array(

      'id'=>$participant->id() ,
      'name'=>$participant->name() ,
      'mail'=>$participant->mail() ,  
      'idevent'=>$participant->idevent()


    ));
  }
  public function afficher()
  {
    //$reponse=$this->bd->query( 'SELECT * FROM participant '  ) ;
    $reponse=$this->bd->query('SELECT a.id ,a.name,a.mail,b.title AS event_title,b.name
     FROM participant a INNER JOIN event b ON a.idevent=b.id ' ) ; 

    return $reponse ; 
  }
  
 
  
 
 
  public function delete($id)
  {
    $reponse=$this->bd->prepare( 'DELETE FROM participant WHERE id=:id' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

    
  }
  
 
 
 
}
