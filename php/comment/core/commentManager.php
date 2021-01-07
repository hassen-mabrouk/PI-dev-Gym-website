<?php  

/* require 'php/comments/entities/comment.php' ; */
 require __DIR__.'/../entities/comment.php' ;

class commentManager
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
              die('Erreur : '.$e->getmessage());
      }
   }


  public function add(comment $comment)
  {
    $reponse=$this->bd->prepare ('INSERT INTO comment (name,email,message,idarticle) VALUES(:name,:email,:message,:idarticle)') ;
    $reponse->execute(array(
     
     'name'=>$comment->name() ,
     'email'=>$comment->email() ,
     'message'=>$comment->message() ,
     'idarticle'=>$comment->idarticle()  
    

    ));
  }
  public function update(comment $comment)
  {
    
    $reponse=$this->bd->prepare ('UPDATE comment SET id=:id,name=:name,email=:email,message=:message,
    idarticle=:idarticle,date=:date,idcategorie=:idcategorie  WHERE id=:id') ;
    $reponse->execute(array(
     'id'=>$comment->id() ,
     'name'=>$comment->name() ,
     'email'=>$comment->email() ,
     'message'=>$comment->message() ,
     'idarticle'=>$comment->idarticle() ,  
     'date'=>$comment->date() ,   
     'idcategorie'=>$comment->idcategorie() 


    ));
  }
  public function afficher($id)
  {
    $reponse=$this->bd->prepare( 'SELECT * FROM comment where idarticle=:id'  ) ;

    $reponse->execute(array(
      'id'=>$id
     )); 
    

    return $reponse ; 
  }
  public function affichertous()
  {
    $reponse=$this->bd->query( 'SELECT a.*,b.title,b.id as idb FROM comment a INNER JOIN blog b ON b.id=a.idarticle'  ) ;

  

    return $reponse ; 
  }

  public function count($id)
  {
    $reponse=$this->bd->prepare( 'SELECT COUNT(*) as nbr FROM comment where idarticle=:id'  ) ;

    $reponse->execute(array(
      'id'=>$id
     )); 
    

    return $reponse ; 
  }


  
 
  
 
 
  public function delete($id)
  {
    $reponse=$this->bd->prepare( 'DELETE FROM comment WHERE id=:id' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

    
  }
  
 
 
 
}
