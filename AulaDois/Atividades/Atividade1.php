<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade pratica 1</title>
</head>
<body>
    <?php 
    $nome = "Eric";
    $idade = "20";
    $cidade = "Gaspar";

    echo "olá meu nome é ". $nome .", tenho ".$idade." anos e moro em ".$cidade. "<br>";

    $preco = 25.90;
    $quantidade = 3;
    echo "<br>";
    echo "O preço é " . $preco . " e sua quantidade é " . $quantidade . "<br>";
    
    echo "<p> Usando os valores acima para as seguintes operações: <br>";

    echo "Soma " .$preco+$quantidade . "<br>";
    echo "Subtração ". $preco-$quantidade . "<br>";
    echo "Multiplicação " . $preco*$quantidade . "<br>";
    echo "Divisao " . $preco/$quantidade . "<br>";
    echo "Resto da divisão " . $preco%$quantidade . "<br>";
    ?>
</body>
</html>