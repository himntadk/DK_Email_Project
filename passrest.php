<?php
 include 'connectionuju.php';

 $email = $_POST['email'];

 $select = "SELECT * FROM admin_reg WHERE Email='$email' ";
 $query = mysqli_query($con,$select);
 $count_email= mysqli_num_rows($query);
 if($count_email){
    $token = bin2hex(random_bytes(15));
    $update= "UPDATE admin_reg SET Token = '$token' WHERE Email= '$email' ";
    $query_update= mysqli_query($con,$update);

    $user= $res['User'];
    
    $sub = "Reset Password";
    $body = "Hi $user., click here to reset your password http://localhost/Email_Project/adminpassreset.ph?token=".$token;
    $sender= "From: dkvariables@gmail.com";

    if(mail($email,$sub,$body,$sender)){
       echo "Password recovery link is sent to your email";
    }
    else{
        echo "failed!";
    }
 }
?>