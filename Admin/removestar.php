<?php
include '../connectionuju.php';

$id = $_POST['id'];

$delete_ = " DELETE FROM starred_mail WHERE Id= '$id' ";
$query = mysqli_query($con,$delete_);
if($query){
    echo "Deleted row ".$id;
}

header('location: starred.php');
?>