<?php

$nome = $_POST['nome'];
 $email = $_POST['email'];

    $dados = [$nome, $email];
    $arquivo = "usuario.txt";

    $conteudo = implode(PHP_EOL, $dados);


 file_put_contents("dados", $nome, $email);


 echo("<a href='index.php'>Voltar</a>");
 ?>