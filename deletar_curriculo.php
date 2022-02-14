<?php
    
    require_once("includes/config.php");
    
    $curriculo = $_POST["curriculo"];
    $arquivo = "";
    $sql = "";
    
    $sql = "SELECT * FROM `curriculo` WHERE id = $curriculo;";

    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $arquivo = $row["curriculo"];
    }else{
        $con->close();
        echo "Ocorreu um ao processar a operação por favor tente mais tarde.";
    }
    
    
    
    
    $sql = "DELETE FROM curriculo WHERE id='$curriculo'";
    
    
    $result = $con->query($sql);
    
    if ($con->query($sql) === TRUE) {
        $con->close();
        unlink($arquivo);
        echo "Curriculo deletado com sucesso.";
        
    }else{
        $con->close();
        echo "Ocorreu um ao processar a operação por favor tente mais tarde.";
    }
    
    
    
    
   
    
?>