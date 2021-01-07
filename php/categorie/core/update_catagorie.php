<?php  


require 'categorieManager.php' ;


if(isset($_POST['id']))
{

  $manager= new categorieManager() ;
    if(!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['description']) )
    {
      $categorie= new categorie(array(
        
        'id'=>$_POST['id'],
        'name'=>$_POST['name'],
        'bio'=>$_POST['description']
        
        )) ;
    
        $manager->update($categorie) ;
    
        header('Location: ../../../backend/uni-categories.php'); 
    }
    
}
