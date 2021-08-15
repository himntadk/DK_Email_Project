<?php
include '../connectionuju.php';
$id = $_POST['id'];

$select= "SELECT * FROM mail_store WHERE Id='$id' ";
$query= mysqli_query($con,$select);
$res= mysqli_fetch_array($query);

$from = $res['Sender'];
$to = $res['Receiver'];
$sub = $res['Subject'];
$mail= $res['Mail'];
$cur_time= $res['Time'];
$cur_day = $res['Curr_Day'];
$pdf = $res['Pdf'];
$image = $res['Image'];

$insert = "INSERT INTO starred_mail(Sender,Receiver, Subject, Mail, Curr_Time,Curr_Day,Pdf,Image)
           VALUES('$from','$to','$sub','$mail','$cur_time','$cur_day','$pdf','$image')";
$insert_query= mysqli_query($con,$insert);
if($insert_query){
    echo "inserted";
}
?>