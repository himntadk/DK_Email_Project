<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Others</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            padding:0;
            margin:0;
            top:0;
            bottom:0;
        }
        body{
            background: url(https://images.pexels.com/photos/1317943/pexels-photo-1317943.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500) no-repeat center;
            height:100vh;
        }
        .server{
            position:absolute;
            /* text-align:center; */
            margin-left:620px;
             margin-top:300px;
        }
        .server button{
            width : 250px;
            height: 40px;
            border-radius: 50px;
            margin-bottom:10px;
            border: 1px solid rgb(144, 223, 150);
            outline:none;
            background: transparent;
            font-size:20px;
        }
        .server button a{
            list-style-type: none;
        }
        .fa-google{
            color:white;
        }
        .fa-envelope{
            color:white;
        }
        .fa-yahoo{
            color:white;
        }
        .fa-users{
            color:white;
        }
        .fa {
            /* padding: 20px; */
            font-size: 20px;
            width: 20px;
            text-align: center;
            text-decoration: none;
            /* margin: 5px 2px; */
        }
        /* .gog{
            color:white;
        } */
        .gog:hover
        {
            background:rgb(202, 21, 8);
            color:white;
        }
        .yah:hover{
            background:rgb(78, 12, 116);
            color:white;
        }
        .plat:hover{
            background:rgb(3, 112, 57);
            color:white;
        }
    </style>
    
</head>
<body>
    <div class="server">
        <p><button class="gog"><a href="https://www.google.com/" target="_blank" class="fa fa-google"></a> Google</button></p>
        <p><button class="yah"><a href="https://mail.yahoo.com/" target="_blank" class="fa fa-yahoo"></a> Yahoo</button></p>
        <p><button class="gog"><a href="https://accounts.google.com/signin/v2/identifier?hl=en&continue=https%3A%2F%2Fmail.google.com%2Fmail&service=mail&ec=GAlAFw&flowName=GlifWebSignIn&flowEntry=AddSession" target="_blank" class="fa fa-envelope"></a> Gmail</button></p>
        <p><button class="plat"><a href="index.php" target="_blank" class="fa fa-users"></a> Platform</button></p>
    </div>
    <script>
        
    </script>
</body>
</html>