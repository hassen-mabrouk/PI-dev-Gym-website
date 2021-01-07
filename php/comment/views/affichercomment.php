<?PHP
include __DIR__."/../core/commentManager.php";
$comment1C=new commentManager();
$listecomment=$comment1C->afficher($_GET['id']);
$nombre=$comment1C->count($_GET['id']);
foreach($nombre as $row){

	?>
	<div class="group-title">
										<h4><?=$row['nbr']?> comments</h4>
									</div>

	<?PHP
}



foreach($listecomment as $row){

	?>
		<div class="comment-box">
										<div class="comment">
											<div class="author-thumb">
												<img src="images/resource/author-7.jpg" alt="">
												
											</div>
											<div class="comment-info clearfix"><strong><?=$row['name']?> </strong><div class="comment-time"><?=$row['date']?></div></div>
											<div class="text"><?=$row['message']?></div>
										</div>
									</div>

	<?PHP
}
?>






