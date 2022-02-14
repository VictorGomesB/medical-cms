<?php
    
    require_once("includes/config.php");
    
    $exame = $_POST["exame"];
    $unidades = explode(" ", $_POST["unidades"]);
    
    foreach($unidades as $unidade){
         // Verifica se já existe algum exame cadastrado com esse nome
    
        $sql = "SELECT * FROM exame_unidade WHERE exame='$exame' AND unidade='$unidade';";
        
        
        
        $result = $con->query($sql);
       
        // Se não existe insere
        
        if ($result->num_rows === 0) {
            $sql = "INSERT INTO exame_unidade (exame, unidade) VALUES ('$exame', '$unidade');";
            $con->query($sql);
        }
        
        
    }
    
    echo "true";
    
?>