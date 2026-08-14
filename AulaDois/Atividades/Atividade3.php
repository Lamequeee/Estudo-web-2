<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade pratica 3</title>
</head>
<body>
    <?php 

    echo "Contador <br>";
    for($i = 1; $i<=20; $i++){
        echo "$i <br>";
    }

    echo "<hr>";

    $num = 5;
    echo "Tabuada do " . $num . "<br>";
    for($i = 1; $i<=10; $i++){
        echo "$num x $i = ". ($num*$i) . "<br>";
    }

    echo "Formas de mostrar somente os numeros pares de 1 ao 30 <br>";
    echo "Somando de 2 em 2: ";
    for($i = 2; $i<=30; $i+=2){
        echo "$i ";
    }
    echo "<br>"; 

    echo "Pegando apenas valores par: ";
    for($i = 1; $i<=30; $i++){
        if($par = $i % 2 == 0){
            echo "$i ";
        }
    }

    echo "<hr>";

    echo "Soma de 1 ao 100<br>";
    $soma = 0;
    for($i = 1; $i<=100; $i++){
        $soma += $i;
    }
    echo "soma total: ".$soma;

    ?>
</body>
</html>