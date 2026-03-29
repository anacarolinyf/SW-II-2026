<?php

 //FUNÇÃO SEM PARÂMETROS E SEM RETORNO

 function resto($x){
    $resto= $x % 2;
    return $resto;

 }


   $n1 = 8;
   $n2 = 7;


   $resultado= resto($n1);
    
   if ($resultado == 0) {
    echo "PAR";
   }else{
    echo "IMPAR";
   }
    



?>