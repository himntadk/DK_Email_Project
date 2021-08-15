<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php include 'CSS/new3.php';?>
    <style>
    .colo{
    background: green;
    color:white;
}
    </style>
</head>
<body>
    <div class="mac">
    <h2>Reset Password </h2>
    <p>
   <span id="msg">
    </span>
   </p> 
    <form method="POST" id="myform">
    <div class="input-box">
    <input type="email" name="email" required="">
    <label>Registered Email</label>
    </div>
    <input type="submit" name="submit" value="send Verification">
    </form>
    </div>
</body>
</html>
<?php
 include 'connectionuju.php';

 if(isset($_POST['submit'])){
 $email = $_POST['email'];

 $select = "SELECT * FROM admin_reg WHERE Email='$email' ";
 $query = mysqli_query($con,$select);
 $res=mysqli_fetch_array($query);
 $count_email= mysqli_num_rows($query);
 if($count_email){
    $token = bin2hex(random_bytes(15));
    $update= "UPDATE admin_reg SET Token = '$token' WHERE Email= '$email' ";
    $query_update= mysqli_query($con,$update);

    $user= $res['User'];
    
    $sub = "Reset Password";
    $body = "Hi $user., click here to reset your password http://localhost/Email_Project/adminpassreset.php?token=".$token;
    $sender= "From: dkvariables@gmail.com";

    if(mail($email,$sub,$body,$sender)){
        ?>
         <script>
         document.getElementById('msg').textContent= "Password recovery link is sent to your email";
         document.getElementById('msg').className= "colo";
         </script>
        <?php
    }
    else{
        ?>
         <script>
         alert("Failed!");
         </script>
        <?php
    }
 }
}
?>
