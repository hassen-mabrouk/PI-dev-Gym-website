<?php  


require 'blogManager.php' ;


if(isset($_GET['id']))
{
  $manager= new blogManager() ;

      
    
        $manager->delete($_GET['id']) ;
    
        header('Location: ../../../tables-article.php'); 
    
     
}
