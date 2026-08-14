<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <?php 
    $nome = "Ana Souza";
    $idade = "20";
    $nota = 8.5;
    $aprovado = true;

    echo "Nome: $nome<br>";
    echo "Idade: $idade anos<br>";
    echo "Nota: $nota<br>";


    //Descobrindo o tipo de cada uma

    echo "<hr>";
    echo "nome é ". gettype($nome) . "<br>";
    echo "idade é " .gettype($idade) . "<br>";
    echo "Nota é " . gettype($nota) . "<br>";
    echo "Aprovado é " . gettype($aprovado) . "<br>";

    echo "<hr>";
    
    //Aspas simples ou duplas? Faz diferença!

    echo 'Aspas simples: $nome'."<br>"; //mostra literalmente $nome
    echo "Aspas duplas: $nome <br>"; //mostra Ana Souza
    echo "Concatenando: " . $nome ."<br>"; //O ponto junta texto
    ?>
</body>
</html>