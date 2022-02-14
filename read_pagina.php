<?php
    
    require_once("includes/config.php");
    
    $pagina = $_POST["pagina"];
    $resposta = "";
    
    $sql = "SELECT * FROM `pagina` WHERE id = $pagina";

    
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $resposta = $row["id"] . "|*|" . $row["titulo"] . "|*|" . $row["subtitulo"] . "|*|" . $row["categoria"] . "|*|" . $row["data"]. "|*|" . $row["conteudo"]. "|*|" . $row["medicos"]. "|*|" . $row["pacientes"];
        }
        
    } else {
        $resposta = "false";
    }
    
    $con->close();
    echo $resposta;
    
    
   
    
?>