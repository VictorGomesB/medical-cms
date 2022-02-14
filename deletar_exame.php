<?php
    
    require_once("includes/config.php");
    
    $exame = $_POST["exame"];
   
    
    $sql = "DELETE FROM exame_unidade WHERE exame='$exame'";
    
    
    
    
    
    if ($con->query($sql) !== TRUE) {
        
        echo "false";
    } 
    
    
    
    $sql = "DELETE FROM exame WHERE id='$exame'";
    
    
    $result = $con->query($sql);
    
    if ($con->query($sql) !== TRUE) {
        $con->close();
        echo "false";
    }else{
        $con->close();
        echo "Exame excluída com sucesso.";
    }
    
    
    
    
   
    
?>