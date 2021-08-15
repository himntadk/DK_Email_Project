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
    .head{
        background: rgb(7, 109, 104);
    }
    .hr{
        height: 2px;
        margin: 60px 0 50px 0;
        background: rgba(255, 255, 255, .2);
    }
    .foot{
         background:rgb(220, 228, 227);
         padding-top:10px;
         padding-bottom:10px;
    }
    .mail-start{
        padding-bottom: 25px; 
    }
    img{
        width: 50px;
        height: 50px;
        border-radius: 50px;
    }
    .mail-head{
        margin-left: 30px;
        margin-top: 5px;
    }
    .sender-name{
        font-size: 1.4em;
        font-weight:bold;
        color: rgb(28, 90, 223);
        margin-left: 10px;
    }
    .info-tag{
        margin-left: 70px;
    }
    #info{
        display: none;
        border: 1px solid #e1e6ef;
        width: 600px;
        padding: 10px;
    }
    .mail-body{
        border-top: 1px solid #e1e6ef;
        padding-right: 80%;
        padding-top: 20px;
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
        <a href="compose_email.php" class="btn btn-danger btn-block"><i class="icon-plus"></i> Compose</a>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="get_started.php"><i class="fa fa-inbox"></i> Get Started</a>
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
               <a href="client.php"> <button type="button" class="btn btn-light">
                    <span class="fa fa-bookmark-o"></span>
                </button></a>
            </div>
            <div class="btn-group">
                <a href="sent.php"><button type="button" class="btn btn-light">
                    <span class="fa fa-mail-reply"></span>
                </button></a>
                <button type="button" class="btn btn-light">
                    <span class="fa fa-mail-reply-all"></span>
                </button>
                <a href="get_started.php"><button type="button" class="btn btn-light">
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
        <div class="head">
        <h1 style="color:#f1f1f1;margin:0;padding:28px 24px;display:block;font-family:Arial;font-size:30px;font-weight:bold;text-align:center;box-shadow:0 10px 15px rgba(0,0,0,0.5);line-height:150%" id="m_-8490017480309223375m_-2253499294572975321logo">
		<a style="color:#f1f1f1;text-decoration:none,text-shadow:0 10px 15px rgba(0,0,0,0.5)" href="https://chdifac.r.bh.d.sendibt3.com/tr/cl/tq5sfN0RceqoYDZIkh6RMJKQ8Vohcgz0GauyMJOwvkenI18Brz1r7Eg06SI3PRYgqMjL6NcwiBXjME9csuvf4BSWff6y_Ve_MAV2BbhiEqnv_dJ6jECgL4X4f6aKwlM8P2_T0LznuN-O21tf_q1ofHZzqI522FGrg5PcAptg_cEYaPMRYvVzjpFw2zyA1vsi" title="Ujudebug" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://chdifac.r.bh.d.sendibt3.com/tr/cl/tq5sfN0RceqoYDZIkh6RMJKQ8Vohcgz0GauyMJOwvkenI18Brz1r7Eg06SI3PRYgqMjL6NcwiBXjME9csuvf4BSWff6y_Ve_MAV2BbhiEqnv_dJ6jECgL4X4f6aKwlM8P2_T0LznuN-O21tf_q1ofHZzqI522FGrg5PcAptg_cEYaPMRYvVzjpFw2zyA1vsi&amp;source=gmail&amp;ust=1624251009523000&amp;usg=AFQjCNFTLwPKDY7TRA86TynTcVF2GK6D_w"><img style="max-width:100%" src="https://ci5.googleusercontent.com/proxy/d1LtYi_2lWVzMIt_4yuD7JzGgBBY6ue5NJmgT3YRu3a422cUsDiQj0cK7lvcOfpokfv5snCoKahTHVs-N1HZeyYWpUSds0cKV_LhQV9ve4ZzfP6ufmggrZ5vj3xQniUemB9zuAr75nfR_dQgKsiJq7FRNzNWsmSiu3lkyZIhOskYcTCgl9eFPkWZKCsX6ESO2p2xClYF4Q4wkoEu8eApurqsK_JiDyu2n27jmeHzQz1co1ZnAoLuhBm0twwbnnLucTULfyDE01b-k8mDn2-KJU9ARIuFn28aZv-jQSwBsLy7ShMkJrccc-R1dpjGwfq7-oUg-ZcMuJ088TcWZWWHG8H7drH7NExFHV9EJQ1XWRQ-Uva9UwlYPfXfkxf-5v611vp9Ckm8P2hAaciBEgrN5m_kSgPWLl4Wk7e40t29lPdAo3j41f6lVt2MT7XnnCLCAy6wFpLLrC2BajgWuZPzulsEd6GyIiyWIeITV1zA4Q7GX2W9BC5cuWbJhqdbFFK_0uKncOZGHqLZ1VhLyF4_uA=s0-d-e1-ft#https://4mz82.img.bh.d.sendibt3.com/im/2738502/6de7311cc746ce62d11a098f6fbbba57329d300a2b09530744a21e6ff6d4007d.png?e=jNtBwqmWaYV8KQm6fTmNW4BQ-vWBl3ulKtgasaUPdB0SOPOKKKEahxTYaWvyzRq2jPR4ZopIdtvaLBNL2iE0evdO5z1zdD3kF9_3ALcKc1L24BkWY3pqnTYCd7qelDJi_CnWjyvlQu5_YpJq_-uZd3iWVXA0hEDFvuFeYV05qs7yIlRa85FozknUTgth6_97VsdCUf7AsCLbMy_od_RV1H8R8TFX3wmRZL00Ymi5zqTVK6gqdSthDsDNlRqy8QDs1-8d6g" alt="Ujudebug" class="CToWUd"></a>
	    </h1>
        </div>
        <div class="hr"></div>
        <?php
                include '../connectionuju.php';
                $id= $_GET['id'];
                $select= "SELECT * FROM mail_store WHERE Id= '$id' ";
                $query= mysqli_query($con,$select);
                $res = mysqli_fetch_array($query);
                $time = date("g:iA",strtotime($res['Time']));
        ?>
        <div class="message-body">
                 <div class="mail-start">
                 <img src="1585672059043.jpg">
                <span class="sender-name">
                 <?php echo $res['Subject'];?>
                </span>
                <div class="info-tag">
                to me
                <button type="button" class="btn btn-light" id="up" onClick="check_info()">
                    <span class="fa fa-angle-down"></span>
                </button>
                </div> 
                <div id="info">
                 <p>From &nbsp; <?php echo $res['Sender'];?></p>
                 <p>To &emsp;&nbsp;&nbsp; <?php echo $res['Receiver'];?></p>
                 <p>Date &nbsp;&nbsp; <?php echo $time;?>,&nbsp; <?php echo $res['Curr_Day'];?></p>
                 </div>
                </div>
                <div>
                 <p>
                 <?php echo $res['Mail'];?>
                 </p>
                 <div class="attachment">
                 <p><a href="makeviewpdf1.php?id=<?php echo $res['Id'];?>"><?php echo $res['Pdf'];?></a></p>
                 <p><a href="makeviewimage1.php?id=<?php echo $res['Id'];?>"><?php echo $res['Image'];?></a>
                 <?php
                 if(!empty($res['Image'])){
                     ?>
                 <a href="downloadimage.php?file=<?php echo $res['Image'];?>">Download</a>
                 <?php
                 }
                 ?>
                 </p>
                 </div>
                 </div>
                </div>
                <div class="foot">
          <p valign="middle" id="m_-8490017480309223375m_-2253499294572975321credit" style="border:0;color:#565656;font-family:Arial;font-size:12px;line-height:125%;text-align:center">
          ©2020 UJUDEBUG - All Rights Reserved    
          </p>
        </div>
    </main>
</div>
</div> 
<script>
function check_info(){
  var x= document.getElementById('info');
  if(x.style.display === 'none'){
  x.style.display = 'block';
  document.getElementById('up').innerHTML = '<span class="fa fa-angle-up"></span>';
  }
  else{
  x.style.display = 'none';
  document.getElementById('up').innerHTML = '<span class="fa fa-angle-down"></span>';
  }
}
</script>
</body>
</html>
