<?php
$link = mysqli_connect("localhost", "root", "", "gym"); 
$id=$_GET['id'];
$name=$_GET['name'];
$description=$_GET['description'];
echo($id);
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error());
} 
  
$sql = "UPDATE categorie SET name='$name',description='$description' WHERE id='$id' "; 
if(mysqli_query($link, $sql)){ 
    header('location:gcb.php');
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link); 
?> 