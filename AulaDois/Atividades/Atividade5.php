<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade pratica 5</title>
</head>
<body>
    <?php 
    function dobro($n){
       return $n*2;
    }

    //mostra o dobro do valor
    echo dobro(2);

    echo "<hr>";

    function ehpar($par) {
    if ($par % 2 == 0) return true;
    if ($par % 2 == 1) return false;
    }

    echo "é par? " . ehpar(6);

    echo "<hr>";

    function media($a, $b, $c){
        return ($a+$b+$c)/3;
    }


    echo media(2, 7, 9);

    echo "<hr>";

    function situacao($nota){
        if($nota>=6) return "Aprovado"; 
        if($nota()<6) return "Reprovado";
    }

    echo situacao(media(8, 6, 9));

    ?>
</body>
</html>