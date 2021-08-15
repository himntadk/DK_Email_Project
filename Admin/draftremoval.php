<?php
include '../connectionuju.php';

$id= $_POST['id'];
$delete = "DELETE FROM draft WHERE Id='$id' ";
$query= mysqli_query($con,$delete);
 if($query)
 echo "Processing Edit!";

 header('location: draft.php');
?>