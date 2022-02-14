<?php
    
    require_once("includes/config.php");
    
    $unidade = $_POST["unidade"];
    $resposta = "";
    
    $sql = "SELECT * FROM `unidade` WHERE id = $unidade";

    
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $resposta = 
                                "
                                <div>
                                    <label>Nome da Unidade</label><br>
                                    <input  class='full_input' type='text' name='nome' id='edt_nome_unidade' placeholder='' value='". $row["nome"]."'>
                                </div>
                                <div>
                                    <label>Endereço</label><br>
                                    <input  class='full_input' type='text' name='endereço' id='edt_endereco_unidade' placeholder='' value='".$row["endereço"]."'>
                                </div>
                                <div>
                                    <label>Telefones</label><br>
                                    <input  class='full_input' type='text' name='telefone' id='edt_telefone_unidade' placeholder='' value='".$row["telefone"]."'>
                                </div>
                                <div>
                                    <label>Email</label><br>
                                    <input  class='full_input' type='text' name='email' id='edt_email_unidade' placeholder='' value='".$row["email"]."'>
                                </div>    
                               
                                    <input type='hidden' id='edt_id_unidade' name='id' value='".$row["id"]."'> 
                                
                                
                                ";
        }
        
    } else {
        $resposta = "<p>Erro</p>";
        
    }
    
    $con->close();
    echo $resposta;
    
    
   
    
?>