


<?php 

/* require 'php/courses/core/coursemanager.php'; */
//require '/opt/lampp/htdocs/Formini/php/courses/core/courseManager.php';
require_once __DIR__ . '/../core/eventManager.php' ;
//var_dump(__DIR__) ;
$manager =new eventManager () ;

if(isset($_GET['id']))
{
	$reponse=$manager->afficher2($_GET['id']) ;
}
else
{
	$reponse=$manager->afficher() ;
}






while($data=$reponse->fetch())
{
?>






						<!-- News Block Three -->
						<div class="news-block-three">
							<div class="inner-box">
								<div class="image">
									<a href="event.php?id=<?=$data['id'] ?>"><img src="images/resource/<?=$data['img'] ?>" alt="" /></a>
								</div>
								<div class="lower-content">
					
									<h3><a href="event.php?id=<?=$data['id'] ?>"><?=$data['title'] ?></a></h3>
									<div class="text">
                  <?=$data['description'] ?></div>
									<a class="read-more" href="event.php?id=<?=$data['id'] ?>">Read more</a>
								</div>
							</div>
						</div>
 <?php
}
 ?>         
            