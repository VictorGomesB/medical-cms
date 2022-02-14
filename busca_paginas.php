<?php
    
    require_once("includes/config.php");
    
    $busca = $_POST["busca"];
    $resposta = "";
    $data = "";
    
    $sql = "SELECT * FROM `pagina` WHERE titulo LIKE '%$busca%' ORDER BY id DESC;";
    
    
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $data = date_format(date_create($row[data]),"d/m/Y");
        $resposta = $resposta."<tr><td>" . $row["id"]."</td><td>" . $row["titulo"] . "</td><td>" . $row["categoria"] . "</td><td>" . $data  . "</td><td><button name='pagina' class='btn_edit' value='" . $row["id"] . "'></button><button name='pagina' class='btn_delete' value='" . $row["id"] . "'></button></td></tr>";
        }
        
    } else {
        $resposta = "<tr><td> - </td><td> - </td><td> -  </td><td> -  </td></tr> -  </td></tr> -  </td></tr> -  </td></tr>";
    }
    
    echo $resposta;
    
    $con->close();
   
    
?>