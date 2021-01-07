<?php  


require 'participantManager.php' ;


if(isset($_GET['id']))
{
  $manager= new participantManager() ;

      
    
        $manager->delete($_GET['id']) ;
    
        header('Location: ../../../participantlist.php'); 
    
     
}
