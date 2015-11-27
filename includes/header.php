<?php
 echo '
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Bruno Cordeiro">
    <meta name="description" content="Projeto PHP Foundation 01 - Site Simples em PHP">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Site Simples em PHP | Code School</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <a class="navbar-brand" href="#">Site Simples em PHP | Code School</a>
        </div>
        <div class="collapse navbar-collapse" id="b-menu-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../nav.php?page=home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="../nav.php?page=empresa"><span class="glyphicon glyphicon-briefcase"></span> Empresa</a></li>
                <li><a href="../nav.php?page=produtos"><span class="glyphicon glyphicon-folder-close"></span> Produtos</a></li>
                <li><a href="../nav.php?page=servicos"><span class="glyphicon glyphicon-bullhorn"></span> Serviços</a> </li>
                <li><a href="../nav.php?page=contato"><span class="glyphicon glyphicon-comment"></span> Contato</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>
     ' ; ?>