<?php  


require 'commentManager.php' ;


if(isset($_GET['id']))
{
  $manager= new commentManager() ;

       
    
        $manager->delete($_GET['id']) ;
    
        header('Location: ../../../tables-comment.php'); 
    
     
}
