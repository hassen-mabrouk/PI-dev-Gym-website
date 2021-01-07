<?php  


require 'eventManager.php' ;


if(isset($_GET['id']))
{
  $manager= new eventManager() ;

      
    
        $manager->delete($_GET['id']) ;
    
        header('Location: ../../../admin_events.php'); 
    
     
}
