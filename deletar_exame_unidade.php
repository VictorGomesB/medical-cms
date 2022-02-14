<?php
    
    require_once("includes/config.php");
    
    $exame = $_POST["exame"];
    $unidades = explode(" ", $_POST["unidades"]);
    
    foreach($unidades as $unidade){
         
        $sql = "DELETE FROM exame_unidade WHERE exame='$exame' AND unidade='$unidade'";

        $result = $con->query($sql);
        
    }
    
    echo "true"
    
?>