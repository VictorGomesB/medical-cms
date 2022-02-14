<?php
    
    require_once("includes/config.php");
    
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $agendamento = $_POST["agendamento"];
    $resultado = $_POST["resultado"];
    $preparo = $_POST["preparo"];
    
    $sql = "UPDATE exame SET nome='$nome', agendamento='$agendamento', resultado='$resultado', preparo='$preparo' WHERE id=$id";
    
    if ($con->query($sql) === TRUE) {
    $con->close();
    echo $nome . " alterado com sucesso.";
    } else {
    echo "Error updating record: " . $con->error;
    }
    
   
    
    
   
    
?>