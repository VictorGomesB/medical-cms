<?php
    
    require_once("includes/config.php");
    
    $email = $_POST["email"];
    $senha =  $_POST["senha"];
    
    $sql = "SELECT * FROM `usuario` WHERE usuario.email = '$email' AND usuario.senha = '$senha';";
    
    
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        echo "true";
    } else {
        echo "false";
    }
    $con->close();
   
    
?>