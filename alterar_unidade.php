<?php
    
    require_once("includes/config.php");
    
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $endereco = $_POST["endereço"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    
    $sql = "UPDATE unidade SET nome='$nome', endereço='$endereco', telefone='$telefone', email='$email' WHERE id=$id";
   
    
    if ($con->query($sql) === TRUE) {
    $con->close();
    echo $nome . " alterado com sucesso.";
    } else {
    echo "Error updating record: " . $con->error;
    }
    
   
    
    
   
    
?>