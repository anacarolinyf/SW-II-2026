<?php

function somarArray($numeros){

    $soma = 0;

    foreach($numeros as $n){
        $soma += $n;
    }

    return $soma;
}

$valores = [5, 10, 15, 20];

$resultado = somarArray($valores);

echo "A soma é: $resultado";

?>