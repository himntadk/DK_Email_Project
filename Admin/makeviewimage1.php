<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pdf</title>
    <style>
    .container{
        text-align: center;
    }
    img{
        width:100%;
        height:700px;
    }
    </style>
</head>
<body>
   <div class="container">
   <?php
include '../connectionuju.php';

$id= $_GET['id'];
$select = "SELECT * FROM mail_store WHERE Id='$id' ";
$query= mysqli_query($con,$select);
while($res= mysqli_fetch_array($query)){
    ?>
  <img src="IMAGE/<?php echo $res['Image'];?>" >
    <?php
}
?>
   </div> 
</body>
</html>

