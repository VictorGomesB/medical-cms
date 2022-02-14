<?php
    
    require_once("includes/config.php");
    
    $busca = $_POST["busca"];
    $resposta = "";
    
    $sql = "SELECT * FROM `unidade` WHERE unidade.nome LIKE '%$busca%'";
    
    
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $resposta = $resposta."<tr><td>" . $row["id"]."</td><td>" . $row["nome"] . "</td><td>" . $row["endereço"] . "</td><td><button name='unidade' class='btn_edit' value='" . $row["id"] . "'></button><button name='unidade' class='btn_delete' value='" . $row["id"] . "'></button></td></tr>";
        }
        
    } else {
        $resposta = "<tr><td> - </td><td> - </td><td> -  </td></tr>";
        
    }
    
    echo $resposta;
    
    $con->close();
   
    
?>