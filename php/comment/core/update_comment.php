<?php  


require 'commentManager.php' ;


if(isset($_POST['id']))
{

  $manager= new commentManager() ;
  if(!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])
  && !empty($_POST['idevent']) && !empty($_POST['date']) 
  && !empty($_POST['idcategorie']) )
  {
    $comment= new comment(array(
      
      'id'=>$_POST['id'],
      'name'=>$_POST['name'],
      'email'=>$_POST['email'],
      'message'=>$_POST['message'],
      'idevent'=>$_POST['idevent'],
      'date'=>$_POST['date'],
      'idcategorie'=>$_POST['idcategorie']
      
      )) ;
    
        $manager->update($comment) ;
    
        header('Location: ../../../backend/uni-comments.php'); 
    }
    
}
