<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Interface</title>
    <?php include '../Links/links1.php'; ?>
    <?php include '../CSS/new1.php'; ?>
    <style>
td{
    font-family: sans-serif;
    font-weight: lighter;
}
.tab{
    margin: 20px;
}
.tab input{
    width: 320px;
    height: 40px;
    border-radius: 20px;
    outline: none;
    background:rgb(69, 71, 71);
    font-family: 'Bookman Old Style';
    color: floralwhite;
    padding: 10px;
}
.tab button{
  width: 150px;
  height: 40px;
  border-radius: 20px;
  border:none;
  outline: none;
  background:rgb(69, 71, 71);
  font-family:'Bookman Old Style';
  color: floralwhite;
  padding: 10px;
}
</style>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

   <div class="container bootdey">
<div class="email-app mb-4">
    <nav>
    <ul class="nav">
        <a href="compose_email.php" class="btn btn-danger btn-block"><i class="icon-plus"></i> Compose</a>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="inbox.php"><i class="fa fa-inbox"></i> Get Started</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="starred.php"><i class="fa fa-star"></i> Stared</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sent.php"><i class="fa fa-rocket"></i> Sent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="trash.php"><i class="fa fa-trash-o"></i> Trash</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="draft.php"><i class="fa fa-file-text-o"></i> Draft</a>
            </li>
            
        </ul>
    </nav>
    <main class="inbox">
        <div class="toolbar">
            <div class="btn-group">
                <a href="sent.php"><button type="button" class="btn btn-light">
                    <span class="fa fa-envelope"></span>
                </button></a>
               <a href="starred.php"> <button type="button" class="btn btn-light">
                    <span class="fa fa-star"></span>
                </button></a>
                <button type="button" class="btn btn-light">
                    <span class="fa fa-star-o"></span>
                </button>
                <button type="button" class="btn btn-light">
                    <span class="fa fa-bookmark-o"></span>
                </button>
            </div>
            <div class="btn-group">
                <a href="compose_email.php"><button type="button" class="btn btn-light">
                    <span class="fa fa-mail-reply"></span>
                </button></a>
                <button type="button" class="btn btn-light">
                    <span class="fa fa-mail-reply-all"></span>
                </button>
                <a href="compose_email.php"><button type="button" class="btn btn-light">
                    <span class="fa fa-mail-forward"></span>
                </button></a>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                    <span class="fa fa-tags"></span>
                    <span class="caret"></span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">add label <span class="badge badge-danger"> Home</span></a>
                    <a class="dropdown-item" href="#">add label <span class="badge badge-info"> Job</span></a>
                    <a class="dropdown-item" href="#">add label <span class="badge badge-success"> Clients</span></a>
                    <a class="dropdown-item" href="#">add label <span class="badge badge-warning"> News</span></a>
                </div>
            </div>
            <div class="btn-group float-right">
            </div>
        </div>

        <div class="tab">
<form method="POST" id="myform">
<input type="text" name="name" placeholder="Client Name">
<input type="email" name="email" placeholder="Email" required="">
<input type="text" name="phone" placeholder="Contact Number">
<input type="text" name="address" placeholder="Address">
<button id="add">Add Client</button>
</form>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col" >Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  <?php
   include '../connectionuju.php';

   $sel_client = " SELECT * FROM client ";
   $sel_query= mysqli_query($con,$sel_client);
   while($res= mysqli_fetch_array($sel_query)){
 ?>
    <tr>
    <th scope="row"><?php echo $res['Id'];?>
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="remove client" ><span class="action" onClick="delete_('<?php echo $res['Id'];?>')" id="col"><i class="fa fa-trash"></i></span></a> 
    </th>
    <td><?php echo $res['Name'];?></td>
    <td><?php echo $res['Email'];?></td>
    <td><?php echo $res['Phone'];?></td>
    <td><?php echo $res['Address'];?></td>
    </tr>
 <?php
   }
    ?>
  </tbody>
</table>
<div>
<span id="msg"> </span>
</div>
</div>
<div id="refresh">

</div>

    </main>
</div>
</div>
<script>
$(document).ready(function(){
  $('#add').click(function(e){
      e.preventDefault();
      $.ajax({
          method: 'post',
          url: 'insertdata.php',
          data: $('#myform').serialize(),
          dataType: 'text',

          success:function(data){
              console.log(data);
              $('#msg').html(data);
              setTimeout(() => {
                  location.reload();
              }, 20);
          }
      })
  })
});
function delete_(id){
 var id= id;
 $.ajax({
     type: 'post',
     url: 'deletedata.php',
     data: 'id='+id,
     dataType: '',
 }).done(function(result){
     console.log(result);
     $('#msg').html(result);
            setTimeout(() => {
            location.reload();
    }, 20);
 })
}
</script> 
</body>
</html>