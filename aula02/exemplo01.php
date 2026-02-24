<?php
 $a = 10;
 $b = 5;
 $soma = $a + $b;
 echo "A soma é: $soma"; // Saida: A soma é 15

 echo "<hr>";

 //ESTRUTURAS CONDICIONAIS
 //IF

 if ($b > $a) {
    echo "B É MAIOR QUE A";
 } else {
    echo "B NÃO É MAIOR QUE A";
 }

 echo "<hr>";

$n1 = 4;
$n2 = 5;
$n3 = 6;

$media = ($n1 + $n2 + $n3) / 3;

echo "SUA MÉDIA É: $media : ";

if ($media > 5) {
    echo "APROVADO";
} else { 
    if ($media < 4) {
    echo "REPROVADO";
    } else {
        echo "RECUPERAÇÃO";
    }
}
 
 echo "<hr>";


 $dia = 10;

 switch ($dia) { 
    case '1':
    echo "DOMINGO";
         break;
    case '2':
        echo "SEGUNDA";
             break;
    case '3':
        echo "TERÇA";
            break;
    case '4':
        echo "QUARTA";
            break;
    case '5':
        echo "QUINTA";
            break;
    case '6':
        echo "SEXTA";
            break;
    case '7':
        echo "SABADO";
            break;
    
    default:
        echo "NÚMERO INVÁLIDO";
        break;
 }
    echo"<hr";

    for ($i=1; $i <=10 ; $i++) { 
        echo "$i - ";
    }
      while ($a <= 10) {
        echo "$i - ";

    }  

    echo "<hr>";

    $a = 1;
    while ($a <=10){
        echo "$a - ";
        $a++;
    }

    echo "<hr>";

    $x = 1;
    do {
        echo "$x -";

    } while ($x <= 10);

    echo "<hr>";

    $nomes = ['FULANO DE TAL', 'BELTRANO','CICLANO'];
    //echo $nomes; // :-(

    $qtde = count($nomes);

    echo $nomes[0];
    echo "<hr>";
    echo $nomes[1];
    echo "<hr>";
    echo $nomes[2];
    echo "<hr>";


     //for ($n=0; $n <= $qntde-1 ; $n++) { 
     //   echo $nomes[$n] . "<br>";
    //}

    foreach ($nomes as $nome) {
        echo "$nome <br>";
    }

?>