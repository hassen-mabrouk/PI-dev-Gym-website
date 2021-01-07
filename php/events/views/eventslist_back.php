
<?php 

/* require 'php/courses/core/coursemanager.php'; */
//require '/opt/lampp/htdocs/Formini/php/courses/core/courseManager.php';
require_once __DIR__ . '/../core/eventManager.php' ;
//var_dump(__DIR__) ;
$manager =new eventManager () ;

$reponse=$manager->afficher() ;




while($data=$reponse->fetch())
{
?>
  <div class="col-md-6 col-lg-6 col-xl-3">
<!-- Simple card -->
                                <div class="card m-b-30">

                                <img class="card-img-top img-fluid" src="../front/images/resource/<?=$data['img']?>"
                                        alt="Card image cap">
                                        <div class="card-body">
                                                                               
                                    <h4 class="card-title font-20 mt-0"><?=$data['title'] ?>  <button id="editbutton"   class="btn btn-outline-primary" type="submit" name="edit" value="supprimer"><a href="admin_edit_event.php?id=<?=$data['id'] ?>"><i  class="fa fa-edit"></i></a></button>  </h4>
                                        <p class="card-text"><?=$data['description'] ?></p>
                                        
                                        <a href="../front/event.php?id=<?= $data['id']; ?>" class="btn btn-primary waves-effect waves-light"  >see more</a>
                                        <button  id="supbutton"   class="btn btn-outline-primary" type="submit" name="delete" value="supprimer"><a href="php/events/core/delete_event.php?id=<?=$data['id'] ?>"> <i  class="fa fa-trash"> </i></a></button>

                                    </div>
                                </div>
                                </div><!-- end col -->
 <?php
}
 ?>     