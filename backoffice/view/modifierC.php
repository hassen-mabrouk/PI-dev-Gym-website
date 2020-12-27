
    
             <?php 
include "../config.php";
$total = 0 ;
//modification bel id
if (isset($_GET['id']))
{
	$total++;
	$req="select * from categorie where id=".$_GET['id'];
	$db=config::getConnexion();
	$result=$db->query($req);
       foreach($result as $row)

	   {   
		   $id=$row['id'];
           $name=$row['name'];
	       $description=$row['description'];
		   
		   
	   }
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
          
<form align="center" id="myForm" method="get" action="updateC.php">

<input type="hidden" value="<?php echo $id; ?>" name="id">
<tr><td>
<label> nom du categorie </label></td>
<td><input type="text"  value="<?php echo $name;?>" class="form-control" name="name" placeholder="nom du categorie" style="width:400px"> </td></tr>
</tr>
<tr><td><label> description </label></td>
<td><input type="text" value="<?php echo $description;?>" class="form-control" name="description" placeholder="description du categorie" style="width:400px"> </td></tr>
</table>




<button type="submit" class="btn btn-outline-success" value="valider" name="valider"><i class="fas fa-check"></i></button>
</a>
	  </form>

    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
	  </table> 
 <h5  style="color: white; background-color: green; width: 200px;" align="center"> <?php echo('Total de blog:'.$total)?></h5>
<form method="get" action="ajouterC.php" >
   <button align="center" style="background-color: #0c6071; width: 300px" class="btn btn-primary btn-block" type="submit" > <a>  Ajouter un autre produit  </a> </button>
</form>
</br>
  