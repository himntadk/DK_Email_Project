<?php
include '../connectionuju.php';

$id = $_GET['id'];
$select = "SELECT * FROM trash WHERE Id= '$id' ";
$query = mysqli_query($con,$select);

$delete = "DELETE FROM trash WHERE Id='$id' ";
 $del_query = mysqli_query($con,$delete);
 if($del_query){
     ?>
     <script>
     console.log("deleted");
     </script>
     <?php
 }

$res = mysqli_fetch_array($query);

$from= $res['Sender'];
 $to= $res['Receiver'];
 $sub= $res['Subject'];
 $mail= $res['Mail'];
 $time= $res['Time'];
 $day = $res['Day'];
 $pdf= $res['PDF'];
 $image= $res['IMAGE'];

 $insert= "INSERT INTO mail_store (Sender, Receiver, Subject, Mail, Time, Curr_Day, Pdf, Image)
           VALUES('$from','$to','$sub','$mail','$time','$day','$pdf','$image')";
 $query_ins= mysqli_query($con,$insert);

 ?>
 <script>
 window.location.href="trash.php";
 </script>

?>