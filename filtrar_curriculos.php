<?php
    
    require_once("includes/config.php");
    
    $cargo = $_POST["cargo"];
    $inicio = $_POST["inicio"];
    $fim = $_POST["fim"];
    $resposta = "";
    $sql = "SELECT * FROM `curriculo` WHERE cargo LIKE '%$cargo%' AND data >= '$inicio' AND data <= '$fim'  ORDER BY id DESC;";

    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
                        
                        
                        $data = date_format(date_create($row[data]),"d/m/Y");
                        $resposta = $resposta."<tr><td>" . $row["id"]."</td><td>" . $row["nome"] . "</td><td>" . $row["telefones"] . "</td><td>" . $row["cargo"] . "</td><td>" . $data . "</td><td>" . "<a href='" . $row["curriculo"] . "' download>Download</a>" . "</td><td><button name='curriculo' class='btn_open' value='" . $row["id"] . "'></button><button name='curriculo' class='btn_delete' value='" . $row["id"] . "'></button></td></tr>";
            }
        
        
    } else {
        $resposta = "<tr><td> - </td><td> - </td><td> -  </td><td> -  </td></tr> -  </td></tr> -  </td></tr> -  </td></tr>";
        
    }
    
    echo $resposta;
    
    $con->close();
   
    
?>