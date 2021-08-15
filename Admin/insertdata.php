<?php
include '../connectionuju.php';

$name= $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$select = "SELECT * FROM client WHERE Email='$email' ";
$sel_query= mysqli_query($con,$select);
$num = mysqli_num_rows($sel_query);

if($num==0){
    $insert = "INSERT INTO client (Name, Phone, Email, Address)
               VALUES('$name','$phone','$email','$address')";
    $query= mysqli_query($con,$insert);
    if($query)
    echo "1 client added!";
}
?>
<?php
?>