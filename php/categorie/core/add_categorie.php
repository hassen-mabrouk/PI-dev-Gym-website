<?php  


require 'categorieManager.php' ;


if(isset($_POST['name']))
{
  $manager= new categorieManager() ;
    if(!empty($_POST['name']) && !empty($_POST['description']) )
    {
      $categorie= new categorie(array(
        
        'name'=>$_POST['name'],
        'description'=>$_POST['description']
        
        )) ;
    
        $manager->add($categorie) ;
    
      
    }
    
}
header('Location: ../../../tables-categorie.php');