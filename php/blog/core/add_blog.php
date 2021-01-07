<?php  


require 'blogManager.php' ;


if(isset($_POST['img']))
{
  $manager= new blogManager() ;
    if(!empty($_POST['img']) && !empty($_POST['title']) && !empty($_POST['content']) 
     && !empty($_POST['author'])&& !empty($_POST['idcat']))
    {
      $blog= new blog(array(
        
        'img'=>$_POST['img'],
        'title'=>$_POST['title'],
        'content'=>$_POST['content'],
        'author'=>$_POST['author'],
        'idcat'=>$_POST['idcat'],
      
        
        )) ;
    
        $manager->add($blog) ;
        
    
      
      }
   
    
}
header('Location: ../../../tables-article.php');