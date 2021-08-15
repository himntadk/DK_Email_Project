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
    .container .input-box{
        position:relative;
    }
    .container .input-box input{
        width:100%;
        padding: 15px 0;
        letter-spacing: 1px;
        border:none;
        outline:none;
        font-size: 16px;
        border-bottom: 1px solid #e1e6ef;
        background: transparent;
    }
    .container .input-box label{
      position: absolute;
      top:0;
      bottom:0;
      left:0;
      letter-spacing:1px;
      font-size: 18px;
      padding: 13px 0;
      pointer-events: none;
      transition: 0.5s;  
    }
    .container .input-box input:focus ~ label,
    .container .input-box input:valid ~ label
    {
        top:-12px;
        left:0;
        font-size: 14px;
    }
    .container textarea{
        border: 1px solid #e1e6ef;
        height: 500px;
        width: 100%;
        margin-top: 20px;
        padding: 15px 0;
        border:none;
        outline: none;
        border-bottom: 1px solid #e1e6ef;
    }
    .high{
        height:10px;
    }
    .inline{
        float:left;
    }
    /* #height{
        display:none;
    } */
    #bg{
        display:none;
    }
    #emoji{
        display:none;
    }
    #f_col{
        display:none;
    }
    #font{
        display:none;
    }
    .show{
        display:block;
        }
    #pdf_{
        display: none;
    }
    #image_{
        display: none;
    }
    #user{
        display: none;
    }
    .bs-example{
        margin:20px;
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
                <a href="client.php">  <button type="button" class="btn btn-light">
                    <span class="fa fa-bookmark-o"></span>
                </button></a>
            </div>
            <div class="btn-group">
                <a href="get_started.php"><button type="button" class="btn btn-light">
                    <span class="fa fa-mail-reply"></span>
                </button></a>
                <button type="button" class="btn btn-light">
                    <span class="fa fa-mail-reply-all"></span>
                </button>
               <a href="sent.php"> <button type="button" class="btn btn-light">
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
        <div class="container">
        <form method="POST" enctype="multipart/form-data" id="myform">
        <div class="input-box">
        <input type="text" name="from" required="">
        <label>From</label>
        </div>
        <div class="input-box">
        <input type="text" name="to" id="tosend" required="">
        <label>To</label>
        </div>
        <p><span class="action" onClick="tableview()" id="showup"><i class="fa fa-angle-double-down" ></i></span> add more user</p>
    <div class="bs-example" id="user">
    <table class="table table-striped">
        <thead>
            <tr>
                <th><input type="checkbox" onClick="select_all()" value=" " id="select"> select all</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include '../connectionuju.php';
         $select_client= "SELECT * FROM client";
         $query_client= mysqli_query($con,$select_client);
         while($res= mysqli_fetch_array($query_client)){
            ?>
                 <tr>
                <td><input type="checkbox" class="box_check" id='<?php echo $res['Id'];?>' name="check_box"
                     value="<?php echo " ".$res['Email'];?>"></td>
                <td><?php echo $res['Email'];?></td>
            </tr> 
            <?php
         }
        ?>         
        </tbody>
        <button class="btn btn-success" style='padding-left:20px; padding-right:20px; font-family:Bookman Old Style' onClick="mail_add()">Add</button> 
    </table>
</div>
        <div class="input-box">
        <input type="text" name="sub" required="">
        <label>Subject</label>
        </div>
        <div class="high">

        </div>
        <textarea name="mail" id="mail" placeholder="Write Your Mail Here"></textarea>
        <div class="input-box">
        <input type="file" name ="pdf" id="pdf_" >
        </div>
        <div class="input-box">
        <input type="file" name ="image" id="image_" >
        </div>
        <div id="info">
        
        </div>
        <div id="edit">
        <a href="#" data-toggle="tooltip" data-placement="bottom" title="emoji"><button type="button" class="btn btn-light inline" onClick="my_emoji()">
                    <span class="fa fa-smile-o"></span>
                </button></a>
                <select id="emoji" class="btn btn-light inline" onClick="font_emoji()">
                <option value="👍">👍</option>
                <option value="👎">👎</option>
                <option value="✈️">✈️</option>
                <option value="🚗">🚗</option>
                <option value="📞">📞</option>
                <option value="▶️">▶️</option>
                <option value="◀️">◀️</option>
                <option value="⏫">⏫</option>
                <option value="⏬">⏬</option>
                <option value="🎂">🎂</option>
                <option value="⏱️">⏱️</option>
                <option value="🛠️">🛠️</option>
                <option value="😂">😂</option>
                <option value="🎵">🎵</option>
                <option value="🔇">🔇</option>
                <option value="❓">❓</option>
                </select>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="background"> <button type="button" class="btn btn-light inline" id="back_col" onClick="bk_col()">
                    <span class="fa fa-adjust"></span>
                </button></a>
                <select id="bg" class="btn btn-light inline" onClick="bk_rong()">
                <option value="black">black</option>
                <option value="white">white</option>
                <option value="aquamarine">aquamarine</option>
                <option value="darkgrey">darkgrey</option>
                <option value="yellowgreen">yellowgreen</option>
                <option value="rosybrown">rosybrown</option>
                </select>
      <a href="#" data-toggle="tooltip" data-placement="bottom" title="make draft"><button name="draft" class="btn btn-light inline">
                    <span class="fa fa-pencil-square-o"></span>
                </button></a>
        <a href="#" data-toggle="tooltip" data-placement="bottom" title="set to default"><button type="button" class="btn btn-light inline" onClick="reset()">
                    <span class="fa fa-undo"></span>
                </button></a>
        </div>
        <a href="#" data-toggle="tooltip" data-placement="bottom" title="send"><button name="sendmail" class="btn btn-light"> <span  class="fa fa-paper-plane"></span></button></a>
        <a href="#" data-toggle="tooltip" data-placement="bottom" title="add pdf"><button type="button" class="btn btn-light" onClick="showpdf()">
                    <span class="fa fa-file-pdf-o"></span>
                </button></a>
        <a href="#" data-toggle="tooltip" data-placement="bottom" title="add image"><button type="button" class="btn btn-light" onClick="showimg()">
                    <span class="fa fa-file-image-o"></span>
                </button></a>
             <button type="button" class="btn btn-light" id="up" onClick= "up_down()">
                    <span class="fa fa-angle-right"></span>
                </button>
        </div>
        </form>
        </div>
    </main>
</div>
</div> 
<script src="../ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('mail',{
    extraPlugins : 'colorbutton',
    //extraPlugins :'font'
});
function up_down(){
    var x = document.getElementById("edit");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById('up').innerHTML = '<span class="fa fa-angle-left"></span>';
  } else {
    x.style.display = "none";
    document.getElementById('up').innerHTML = '<span class="fa fa-angle-right"></span>';
  }
}
function reset(){
    document.getElementById('mail').textContent= ""; 
}
function select_all(){
    if($('#select').prop("checked")){
        $('input[type=checkbox]').each(function(){
          $('#'+this.id).prop('checked',true);
        });
    }
    else{
        $('input[type=checkbox]').each(function(){
          $('#'+this.id).prop('checked',false);
        });
    }
}
function getcheckedvalues(){
const box_check = document.querySelectorAll(`input[name="check_box"]:checked`);
let colors = [];
box_check.forEach((check) => {
    colors.push(check.value);
});
return colors;
}
function mail_add(){
   document.getElementById('tosend').value = getcheckedvalues();
}
function tableview(){
    var x = document.getElementById("user");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById('showup').innerHTML = '<span><i class="fa fa-angle-double-up"></i></span>';
  } else {
    x.style.display = "none";
    document.getElementById('showup').innerHTML = '<span><i class="fa fa-angle-double-down"></i></span>';
  } 
}

function my_emoji(){
    var x = document.getElementById("emoji");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function font_emoji(){
    var x = document.getElementById('emoji');
    var s = x.options[x.selectedIndex].value;
    console.log(s);
    document.getElementById('mail').textContent += s; 
} 
function bk_col(){
    var x = document.getElementById("bg");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function bk_rong(){
    var x = document.getElementById('bg');
    var s = x.options[x.selectedIndex].value;
    console.log(s);
    document.getElementById('back_col').style.color= s;
    document.getElementById('mail').style.backgroundColor = s;  
}
function showpdf(){
    var x = document.getElementById("pdf_");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function showimg(){
    var x = document.getElementById("image_");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>
</body>
</html>
<?php
include '../connectionuju.php';
$day= date("Y-m-d");
$time= date("H:i:s");
$pdf= "";
$image= "";
if(isset($_POST['draft'])){
    $from = $_POST['from'];
    $to= $_POST['to'];
    $sub = $_POST['sub'];
    $mail = $_POST['mail'];
    
    $insert_ = "INSERT INTO draft(Sender, Receiver, Subject, Mail, Pdf, Image) 
            VALUES('$from','$to','$sub','$mail','','')";
    $query_= mysqli_query($con,$insert_);
        if($query_){
            ?>
            <script>
            document.getElementById('info').innerHTML = "<p>Saved as draft!</p>";
            </script>
            <?php
        }
        else{
            ?>
            <script>
           alert("Not saved!");
            </script>
            <?php 
        }
}
if(isset($_POST['sendmail'])){
    $from = $_POST['from'];
    $to= $_POST['to'];
    $sub = $_POST['sub'];
    $mail = $_POST['mail'];
    
    $pdf = $_FILES['pdf']['name'];
    $pdf_type= $_FILES['pdf']['type'];
    $pdf_size= $_FILES['pdf']['size'];
    $pdf_temp_loc = $_FILES['pdf']['tmp_name'];
    $pdf_store = "PDF/".$pdf;

    move_uploaded_file($pdf_temp_loc,$pdf_store);

    $image = $_FILES['image']['name'];
    $image_type= $_FILES['image']['type'];
    $image_size= $_FILES['image']['size'];
    $image_temp_loc = $_FILES['image']['tmp_name'];
    $image_store = "IMAGE/".$image;

    move_uploaded_file($image_temp_loc,$image_store);


    if(!empty($mail)){
    $insert = "INSERT INTO mail_store (Sender, Receiver, Subject, Mail, Time, Curr_Day, Pdf, Image) 
              VALUES('$from','$to','$sub','$mail','$time','$day','$pdf','$image')";
    $query= mysqli_query($con,$insert);
    }

    // $to= implode(",",$to);
    // $cc = implode(",",$to);
    // $bcc = implode(",",$to);
    
$em_from = "From: dkvariables@gmail.com\r\n";
$em_from .= "MIME-Version: 1.0\r\n";
$em_from .= "Content-Type: text/html; charset-ISO-8859-1\r\n";
// $em_from .= "Cc: $cc\r\n";
// $em_from .= "Bcc: $bcc\r\n";

$message="<html>
           <body>
           <div style='margin: auto;padding: 20px;'>
       <div style='background: rgb(7, 109, 104);'>
        <h1 style='color:#f1f1f1;margin:0;padding:28px 24px;display:block;font-family:Arial;font-size:30px;font-weight:bold;text-align:center;box-shadow:0 10px 15px rgba(0,0,0,0.5);line-height:150%' id='m_-8490017480309223375m_-2253499294572975321logo'>
		<a style='color:#f1f1f1;text-decoration:none,text-shadow:0 10px 15px rgba(0,0,0,0.5)' href='https://chdifac.r.bh.d.sendibt3.com/tr/cl/tq5sfN0RceqoYDZIkh6RMJKQ8Vohcgz0GauyMJOwvkenI18Brz1r7Eg06SI3PRYgqMjL6NcwiBXjME9csuvf4BSWff6y_Ve_MAV2BbhiEqnv_dJ6jECgL4X4f6aKwlM8P2_T0LznuN-O21tf_q1ofHZzqI522FGrg5PcAptg_cEYaPMRYvVzjpFw2zyA1vsi' title='Ujudebug' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://chdifac.r.bh.d.sendibt3.com/tr/cl/tq5sfN0RceqoYDZIkh6RMJKQ8Vohcgz0GauyMJOwvkenI18Brz1r7Eg06SI3PRYgqMjL6NcwiBXjME9csuvf4BSWff6y_Ve_MAV2BbhiEqnv_dJ6jECgL4X4f6aKwlM8P2_T0LznuN-O21tf_q1ofHZzqI522FGrg5PcAptg_cEYaPMRYvVzjpFw2zyA1vsi&amp;source=gmail&amp;ust=1624251009523000&amp;usg=AFQjCNFTLwPKDY7TRA86TynTcVF2GK6D_w'><img style='max-width:100%' src='https://ci5.googleusercontent.com/proxy/d1LtYi_2lWVzMIt_4yuD7JzGgBBY6ue5NJmgT3YRu3a422cUsDiQj0cK7lvcOfpokfv5snCoKahTHVs-N1HZeyYWpUSds0cKV_LhQV9ve4ZzfP6ufmggrZ5vj3xQniUemB9zuAr75nfR_dQgKsiJq7FRNzNWsmSiu3lkyZIhOskYcTCgl9eFPkWZKCsX6ESO2p2xClYF4Q4wkoEu8eApurqsK_JiDyu2n27jmeHzQz1co1ZnAoLuhBm0twwbnnLucTULfyDE01b-k8mDn2-KJU9ARIuFn28aZv-jQSwBsLy7ShMkJrccc-R1dpjGwfq7-oUg-ZcMuJ088TcWZWWHG8H7drH7NExFHV9EJQ1XWRQ-Uva9UwlYPfXfkxf-5v611vp9Ckm8P2hAaciBEgrN5m_kSgPWLl4Wk7e40t29lPdAo3j41f6lVt2MT7XnnCLCAy6wFpLLrC2BajgWuZPzulsEd6GyIiyWIeITV1zA4Q7GX2W9BC5cuWbJhqdbFFK_0uKncOZGHqLZ1VhLyF4_uA=s0-d-e1-ft#https://4mz82.img.bh.d.sendibt3.com/im/2738502/6de7311cc746ce62d11a098f6fbbba57329d300a2b09530744a21e6ff6d4007d.png?e=jNtBwqmWaYV8KQm6fTmNW4BQ-vWBl3ulKtgasaUPdB0SOPOKKKEahxTYaWvyzRq2jPR4ZopIdtvaLBNL2iE0evdO5z1zdD3kF9_3ALcKc1L24BkWY3pqnTYCd7qelDJi_CnWjyvlQu5_YpJq_-uZd3iWVXA0hEDFvuFeYV05qs7yIlRa85FozknUTgth6_97VsdCUf7AsCLbMy_od_RV1H8R8TFX3wmRZL00Ymi5zqTVK6gqdSthDsDNlRqy8QDs1-8d6g' alt='Ujudebug' class='CToWUd'></a>
	    </h1>
        </div>
        <div style='margin-top:20px; padding:15px;'>
        $mail
        </div>
        <div>
        <a href='viewpdfuser.php?pdf=$pdf' targer='_blank'>
        <embed style='width:200px; height:150px;' src='PDF/$pdf' type='application/pdf'>
        </a>
        <p><a href='viewpdfuser.php?pdf=$pdf' targer='_blank' >$pdf</a></p>
        </div>
        <div>
        <a href='downloadimage.php?file=$image'>$image</a>
        </div>
        <div style='background:rgb(180, 234, 235);padding-top:10px;padding-bottom:10px;'>
          <p valign='middle' id='m_-8490017480309223375m_-2253499294572975321credit' style='border:0;color:#565656;font-family:Arial;font-size:12px;line-height:125%;text-align:center'>
          ©2020 UJUDEBUG - All Rights Reserved    
          </p>
        </div>
</div>
           </body>
          </html>";
          
          if(mail($to,$sub,$message,$em_from))
          echo "sent!";
          else
          echo "failure!";
}

?>