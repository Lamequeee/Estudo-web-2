<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade pratica 2</title>
</head>
<body>
     <?php 
    $num = 8;
    echo "Numero escolhido foi ".$num. "<br>";
    if($impar_par = $num % 2 == 0){
        echo "Ele é um numero PAR";
    }else{
        echo "ele é um numero IMPAR";
    }

    echo "<hr>";

    $idade = 12;

    echo "A idade escolhida foi ".$idade."<br>";
    if($idade>=18){
        echo "Essa pessoa é MAIOR de idade";
    }else{
        echo "Essa pessoa é MENOR de idade";
    }

    echo "<hr>";

    $nota = 6;
    $falta = 16;

    echo "Sua nota é ". $nota . "<br>";
    echo "Sua quantidade de faltas é ". $falta . "<br>";
    
    if($nota>=6 && $falta<=15){
        echo "Aprovado!";
    }else{
        echo "Reprovado!";
    }
    ?>
</body>
</html>