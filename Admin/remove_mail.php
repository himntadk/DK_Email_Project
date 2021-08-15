<?php
include '../connectionuju.php';
$day_curr = date("Y-m-d");
$id= $_POST['id'];

 $select = "SELECT * FROM mail_store WHERE Id='$id' ";
 $sel_query = mysqli_query($con,$select); 
  
 $delete = "DELETE FROM mail_store WHERE Id='$id' ";
 $del_query = mysqli_query($con,$delete);
 if($del_query){
     ?>
     <script>
     console.log("deleted");
     </script>
     <?php
 }

 $res= mysqli_fetch_array($sel_query);
 $from= $res['Sender'];
 $to= $res['Receiver'];
 $sub= $res['Subject'];
 $mail= $res['Mail'];
 $time= $res['Time'];
 $day = $res['Curr_Day'];
 $pdf= $res['Pdf'];
 $image= $res['Image'];
 $insert = "INSERT INTO trash (Sender, Receiver, Subject, Mail, day_del,Time, Day, PDF, IMAGE)
            VALUES('$from','$to','$sub','$mail','$day_curr','$time','$day','$pdf','$image')";
 $ins_query= mysqli_query($con,$insert);

 ?>
 <script>
 window.location.href="sent.php";
 </script>
 <?php
?>