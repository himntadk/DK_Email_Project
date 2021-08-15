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
    embed{
        width:100%;
        height:700px;
    }
    </style>
</head>
<body>
   <div class="container">
   <?php
include '../connectionuju.php';
$pdf= $_GET['pdf'];

$select = "SELECT * FROM mail_store WHERE Pdf= '$pdf' ";
$query= mysqli_query($con,$select);
$res= mysqli_fetch_array($query);
    ?>
  <embed src="PDF/<?php echo $res['Pdf'];?>" type="application/pdf">
    <?php
?>
   </div> 
</body>
</html>

