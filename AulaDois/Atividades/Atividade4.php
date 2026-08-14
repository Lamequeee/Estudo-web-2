<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade pratica 4</title>
</head>
<body>
    <?php 
    $nomes = ["Eric", "Felipe", "Guilherme", "Gustavo", "Joel"];

    foreach($nomes as $nomes){
        echo "$nomes<br>";
    }
    
    echo "<hr>";

    $voce = [
        "nome" => "Eric",
        "curso" => "ADS",
        "cidade" => "Gaspar",
        "idade" => "21"
    ];

    foreach($voce as $campo => $valor){
        echo "$campo: $valor<br>";
    }

    echo "<hr>";

    $notas = [4, 6, 7, 8, 2];
    $media = array_sum($notas)/count($notas);
    
        echo $media . "<br>";

    echo "<hr>";

    $num = [2, 3, 4];

    
        echo "Maior: ". max($num);
        echo "Menor: ". min($num);

    ?>
    

    
</body>
</html>