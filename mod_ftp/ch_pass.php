<?php
/**
 * Created by PhpStorm.
 * User: Firdavs Murodov
 * Date: 4/20/15
 * Time: 9:07 AM
 */
require_once '../auth.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="ftp change password">
    <meta name="author" content="Firdavs Murodov">
    <link rel="icon" href="../favicon.ico">
    <title>FTP admin | change password</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Dashboard</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?ftp-list">List users</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">manage <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="add_user.php">add user</a></li>
                            <li><a href="del_user.php">dell user</a></li>
                            <li><a href="ch_pass.php">change password</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../">exit</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <div class="jumbotron">
        <p>Change password</p>
        <?
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user=$_POST['inputName'];
            $pass=$_POST['inputNewPassword'];
            exec("sudo ./ftp-pw.sh chpass $user $pass");
        }
        ?>
        <form  method="POST" action="<?=$_SERVER['PHP_SELF']?>">
            <input type="name" name="inputName" class="form-control" placeholder="Username" required autofocus>
            <input type="password" name="inputNewPassword" class="form-control" placeholder="New Password" required>
            <div class="checkbox">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Change password</button>
        </form>
    </div>
</div> <!-- /contain        er -->
<!-- Bootstrap core JavaScript
================    ================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
