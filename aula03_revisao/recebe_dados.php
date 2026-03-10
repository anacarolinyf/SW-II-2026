<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recebe dados</title>
</head>
<body>
    <?php
        
        //$nome = $_POST['nome'];
        $nome = htmlspecialchars($_POST['nome']); //evitar virus
        $email = $_POST['email'];
        $idade = $_POST['idade'];


        $ano = 2026;

    ?>

<p>O nome é: <?php echo $nome; ?></p>
<p>O email é: <?php echo $email; ?></p>
<p>A idade é: <?php echo $idade; ?></p>

<p>Ahh então você nasceu em <?php  echo $ano - $idade;  ?></p>

<?php
if ($idade<18) {
    echo '<p style= "color: red"> VOCE É MENOR DE IDADE </p>';
}else {
    echo '<p style= "color: green"> VOCE É MAIOR DE IDADE </p>';
}

?>
    
</body>
</html>