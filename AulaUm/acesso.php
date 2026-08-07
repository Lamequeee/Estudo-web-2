 <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
    //    echo("<p>Texto recebido a partir do envio do formulario: ". $nome ."</p>");  
      //  echo("<p>Email: ". $email . "</p>");       
        
    $arquivo="usuario.txt";
    $dados=file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $email_cad = $dados[0];
    $nome_cad = $dados[1];

        if($nome == "Gustavo" & $email == "aa@gmail.com"){
            echo("<p>Logado!</p>");
        }else{
            echo("<p> Acesso negado! </p>");
        }

        echo("<a href='index.php'>Voltar</a>");
    ?>