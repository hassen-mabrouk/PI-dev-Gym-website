<?php  

/* require 'php/categories/entities/categorie.php' ; */
 require __DIR__.'/../entities/categorie.php' ;

class categorieManager
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


  public function add(categorie $categorie)
  {
    $reponse=$this->bd->prepare ('INSERT INTO categorie (name,description) VALUES(:name,:description)') ;
    $reponse->execute(array(
     'name'=>$categorie->name() ,
     'description'=>$categorie->description()
    ));
  }
  public function update(categorie $categorie)
  {
    
    $reponse=$this->bd->prepare ('UPDATE categorie SET name=:name,description=:description  WHERE id=:id') ;
    $reponse->execute(array(
     'id'=>$categorie->id() ,
     'name'=>$categorie->name() ,
     'description'=>$categorie->description() 


    ));
  }
  public function afficher()
  {
    //$reponse=$this->bd->query( 'SELECT * FROM categorie '  ) ;
    $reponse=$this->bd->query('SELECT * FROM categorie' ) ; 

    return $reponse ; 
  }

  public function get($id)
  {
    //$reponse=$this->bd->query( 'SELECT * FROM course '  ) ;
    $reponse=$this->bd->prepare('SELECT name FROM categorie WHERE id=:id' ) ; 
    $reponse->execute(array(
     'id'=>$id
    )); 
    return $reponse ;
  }


  public function count($id)
  {
    $reponse=$this->bd->prepare( 'SELECT COUNT(idcat) as total from blog  WHERE idcat=:id' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

     return $reponse;
  }
  public function count2($id)
  {
    $reponse=$this->bd->prepare( 'SELECT COUNT(idcategorie) as total from event  WHERE idcategorie=:id' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

     return $reponse;
  }
 
 
  public function delete($id)
  {
    $reponse=$this->bd->prepare( 'DELETE FROM categorie WHERE id=:id' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

    
  }
  
 
 
 
}
