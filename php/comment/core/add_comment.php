<?php  


require 'commentManager.php' ;


if(isset($_POST['name']))
{
  $manager= new commentManager() ;
  if( !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])
  && !empty($_POST['idarticle'])
   )
  {
    $comment= new comment(array(
 
      'name'=>$_POST['name'],
      'email'=>$_POST['email'],
      'message'=>$_POST['message'],
      'idarticle'=>$_POST['idarticle']
      
     
      
      )) ;
    
        $manager->add($comment) ;


        
        $b=$_POST['idarticle'];
        $a="Location: ../../../../front/blog.php?id=".$b;
        header($a);
      
    }
    
}




