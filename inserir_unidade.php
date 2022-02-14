<?php
    
    require_once("includes/config.php");
    
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    
    $sql = "INSERT INTO unidade (nome, endereço,telefone,email) VALUES ('$nome', '$endereco','$telefone','$email');";
    
    
   
    
    if ($con->query($sql) === true) {
        echo $nome;
    } else {
        echo false;
    }
    
    echo $resposta;
    
    $con->close();
   
    
?>