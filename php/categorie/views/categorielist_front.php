
<?php 

/* require 'php/courses/core/coursemanager.php'; */
//require '/opt/lampp/htdocs/Formini/php/courses/core/courseManager.php';
require_once __DIR__ . '/../core/categorieManager.php' ;

//var_dump(__DIR__) ;
$manager2 =new categorieManager () ;

$reponse3=$manager2->afficher() ;




while($data3=$reponse3->fetch())
{
  $reponse4=$manager2->count($data3['id']);
  if($data4=$reponse4->fetch())
  {

  
?>

 




<li><a href=" blogs.php?id=<?=$data3['id']?>"> <?=$data3['name'] ?><span>(<?=$data4['total'] ?>)</span></a></li>

<?php

  }
  else {
    ?>
    
      <li><a href="#"><?=$data3['name'] ?>(0)<span>(0)</span></a></li>
      <?php 
   
  }
}
 ?>  