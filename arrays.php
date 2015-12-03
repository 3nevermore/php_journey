<?php

require_once 'includes/header.php' ;

require_once 'includes/content_outro.php' ;

echo '<h1>Trabalho com Arrays </h1>';

//Inicio da Operação
for($i=1; $i <= 100; $i++){
    $values[] = $i;
};

$numConf = explode(',', trim(trim($values)));

//filtro
$valoresPar = array();
$valoresImpar = array();

foreach($values as $value){
    if($value & 1){
        $valoresImpar[] = $value;
        $numConf = explode(',', trim(trim($value)));
        echo '<strong>Numero Impar </strong>';
        print_r($numConf);
        echo '<hr>';
    }else{
        $valoresPar[] = $value;
        $valoresPar[] = $value;
        $numConf = explode(',', trim(trim($value)));
        echo '<strong>Numero Par </strong>';
        print_r($numConf);
        echo '<hr>';
    };
};

require_once 'includes/footer.php' ;

