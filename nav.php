<?php

    $page = $_GET['page'];

    switch($page){
        case home:
            require_once'index.php';
            break;
        case empresa:
            require_once'empresa.php';
            break;
        case contato:
            require_once'contato.php';
            break;
        case produtos:
            require_once'produtos.php';
            break;
        case servicos:
            require_once'servicos.php';
            break;
        default:
            require_once'404.php';
            break;

    }//fim switch

?>