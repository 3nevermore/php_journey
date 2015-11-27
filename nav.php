<?php



//Verifica se a solicitação existe e devolve o resultado ao usuário
    if(!isset($_REQUEST['page'])){
        require_once 'index.php';
    }else{
        require_once ($_REQUEST['page'].".php");
    };



?>