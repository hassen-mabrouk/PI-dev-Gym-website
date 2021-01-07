<?php  


require 'categorieManager.php' ;


if(isset($_GET['id']))
{
  $manager= new categorieManager() ;

      
    
        $manager->delete($_GET['id']) ;
    
        header('Location: ../../../tables-categorie.php'); 
    
     
}
