<?php
    
    require_once("includes/config.php");
    
  
    
    
    $sql = "SELECT * FROM `exame`;";
    $inserts = array();
    
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($row["unidades"] === "TODAS"){
                
                
                $exame = $row["id"];
                array_push($inserts,"INSERT INTO exame_unidade (exame, unidade) VALUES ('".$exame."', '1'); INSERT INTO exame_unidade (exame, unidade) VALUES ('".$exame."', '2'); INSERT INTO exame_unidade (exame, unidade) VALUES ('".$exame."', '3'); INSERT INTO exame_unidade (exame, unidade) VALUES ('".$exame."', '4'); INSERT INTO exame_unidade (exame, unidade) VALUES ('".$exame."', '5'); INSERT INTO exame_unidade (exame, unidade) VALUES ('".$exame."', '6'); INSERT INTO exame_unidade (exame, unidade) VALUES ('".$exame."', '7'); INSERT INTO exame_unidade (exame, unidade) VALUES ('".$exame."', '8'); INSERT INTO exame_unidade (exame, unidade) VALUES ('".$exame."', '9'); INSERT INTO exame_unidade (exame, unidade) VALUES ('".$exame."', '10');");
                
            
                
            }
        }
        
    }
    
    foreach($inserts as $sql){
        
        if($con->query($sql) !== true){
            echo "$con->error<br>";
        }
    }
    
    $con->close();
   
    
?>