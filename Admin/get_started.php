<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: login.php');
    ?>
     <script>
     alert("You have to successfully log in at first!");
     </script>
    <?php
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Get Started</title>
    <?php include '../Links/links1.php'; ?>
    <?php include '../CSS/new1.php'; ?>
    <style>
    .checked{
        background: rgb(195, 197, 199);
        text-decoration: underline;
    }
    .whole{
        background: url(https://wallpaperaccess.com/full/1116905.jpg) no-repeat center;
        background-size: cover;
    }
    .image_content{
        background: url(https://media-exp1.licdn.com/dms/image/C510BAQF_j3A85fgj6A/company-logo_200_200/0/1585672059043?e=2159024400&v=beta&t=GhhL9AWunSGqDgJVpoqjfhShZzZ5QRd2bxxoTOysd9o) no-repeat center;
        width: 200px;
        height:200px;
        border-radius: 300px;
        margin: auto;
        margin-top: 50px;
        padding-top:20px;
    }
    .zeroth{
      text-align: center;
      margin-top: 60px;
      font-size: 1.6em;
      font-family: 'Times New Roman';
      color:rgba(190, 236, 215, 0.9);
    }
    span{
        font-family: 'Times New Roamn' ; 
    }
    .frst{
        text-align: center;
        font-size: 1.8em;
        font-family: 'Vivaldi' ;
        color:rgba(190, 236, 215, 0.9);
    }
    .secnd{
        text-align: center;
        font-size: 1.8em;
        font-family:'Vivaldi';
        color:rgba(213, 224, 222, 0.9);
        text-shadow: 1px 0 2px rgba(190, 236, 215, 0.9);
    }
    .thrd{
        text-align: center;
        font-size: 40px;
        font-family:'Vivaldi';
        font-weight: medium;
        color:rgba(226, 226, 250, 0.9);
        margin-bottom: 20px;
    }
    #pop-up a {
        position: relative;
        padding: 5px 20px;
        display:inline-block;
        margin-top: 20px;
        margin:10px;
        text-decoration:none;
        color: #fff;
        background: #111;
    }
    #log-pop #gap{
        margin-left:30px;
    }
    #log-pop #gap a {
        position: relative;
        padding: 5px 20px;
        display:inline-block;
        margin-top: 20px;
        margin:2px;
        text-decoration:none;
        color: #fff;
        background: #111;
    }
    #blur.effect{
        filter: blur(20px);
        pointer-events: none;
        user-select: none;
    }
    #blur.neweffect{
        filter: blur(10px);
        pointer-events: none;
        user-select: none;
    }
    #pop-up{
      position: fixed;
      top: 40%;
      left: 50%;
      transform: translate(-50%,-50%);
      width: 600px;
      box-shadow: 0 5px 30px rgba(0,0,0, 30);
      background: #fff;
      visibility: hidden;
      opacity: 0;
      transition: 0.8s;
    }
    #log-pop{
        position: fixed;
        top: 40%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 600px;
        box-shadow: 0 5px 30px rgba(0,0,0,30);
        background: #fff;
        visibility: hidden;
        opacity: 0;
        transition: 0.8s;
    }
    #log-pop.neweffect{
        top: 50%;
        visibility: visible;
        opacity: 1;
        transition: 0.5s;
    }
    #pop-up #pop_head{
        color: #111;
        font-size: 35px;
        text-align: center;
        font-weight: bolder;
    }
    #pop-up #pop_msg{
        margin: 4px;
        justify-content: center;
        align-items:center;
    }
    #log-pop #log-msg{
        font-size:20px;
        margin-left:30px;
    }
    #pop-up.effect{
      top: 50%;
      visibility: visible;
      opacity: 1;
      transition: 0.5s;
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

   <div class="container bootdey" id="blur">
<div class="email-app mb-4">
    <nav>
    <ul class="nav">
        <a href="compose_email.php" class="btn btn-danger btn-block"><i class="icon-plus"></i> Compose</a>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link checked" href="#"><i class="fa fa-inbox"></i> Get Started</a>
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
            <a href="sent.php"> <button type="button" class="btn btn-light">
                    <span class="fa fa-envelope"></span>
                </button></a>
                <a href="starred.php"><button type="button" class="btn btn-light">
                    <span class="fa fa-star"></span>
                </button></a>
                <button type="button" class="btn btn-light">
                    <span class="fa fa-star-o"></span>
                </button>
                <a href="client.php">  <button type="button" class="btn btn-light">
                    <span class="fa fa-bookmark-o"></span>
                </button></a>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-light">
                    <span class="fa fa-mail-reply"></span>
                </button>
                <button type="button" class="btn btn-light">
                    <span class="fa fa-mail-reply-all"></span>
                </button>
               <a href="sent.php"><button type="button" class="btn btn-light">
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
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="About"><button type="button" class="btn btn-light" onclick="toggle()">
                    <span class="fa fa-chevron-left"></span>
                </button></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Log Out"><button type="button" class="btn btn-light" onclick="logout()">
                    <span class="fa fa-chevron-right"></span>
                </button></a>
            </div>
        <div class="whole">
        <div>
        <a href="https://chdifac.r.bh.d.sendibt3.com/tr/cl/tq5sfN0RceqoYDZIkh6RMJKQ8Vohcgz0GauyMJOwvkenI18Brz1r7Eg06SI3PRYgqMjL6NcwiBXjME9csuvf4BSWff6y_Ve_MAV2BbhiEqnv_dJ6jECgL4X4f6aKwlM8P2_T0LznuN-O21tf_q1ofHZzqI522FGrg5PcAptg_cEYaPMRYvVzjpFw2zyA1vsi" title="Ujudebug" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://chdifac.r.bh.d.sendibt3.com/tr/cl/tq5sfN0RceqoYDZIkh6RMJKQ8Vohcgz0GauyMJOwvkenI18Brz1r7Eg06SI3PRYgqMjL6NcwiBXjME9csuvf4BSWff6y_Ve_MAV2BbhiEqnv_dJ6jECgL4X4f6aKwlM8P2_T0LznuN-O21tf_q1ofHZzqI522FGrg5PcAptg_cEYaPMRYvVzjpFw2zyA1vsi&amp;source=gmail&amp;ust=1624251009523000&amp;usg=AFQjCNFTLwPKDY7TRA86TynTcVF2GK6D_w"><div class="image_content">
        </div></a>
        <p class="zeroth">Welcome <?php echo $_SESSION['user'];?></p>
        <p class="frst"> <span>UJUDEBUG</span> provides you a platform to get connected through Mails</p>
        <p class="secnd">The Next Geneartion is Mail</p>
        <p class="thrd">The Pigeons of Twenty-First Century</p>
        </div>
    </main>
</div>
</div>

<div id="pop-up">
    <p id="pop_head">DkEmail</p>
    <p id="pop_msg">
     This is an application allows you to send personal, business and all kinds of multimedia mails to single or multiple recipients together in the advanced designed format. It provides a spectaculer view of the sent, starred, deleted and draft mails. Explore and feel the flexibility of the platform.  
    </p>
    <a href="#" onclick="toggle()">close</a>
</div>
<div id="log-pop">
    <p id="log-msg">
        Do you want to log out?
    </p>
    <p id="gap">
    <a href="logout.php">Yes</a>
    <a href="#" onclick="logout()">No</a>
    </p>
</div>
<script>
    // function out(){
    //    $('#but_log').click(function(e){
    //        e.preventDefault();
    //        $.ajax({
    //            method: 'post',
    //            url: 'logout.php',
            
    //        })
    //    })
    // }
    function toggle(){
        var blur = document.getElementById('blur');
        blur.classList.toggle('effect');
        var pop = document.getElementById('pop-up');
        pop.classList.toggle('effect');
    }
     function logout(){
        var blur1 = document.getElementById('blur');
        blur1.classList.toggle('neweffect');
        var pop1 = document.getElementById('log-pop');
        pop1.classList.toggle('neweffect');
     }  
     function out(){

     } 
</script>
</body>
</html>
