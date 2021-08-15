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
    .checked{
        background: rgb(195, 197, 199);
        text-decoration: underline;
    }
    .starcol{
        color: black;
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
            <li class="nav-item">
                <a class="nav-link" href="get_started.php"><i class="fa fa-inbox"></i> Get Started </a>
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
                <a class="nav-link checked" href="#"><i class="fa fa-file-text-o"></i> Draft</a>
            </li>
        </ul>
    </nav>
    <main class="inbox">
        <div class="toolbar">
            <div class="btn-group">
            <a href="sent.php"><button type="button" class="btn btn-light">
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
        <ul class="messages">
        <span id="edit">
        
        </span>
        <?php
        include '../connectionuju.php';
        $select = "SELECT * FROM draft";
        $query= mysqli_query($con,$select);
        while($res= mysqli_fetch_array($query)){
        ?>
            <li class="message unread">
                <a href="#">
                    <div class="actions">
                     <a href="draft_edit.php?id=<?php echo $res['Id'];?>" data-toggle="tooltip" data-placement="bottom" title="Edit Mail">  <span class="action col"><i class="fa fa-square-o"></i></span></a>
                    </div>
                    <div class="header">
                        <span class="from"><?php echo $res['Sender'];?></span>
                        <span class="date">
                        <span class="fa fa-paper-clip"></span></span>
                    </div>
                    <div class="title">
                        <?php echo $res['Subject'];?>
                    </div>
                    <div class="description">
                    <?php echo $res['Mail'];?>
                    </div>
                </a>
            </li>
            <?php
        }
            ?>
            </ul>
    </main>
</div>
</div> 
<script>

</script>
</body>
</html>