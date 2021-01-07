<?php  


require 'participantManager.php' ;
require __DIR__."/../../events/core/eventManager.php";
$manager2= new eventManager() ;
if(isset($_POST['name']))
{
  
  $manager= new participantManager() ;
    if( !empty($_POST['mail']) &&  !empty($_POST['idevent']) && !empty($_POST['name'])   )
    {
      
      $participant= new participant(array(
        
        
        'mail'=>$_POST['mail'],
        'idevent'=>$_POST['idevent'],
         'name'=>$_POST['name'],
        )) ;
    
        $manager->add($participant) ;
        $name=$manager2->get($_POST['idevent']) ;

        foreach($name as $row)
        {
          $to_email = $_POST['mail'];
          $subject = "INVITATION EVENT !!";
          $body = "Hi,".$_POST['name'].", youre invited to our event ".$row['title'];
          $headers = "From: bettaiebyasmine3@gmail.com";
          
          if (mail($to_email, $subject, $body, $headers)) {
              echo "Email successfully sent to $to_email...";
          } else {
              echo "Email sending failed...";
          }    
        }
      
    }
    
}
  header('Location: ../../../../front/events.php');