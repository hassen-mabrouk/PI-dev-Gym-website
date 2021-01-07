<?php  


require 'blogManager.php' ;


if(isset($_POST['id']))
{
  
  $manager= new blogManager() ;
    if(!empty($_POST['img']) && !empty($_POST['title']) && !empty($_POST['content'])
     && !empty($_POST['author']))
    {
      $blog= new blog(array(
        'id'=>$_POST['id'],
        'img'=>$_POST['img'],
        'title'=>$_POST['title'],
        'content'=>$_POST['content'],
        'author'=>$_POST['author']
      
        
        )) ;
    
        $manager->update($blog) ;
        
    
        header('Location: ../../../tables-article.php'); 
    }
    
}
 