<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
    <h1>Eric</h1>
    <p>Esse é um paragrafo comum.</p>

    <?php
        date_default_timezone_set('America/Sao_Paulo');

        echo "<p>Este paragrafo foi feito pelo PHP!</p>";
        echo "<p>Hoje é ". date("d/m/y") . "</p>";
        echo "<p>Horario: ". date("H:i") . "</p>";

        echo "<p>Gaspar</p>";
    ?>

    <p>E aqui voltamos ao HTML</p>

</body>
</html>