<?PHP
include __DIR__."/../core/blogManager.php";
$blog1C=new blogManager();
$listeblog=$blog1C->afficher();




foreach($listeblog as $row){

	?>
	
	<tr>
                                                    <td><?php echo $row['id']?></td>
                                                    <td><?php echo $row['author']?></td>
                                                    <td><?php echo $row['title']?></td>
                                                    <td><?php echo $row['date']?></td>
                                                    <td><?php echo $row['catname']?></td>
                                                    <td><a href="../front/blog.php?id=<?PHP echo $row['id']; ?>" class="btn btn-default btn-sm"><i class="fa fa-link"></i> </a></td>
                                                    <td><a href="php/blog/core/delete_blog.php?id=<?PHP echo $row['id']; ?>" class="btn btn-default btn-sm"><i class="fa fa-trash"></i> </a></td>
													<td><a href="admin_edit_article.php?id=<?=$row['id']?>&author=<?=$row['author']?>&title=<?=$row['title']?>&content=<?=$row['content']?>&img=<?=$row['img']?>" class="btn btn-default btn-sm"><i class="fa fa-wrench"></i> </a></td>
												</tr>
	<?PHP
}
?>






