<?php
/**
 * Created by PhpStorm.
 * User: Firdavs Murodov
 * Date: 4/20/15
 * Time: 8:43 AM
 */
require_once 'auth.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Server Dashboard">
    <meta name="author" content="Firdavs Murodov">
    <link rel="icon" href="favicon.ico">
    <title>admin dash</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet"></head>
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
                <a class="navbar-brand" href="index.php">Dashboard</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">service <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href='mod_ftp/'>ftp admin</a></li>
                            <li><a href='mod_squid/'>proxy admin</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="?action=logOut">logout</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
<div class="container">
    <div class="starter-template">
        </div>
</div> <!-- /container -->
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
