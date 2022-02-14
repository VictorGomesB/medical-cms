<?php
    
    require_once("includes/config.php");
    
    $id = $_POST["id"];
    $resposta = "";
    $unidades = array();
    $sql = "SELECT unidade FROM `exame_unidade` WHERE exame = $id";

    
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        
        
        foreach($result as $row){
        
        array_push($unidades,$row["unidade"]);
        
        }
        
        $resposta = implode(" ", $unidades);
       
        
    } else {
        $resposta = false;
        
    }
    
    echo $resposta;
    $con->close();
   
    
?>