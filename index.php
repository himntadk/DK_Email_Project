<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register/LogIn</title>
    <?php include 'CSS/new2.php';?>
    <style>
    img{
        width: 50px;
        height: 50px;
        border-radius: 50px;
        margin-right: 20px;
    }
    </style>
</head>
<body>
<div class="login-wrap">
	<div class="login-html">
        <img src="1585672059043.jpg">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign In</label>
        <div class="login-form">
        <form method="POST">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name="email1" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="pass1" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" name="login" class="button" value="Log In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="password_reset.php">Forgot Password?</a>
                    <p><a href="others.php" target="_blank">Want to try other?</a></p>
            
				</div>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" name="user" class="input">
				</div>
                <div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="email" name="email" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="pass" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" name="rpass" class="input" id="rpas" data-type="password">
				</div>
				<div class="group">
					<input type="submit" name="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
            </form>
		</div>
	</div>
</div>
</body>
</html>
<?php
include 'connectionuju.php';
if(isset($_POST['submit'])){
 $user= $_POST['user'];
 $email = $_POST['email'];
 $pass = $_POST['pass'];
 $rpass= $_POST['rpass'];

 $npass= password_hash($pass, PASSWORD_BCRYPT);

 $select = "SELECT * FROM admin_reg WHERE Email= '$email' ";
 $query = mysqli_query($con,$select);
 $num_email= mysqli_num_rows($query);
 if($num_email == 0){
   if($pass === $rpass){
       $insert = "INSERT INTO admin_reg (User, Email, Password) VALUES('$user','$email','$npass')";
       $insert_query = mysqli_query($con,$insert);
       if($insert_query){
           ?>
           <script>
           alert("Welcome, your data has been added!");
           </script>
           <?php
       }
       else{
        ?>
        <script>
        alert("Error, Try again!");
        </script>
        <?php
       }
   }
   else{
    ?>
    <script>
    document.getElementById('rpas').style.color= "red";
    </script>
    <?php
   }
 }
 else{
    ?>
    <script>
    alert("Existing User!");
    </script>
    <?php  
 }
}
if(isset($_POST['login'])){
    $email1 = $_POST['email1'];
    $pass1 = $_POST['pass1'];
    
    $select1 = "SELECT * FROM admin_reg WHERE Email= '$email1' ";
    $query1 = mysqli_query($con,$select1);
    $num_email1= mysqli_num_rows($query1);

    if($num_email1 > 0){
        $res= mysqli_fetch_assoc($query1);
        $dBpass= $res['Password'];
        $_SESSION['user']= $res['User'];
        $pass_decode = password_verify($pass1,$dBpass);

        if($pass_decode){
            ?>
            <script>
            alert("LogIn Successful!");
            location.replace('Admin/get_started.php');
            </script>
            <?php
        }
        else{
            ?>
            <script>
            alert("LogIn Unsuccessful!");
            </script>
            <?php
        }
    }
}
?>