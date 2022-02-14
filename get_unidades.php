<?php
    
    require_once("includes/config.php");
    
    $busca = $_POST["busca"];
    $resposta = "";
    
    $sql = "SELECT id,nome FROM `unidade`";
    
    
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        
        
        while($row = $result->fetch_assoc()) {
        
        $resposta = $resposta."<li><input type='checkbox' class='checkbox_unidade' value='" . $row["id"] . "'>" . $row["nome"]."</li>";
        
        }
       
        
    } else {
        $resposta = false;
        
    }
    
    echo $resposta;
    
    $con->close();
   
    
?>