<?php
    
    require_once("includes/config.php");
    
    $nome = $_POST["nome"];
    $agendamento = $_POST["agendamento"];
    $resultado = $_POST["resultado"];
    $preparo = $_POST["preparo"];
    
    
    // Verifica se já existe algum exame cadastrado com esse nome
    
    $sql = "SELECT * FROM exame WHERE exame.nome='$nome';";
    $result = $con->query($sql);
        
        // Se existe não insere
        
        if ($result->num_rows > 0) {
            $con->close();
            echo "false";
        }else{
        
            // Insere exame
            
            $sql = "INSERT INTO exame (nome, agendamento,resultado,preparo) VALUES ('$nome', '$agendamento','$resultado','$preparo');";
       
            
            if ($con->query($sql) === true) {
            
                // Retorna o ID do registro inserido
               
                $id = $con->insert_id;
                echo $id;
                
                
                
                
        
        
            }
    }
    
   
    
?>