<?php
    
    require_once("includes/config.php");
    
    $unidade = $_POST["unidade"];
   
    
    $sql = "DELETE FROM exame_unidade WHERE unidade='$unidade'";
    
    
    
    
    
    if ($con->query($sql) !== TRUE) {
        
        echo "false";
    } 
    
    
    
    $sql = "DELETE FROM unidade WHERE id='$unidade'";
    
    
    $result = $con->query($sql);
    
    if ($con->query($sql) !== TRUE) {
        $con->close();
        echo "false";
    }else{
        $con->close();
        echo "Unidade excluída com sucesso.";
    }
    
    
    
    
   
    
?>