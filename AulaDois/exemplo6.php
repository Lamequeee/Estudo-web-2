<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>
    <?php
    
    function saudacao($nome) {
        return "Olá, $nome!";
    }

    function conceito($nota) {
        if ($nota >= 9) return "A";     
        if ($nota >= 7) return "B";
        if ($nota >= 6) return "C";
        return "D";
    }

    echo saudacao("Ana") . "<br>";
    echo saudacao("Bruno") . "<br><hr>";
    echo "Nota 9.5 = conceito " . conceito(9.5) . "<br>";
    echo "Nota 7.0 = conceito " . conceito(7.0) . "<br>";
    echo "Nota 4.0 = conceito " . conceito(4.0) . "<br>";
    
    ?>
</body>
</html>