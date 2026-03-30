<?php

function gera_numero(){

    $numeros = [];

    for($i = 0; $i < 10; $i++){
        $numeros[] = rand(1,50);
    }

    return $numeros;
}

$resultado = gera_numero();

foreach($resultado as $num){
    echo $num . "<br>";
}

?>