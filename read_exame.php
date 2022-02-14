<?php
    
    require_once("includes/config.php");
    
    $exame = $_POST["exame"];
    $resposta = "";
    
    $sql = "SELECT * FROM `exame` WHERE id = $exame";

    
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $resposta = $row["id"] . "|*|" . $row["nome"] . "|*|" . $row["agendamento"] . "|*|" . $row["resultado"] . "|*|" . $row["preparo"];
        }
        
    } else {
        $resposta = "false";
    }
    
    $con->close();
    echo $resposta;
    
    
   
    
?>