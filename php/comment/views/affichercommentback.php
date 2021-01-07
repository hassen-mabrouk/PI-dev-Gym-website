<?PHP
include __DIR__."/../core/commentManager.php";
$comment1C=new commentManager();
$listecomment=$comment1C->affichertous();



foreach($listecomment as $row){

	?>
	
	<tr>
                                                    <td><?php echo $row['id']?></td>
													<td><?php echo $row['name']?></td>
													<td><?php echo $row['email']?></td>
													<td><?php echo $row['message']?></td>
													<td><?php echo $row['date']?></td>
													<td><?php echo $row['title']?></td>
                                                    <td><a href="php/comment/core/delete_comment.php?id=<?PHP echo $row['id']; ?>" class="btn btn-default btn-sm"><i class="fa fa-trash"></i> </a></td>
													
												</tr>
	<?PHP
}
?>






