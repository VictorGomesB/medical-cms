<?php
    
    require_once("includes/config.php");
    
    $resposta = "";
    
    $sql = "SELECT * FROM `convenio` ORDER BY nome ASC";
    
    
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $resposta = $resposta."<tr><td>" . $row["id"]."</td><td>" . $row["nome"] . "</td><td>" . $row["data"] . "</td><td><button name='convenio' class='btn_edit' value='" . $row["id"] . "'></button><button name='convenio' class='btn_delete' value='" . $row["id"] . "'></button></td></tr>";
        }
        
    } else {
        $resposta = "<tr><td> - </td><td> - </td><td> -  </td></tr>";
    }
    
    echo $resposta;
    
    $con->close();
   
    
?>