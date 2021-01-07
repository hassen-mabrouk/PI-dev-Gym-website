<?PHP
include __DIR__."/../core/categorieManager.php";
$categorie1C=new categorieManager();
$listecategorie=$categorie1C->afficher();



foreach($listecategorie as $row){

	?>
	
	<tr>
                                                    <td><?php echo $row['id']?></td>
                                                    <td><?php echo $row['name']?></td>
                                                    <td><?php echo $row['description']?></td>
                                                    <td><a href="php/categorie/core/delete_categorie.php?id=<?PHP echo $row['id']; ?>" class="btn btn-default btn-sm"><i class="fa fa-trash"></i> </a></td>
													<td><a href="admin_edit_categorie.php?id=<?=$row['id']?>&name=<?=$row['name']?>&description=<?=$row['description']?>" class="btn btn-default btn-sm"><i class="fa fa-wrench"></i> </a></td>
												</tr>
	<?PHP
}
?>






