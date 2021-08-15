<?php
include '../connectionuju.php';

$id = $_POST['id'];

$del = "DELETE FROM client WHERE Id='$id' ";
$query_del = mysqli_query($con,$del);

if($query_del)
echo "Deleted 1 row!";
?>