<?php

function fatorial($num){

    $fat = 1;

    for($i = 1; $i <= $num; $i++){
        $fat = $fat * $i;
    }

    return $fat;
}

echo fatorial(5);

?>