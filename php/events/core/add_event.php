<?php  


require 'eventManager.php' ;

if(isset($_POST['title']))
{
  
  $manager= new eventManager() ;
    if( !empty($_POST['title']) &&  !empty($_POST['nbplaces']) && !empty($_POST['date'])
     && !empty($_POST['description']) && !empty($_POST['img']) 
    && !empty($_POST['idcategorie']) && !empty($_POST['name'])   )
    {
      
      $event= new event(array(
        
        
        'nbplaces'=>$_POST['nbplaces'],
        'title'=>$_POST['title'],
        'date'=>$_POST['date'],
        'description'=>$_POST['description'],
        'img'=>$_POST['img'],
        'idcategorie'=>$_POST['idcategorie'],
        'name'=>$_POST['name'],
        )) ;
    
        $manager->add($event) ;
    
      
    }
    
}
  header('Location: ../../../admin_events.php');