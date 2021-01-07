<?PHP
require_once __DIR__ . '/../core/participantManager.php' ;
$parti=new participantManager();
$listparti=$parti->afficher();



foreach($listparti as $row){

	?>
	
	<tr>
                          <td><?php echo $row['id']?></td>
                          <td><?php echo $row['name']?></td>
                          <td><?php echo $row['mail']?></td>
                          <td><?php echo $row['event_title']?></td>
                          <td><a href="php/participants/core/delete_participant.php?id=<?PHP echo $row['id']; ?>" class="btn btn-default btn-sm"><i class="fa fa-trash"></i> </a></td>
												</tr>
	<?PHP
}
?>






