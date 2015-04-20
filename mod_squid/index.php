<?php
/**
 * Created by PhpStorm.
 * User: Firdavs Murodov
 * Date: 4/20/15
 * Time: 9:12 AM
 */
require_once '../auth.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="squid admin">
    <meta name="author" content="Firdavs Murodov">
    <link rel="icon" href="../favicon.ico">
    <title>Squid admin</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="?block-list">List blocked</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">manage <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href='?squid-restart'>restart service</a></li>
                            <li><a href='?squid-reload'>reload service</a></li>
                            <li class="divider"></li>
                            <li><a href="add_block.php">add block</a></li>
                            <li><a href="del_block.php">del block</a></li>
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
        <div class="container">
        <?php
        // list blocked sites
        function block_list() {
            $blocked = file("deny.txt");
            foreach($blocked as $key => $value)
            {
                echo "$key)  $value <br />";
            }
        }
        // squid reload
        function squid_serv_reload(){
            $reload=exec("sudo ./squid_serv.sh reload");
            echo $reload;
        }
        // squid restart
        function squid_serv_restart(){
            $restart=exec("sudo ./squid_serv.sh restart");
            echo $restart;
        }
        if (isset($_GET['block-list'])) {
            block_list();
        }
        elseif (isset($_GET['squid-reload'])) {
            squid_serv_reload();
        }
        elseif (isset($_GET['squid-restart'])) {
            squid_serv_restart();
        }
        ?>
    </div>
</div> <!-- /container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
