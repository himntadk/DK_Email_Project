<?php
include '../connectionuju.php';

$from_ = $_POST['from'];
$to_= $_POST['to'];
$sub_ = $_POST['sub'];
$mail_ = $_POST['mail'];
$abc_ = $_POST['abc'];

echo $from_. $to_. $sub_. $mail_.$abc_;
   
        // $insert_ = "INSERT INTO draft(Sender, Receiver, Subject, Mail, Pdf, Image) 
        //           VALUES('$from_','$to_','$sub_','fffff fffffasfefwr','','')";
        // $query_= mysqli_query($con,$insert_);
        // if($query_)
        // echo "Saved as Draft!";
        // else
        // echo "not saved!";
?>