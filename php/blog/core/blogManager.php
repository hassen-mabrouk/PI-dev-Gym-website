<?php  

/* require 'php/blogs/entities/blog.php' ; */
 require __DIR__.'/../entities/blog.php' ;

class blogManager
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


  public function add(blog $blog)
  {
    $reponse=$this->bd->prepare ('INSERT INTO blog(img,title,content,author,idcat) VALUES(:img,:title,:content,:author,:idcat)') ;
    $reponse->execute(array(
     'img'=>$blog->img() ,
     'title'=>$blog->title() ,
     'content'=>$blog->content() ,  
     'author'=>$blog->author() ,
     'idcat'=>$blog->idcat()
    ));
  }
  public function update(blog $blog)
  {
    
    $reponse=$this->bd->prepare ('UPDATE blog SET img=:img,title=:title,content=:content,author=:author  WHERE id=:id') ;
    $reponse->execute(array(
     'id'=>$blog->id() ,
     'title'=>$blog->title() ,
     'content'=>$blog->content() ,  
     'author'=>$blog->author(), 
     'img'=>$blog->img() 


    ));
  }
  public function afficher()
  {
    //$reponse=$this->bd->query( 'SELECT * FROM blog '  ) ;
    $reponse=$this->bd->query('SELECT a.id ,a.title,a.content,a.date,a.author,a.img,b.name as catname FROM blog a INNER JOIN categorie b ON a.idcat=b.id' ) ; 

    return $reponse ; 
  }
  
  public function afficher2($id)
  {
    //$reponse=$this->bd->query( 'SELECT * FROM blog '  ) ;
    $reponse=$this->bd->prepare('SELECT * FROM blog where idcat=:id' ) ; 
    $reponse->execute(array(
      'id'=>$id
     ));
    return $reponse ; 
  }
  public function afficher_date()
  {
    //$reponse=$this->bd->query( 'SELECT * FROM event '  ) ;
    $reponse=$this->bd->query('SELECT * FROM blog ORDER BY date  DESC' ) ; 

    return $reponse ; 
  }
  
 
  
 
 
  public function delete($id)
  {
    $reponse=$this->bd->prepare( 'DELETE FROM blog WHERE id=:id' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

    
  }

  public function get($id)
  {
    //$reponse=$this->bd->prepare( 'SELECT * FROM course WHERE id=:id' ) ;
    $reponse=$this->bd->prepare('SELECT a.*,b.id as idc ,b.name as name FROM blog a INNER JOIN categorie b ON a.idcat=b.id  WHERE a.id=:id' ) ; 
    $reponse->execute(array(
     'id'=>$id
    ));

    return $reponse ;
  }
 
  
 
 
 
}
