<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IDS - Instituto de Diagnóstico de Sorocaba</title>
	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
	<link rel="manifest" href="/assets/images/site.webmanifest">
	<link rel="mask-icon" href="/assets/images/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2d89ef">
	<meta name="theme-color" content="#ffffff">
	<!-- boostrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	
	
	

	<!-- custom -->
	<link rel="stylesheet" href="assets/css/sistema.css">
</head>
<body>
	<!-- header -->
	
	<!-- !header -->

	

	<!-- changes webite -->
	
	<div class="container-full">
	    
	           <!-- Menu Lateral -->
			   <div class="container-20" id="menu_lateral">
			       <img src="assets/imgs/logo_RGB.jpg" alt="Logo IDS" id="logo">
			       <ul>
			           <li id="painel"><i class="fas fa-tachometer-alt"></i> Painel</li>
			           <li id="menu_exames"><i class="fas fa-file-alt"></i> Exames</li>
    			       <li id="menu_unidades"><i class="far fa-building"></i> Unidades </li>    
    			       <a href="https://www.ids.med.br"><li><i class="fas fa-sign-out-alt"></i> Sair</li></a>
			          
			           
			       </ul>
			       <div id="assinatura">
			           © IDS - Todos os direitos reservados. Criação e desenvolvimento <a href="http://www.assesim.com.br/novo/" target="_blank" title="Visitar Assesim">Assesim</a>
			        </div>
			   </div>
			   <!-- !Menu Lateral -->
			   
			   <!-- Painel -->
			   <div class="container-80" id="painel">
			       
			       
			       
    			   <!-- Exames -->
    			   <div class="block" id="exames">
    			       <div class="header_form">
    			           <h2 class="titulo"><i class="fas fa-file-alt"></i> Exames</h2>
    			           
    			           <i class="fas fa-search"></i><input id="busca_exame" placeholder="Buscar" type="text">
    			           <button id="btn_novo_exame"><i class="fas fa-plus-circle"></i> Novo</button>
    			           
    			       </div>
    			       <div class="wrap_resultado">
    			       <h3>Mostrando últimos 100 exames cadastrados.</h3>
    			       <table class="resultado" >
    			           <thead>
        			          <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Agendamento</th>
                                <th>Resultado</th>
                                <th>Opções</th>
                              </tr>
                          </thead>
                          <tbody id="resultado_exames">
                              
                          </tbody>
                        </table>
                        </div>
    			    </div>
    			   <!-- !Exames -->
    			   
    			   <!-- Unidades -->
    			   <div class="block" id="unidades">
    			       
    			       <div class="header_form">
    			           <h2 class="titulo"><i class="far fa-building"></i> Unidades</h2>
    			           
    			           <i class="fas fa-search"></i><input id="busca_unidade" placeholder="Buscar" type="text">
    			           <button id="btn_novo_unidade"><i class="fas fa-plus-circle"></i> Novo</button>
    			           
    			       </div>
    			      <div class="wrap_resultado">
    			        <table class="resultado">
    			          <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Endereço</th>
                                <th>Opções</th>
                              </tr>
                          </thead>
                          <tbody id="resultado_unidades">
                              
                          </tbody>
                        </table>
                        </div>
    			   </div>
    			   <!-- !Unidades -->
    			   
    			   <!-- novo_exame -->
    			   <div class="block" id="novo_exame">
    			       
    			       <form action="" class="form_cadastro" id="form_novo_exame" method="post">
                        <h2 class="titulo"><i class="fas fa-plus-circle"></i> Novo Exame</h2>
                        
                        <div class="form_block">
                            <input type="text" class="full_input" name="nome" id="nome_exame" placeholder="Nome do Exame">
                        </div>
                        <hr>
                        <div class="form_block">
                            <div class="wrap_title">
                                <h3>Esse exame precisa ser agendado? </h3>
                            </div>
                            <input type="radio" name="agendamento" value="Sim"> Sim<br>
                            <input type="radio" name="agendamento" value="Não"> Não<br>
                            
                        </div>
                        <hr>
                        
                        <div  class="form_block">
                            <div class="wrap_title">
                                <h3> Resultado </h3>
                                <h4> Dias para o paciente receber o resultado.</h4>
                            </div>
                        <input type="text" class="small_input" name="resultado" id="resultado_exame" placeholder=""  maxlength="3">
                        </div>
                        <hr>
                        <div  class="form_block">
                            <div class="wrap_title">
                                <h3> Unidades </h3>
                                <h4> Quais Unidades oferecem esse exame.</h4>
                            </div>
                            <ul id="unidades_novo_exame">
                                
                            </ul>
                        </div>
                        <hr>
                        <div  class="form_block">
                            <div class="wrap_title">
                                <h3>Preparo </h3>
                                <h4>Texto descrevendo o preparo.</h4>
                            </div>
                            
                            <textarea name="preparo" id="preparo_exame" rows="10" cols="80">
                        
                        </textarea>
                        </div>
                        <hr>
                        <input type="button" class="btn_submit" id="submit_novo_exame" value="Salvar">
                        </form>
    			   </div>
    			   <!-- !novo_exame -->
    			   
    			   <!-- novo_unidade -->
    			   <div class="block" id="novo_unidade">
    			       
    			       <form class="form_cadastro" id="form_novo_unidade" method="post">
                            <h2 class="titulo"><i class="fas fa-plus-circle"></i> Nova Unidade</h2>
                            
                            <div class="form_block">
                                <input  class="full_input" type="text" name="nome" id="nome_unidade" placeholder="Nome do Unidade">
                                <input  class="full_input" type="text" name="endereço" id="endereco_unidade" placeholder="Endereço da Unidade">
                                <input  class="full_input" type="text" name="telefone" id="telefone_unidade" placeholder="Telefone(s)">
                                <input  class="full_input" type="text" name="email" id="email_unidade" placeholder="Email">
                                <div>
                                    <button type="button" class="btn_submit" id="submit_novo_unidade"></i> Salvar</button>
                                    <span class="feedback_form_cadastro" id="feedback_novo_unidade">Por favor insira os dados da Unidade</span>
                                </div>
                            </div>
                        
                        </form>
                        
    			   </div>
    			   <!-- !novo_unidade -->
    			   
    			   <!-- editar_unidade -->
    			   <div class="block" id="editar_unidade">
    			       
    			       <form class="form_cadastro" id="form_edt_unidade" method="post">
                            <h2 class="titulo"><i class="fas fa-edit"></i> Alterar Exame</h2>
                            
                            <div class="form_block" id="dados_unidade">
                                
                            </div>
                            <button type='button' class='btn_submit' id='submit_edt_unidade'> Alterar</button>
                        </form>
                        
    			   </div>
    			   <!-- !editar_unidade -->
    			   
    			   <!-- editar exame -->
    			   <div class="block" id="editar_exame">
    			       
    			       <form class="form_cadastro" id="form_edt_exame" method="post">
    			           
                            <h2 class="titulo"><i class="fas fa-edit"></i> Alterar Unidade</h2>
                            
                            <div class="form_block">
                                <label>Nome do Exame</label>
                                <input type="text" class="full_input" name="nome" id="nome_alterar_exame">
                            </div>
                            <hr>
                            <div class="form_block">
                                
                                    <label>Agendamento</label>
                                
                                <select name="agendamento">
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                    
                                </select>
                                
                            </div>
                            <hr>
                            
                            <div  class="form_block">
                                <label> Resultado </label>
                                <input type="text" class="small_input" name="resultado" id="resultado_alterar_exame" placeholder=""  maxlength="3">
                            </div>
                            <hr>
                            
                            <div  class="form_block">
                                
                                <label> Unidades </label>
                                <ul id="unidades_alterar_exame">
                                    
                                </ul>
                            </div>
                            <hr>
                            
                            <div  class="form_block">
                                
                                <label>Preparo </label>
                                <textarea name="preparo" id="preparo_alterar_exame" rows="10" cols="80">
                            
                                </textarea>
                            </div>
                            <hr>
                            <input type="hidden" name="id">
                        
                        
                    
                    <button type='button' class='btn_submit' id='submit_edt_exame'> Alterar</button>
                    </form>
                        
    		    </div>
    			   <!-- !editar exame -->
    			   
			   </div>
			   
			   
				
				
				
		    
					    
			
	           
	</div>

	<!-- !changes webite -->
	

	
	<!-- scripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="assets/js/ckeditor/ckeditor.js"/></script>
    
	<script>
	
	
        $(document).ready(function(){
            
            $("#exames").css("display","none");
            $("#unidades").css("display","none");
            $("#novo_exame").css("display","none");
            $("#novo_unidade").css("display","none");
            $("#editar_unidade").css("display","none");
            $("#editar_exame").css("display","none");
            
             
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'preparo_exame' );
            CKEDITOR.replace( 'preparo_alterar_exame' );
            
            
            $("#menu_exames").click(function(){
                
                $("#exames").css("display","block");
                $("#unidades").css("display","none");
                $("#novo_exame").css("display","none");
                $("#novo_unidade").css("display","none");
                $("#editar_unidade").css("display","none");
                $("#editar_exame").css("display","none");
                
                $("#resultado_exames").html(""); 
                
                $.post("busca_exames.php",
                {
                  busca: $("#busca_exame").val(),
                  
                  
                },
                function(data,status){
                    
                        $("#resultado_exames").html(data);
                    
                         
                    
                    
                });
         
            });
            
            $("#menu_unidades").click(function(){
               
                $("#exames").css("display","none");
                $("#unidades").css("display","block");
                $("#novo_exame").css("display","none");
                $("#novo_unidade").css("display","none");
                $("#editar_unidade").css("display","none");
                $("#editar_exame").css("display","none");
                
                $("#resultado_unidades").html("");
                
                $.post("busca_unidades.php",
                {
                  busca: $("#busca_unidade").val(),
                  
                },
                function(data,status){
                    
                        $("#resultado_unidades").html(data);
                
                });
                
            });
            
             /* Mostra Form Novo Exame */
            $("#btn_novo_exame").click(function(){
               
                $("#exames").css("display","none");
                $("#unidades").css("display","none");
                $("#novo_exame").css("display","block");
                $("#novo_unidade").css("display","none");
                $("#editar_unidade").css("display","none");
                $("#editar_exame").css("display","none");
                
                $.ajax({url: "get_unidades_form_exames.php", success: function(result){
                $("#unidades_novo_exame").html("");   
                $("#unidades_novo_exame").html(result);
                
                }});
                
                
                
                
            });
            
            /* Mostra Form Nova Unidade */
            $("#btn_novo_unidade").click(function(){
               
                $("#exames").css("display","none");
                $("#unidades").css("display","none");
                $("#novo_exame").css("display","none");
                $("#novo_unidade").css("display","block");
                $("#editar_unidade").css("display","none");
                $("#editar_exame").css("display","none");
                
                
            });
            
            /* Inserir Exame */
            $("#submit_novo_exame").click(function(){
                $.post("inserir_exame.php",
                {
                  nome: $("#nome_exame").val(),
                  agendamento: $('input[name=agendamento]:checked', '#form_novo_exame').val(),
                  resultado: $("#resultado_exame").val(),
                  preparo: CKEDITOR.instances['preparo_exame'].getData(),
                  
                },
                function(data,status){
                    
                    
                    
                    if(data !== false){
                        
                        var valores = [];
                        
                        //Monta vetor de unidades
                        
                        $("#unidades_novo_exame li input:checked").each(function(){
                            
                           
                                valores.push($(this).val());
                            
                           
                        }); 
                            
                           unidades = valores.join(" ");
                        
                        
                        
                        
                        // insere relação exame unidades
                        $.post("inserir_exame_unidade.php",
                        {
                          exame: data,
                          unidades: unidades,
                        
                        },
                        function(data,status){
                            
                            
                            if(data === "true"){
                               
                               $("#nome_exame").val("");
                               $("#resultado_exame").val("");
                               CKEDITOR.instances['preparo_exame'].setData('');
                               
                               $("#form_novo_exame").animate({ scrollTop: 0 }, "slow");
                               
                               alert("Exame salvo com sucesso.");
                            }
                            
                            
                        
                        });
                    
                    }
                });
            });   
            
            /* Inserir Unidade */
            $("#submit_novo_unidade").click(function(){
               
                $.post("inserir_unidade.php",
                {
                  nome: $("#nome_unidade").val(),
                  endereco: $("#endereco_unidade").val(),
                  telefone: $("#telefone_unidade").val(),
                  email: $("#email_unidade").val(),
                  
                },
                function(data,status){
                
                if(data !== false){
                  $("#feedback_novo_unidade").css("color","#4AAB4C");
                  $("#feedback_novo_unidade").text(data + " salvo com sucesso.");
                  $("#nome_unidade").val("");
                  $("#endereco_unidade").val("");
                  $("#telefone_unidade").val("");
                  $("#email_unidade").val("");
                  
                }else{
                  $("#feedback_novo_unidade").css("color","#DC3F3C");
                  $("#feedback_novo_unidade").text("Houve um erro ao salvar.");
                  $("#nome_unidade").val("");
                  $("#endereco_unidade").val("");
                  $("#telefone_unidade").val("");
                  $("#email_unidade").val("");
                }
                
                });
                
                
                
            });
            
            
            // Filtro Unidade
            $("#busca_unidade").keyup(function() {
                
                var busca = $("#busca_unidade").val();
                
                $.post("busca_unidades.php",
                    {
                      busca: busca,
                    },
                    function(data,status){
                        $("#resultado_unidades").html(data);
                });
                
                
            });
            
            // Filtro de Exame
            $("#busca_exame").keyup(function() {
                
                var busca = $("#busca_exame").val();
                
                $.post("busca_exames.php",
                        {
                          busca: busca,
                        },
                        function(data,status){
                            $("#resultado_exames").html(data);
                });
                
                
                
            });
            
             /* Botão Editar Unidade*/ 
             $("#resultado_unidades").on("click",".btn_edit[name=unidade]",function(event){
                 
                $("#exames").css("display","none");
                $("#unidades").css("display","none");
                $("#novo_exame").css("display","none");
                $("#novo_unidade").css("display","none");
                $("#editar_unidade").css("display","block");
                $("#editar_exame").css("display","none");
                
                 $.post("read_unidade.php",
                    {
                      unidade: $(this).val(),
                      
                      
                    },
                    function(data,status){
    
                        
                        $("#dados_unidade").html(data);
                        
                        
                    });
                 
             });
             
             /* Botão Editar Exame*/ 
             $("#resultado_exames").on("click",".btn_edit[name=exame]",function(event){
                 
                $("#exames").css("display","none");
                $("#unidades").css("display","none");
                $("#novo_exame").css("display","none");
                $("#novo_unidade").css("display","none");
                $("#editar_unidade").css("display","none");
                $("#editar_exame").css("display","block");
                
                $.post("read_exame.php",
                    {
                      exame: $(this).val(),
                      
                    },
                    function(data,status){

                        if(data !== "false"){
                            var res = data.split("|*|");
                            var agendamento = "";
                            var preparo = "";
                            
                            // Carrega Dados do Exame
                            $("#form_edt_exame input[name=id]").val(res[0]);
                            $("#form_edt_exame input[name=nome]").val(res[1]);
                            agendamento = res[2];
                            
                            if(agendamento === "Sim"){
                                $("#form_edt_exame option[value=Sim]").prop("selected", true);
                                $("#form_edt_exame option[value=Não]").prop("selected", false);
                            }else{
                                $("#form_edt_exame option[value=Não]").prop("selected", true);
                                $("#form_edt_exame option[value=Sim]").prop("selected", false);
                            }
                                    
                            $("#form_edt_exame input[name=resultado]").val(res[3]);
                            CKEDITOR.instances['preparo_alterar_exame'].setData(res[4]);
                            
                            // Carrega Lista de Unidades onde o Exame é realizado
                            $.ajax({url: "get_unidades.php", success: function(result){
                                $("#unidades_alterar_exame").html("");   
                                $("#unidades_alterar_exame").html(result);
                                
                                $.post("read_unidades_from_exame_id.php",
                                {
                                    id: $("#form_edt_exame input[name=id]").val(),
                                },
                                function(data,status){
                                    
                                    var resultado = data.split(" ");
                                    
                                    resultado.forEach(function(valor,indice){
                                        $("#unidades_alterar_exame .checkbox_unidade").each(function(){
                                            if($(this).val() === valor)  $(this).prop('checked', true);
                                               
                                            
                                        });
                                    
                                    });
                                });
                            }
                            });
                            
                            
                        
                    }
                 
             });
            });
             
            /* Alterar Unidade*/ 
            $("#submit_edt_unidade").click(function(){
                
                $.post("alterar_unidade.php",
                
                    {
                      id: $("#form_edt_unidade input[name=id]").val(),
                      nome: $("#form_edt_unidade input[name=nome]").val(),
                      endereço: $("#form_edt_unidade input[name=endereço]").val(),
                      telefone: $("#form_edt_unidade input[name=telefone]").val(),
                      email: $("#form_edt_unidade input[name=email]").val(),
                      
                    },
                    function(data,status){
                        
                        alert(data);
                        var busca = $("#busca_unidade").val();
                        $("#resultado_unidades").html(busca_unidade(busca));
                        
                    });
                    
            });
            
            /*Alterar Exame*/
            $("#submit_edt_exame").click(function(){
                
                $.post("alterar_exame.php",
                
                    {
                      id: $("#form_edt_exame input[name=id]").val(),
                      nome: $("#form_edt_exame input[name=nome]").val(),
                      agendamento: $("#form_edt_exame select[name=agendamento]").val(),
                      resultado: $("#form_edt_exame input[name=resultado]").val(),
                      preparo: CKEDITOR.instances['preparo_alterar_exame'].getData(),
                      
                    },
                    function(data,status){
                        
                        var unidades_inserir = [];
                        
                        
                        //Monta vetor de unidades
                        
                        $("#unidades_alterar_exame .checkbox_unidade").each(function(){
                            
                            if($(this).prop("checked")){
                                unidades_inserir.push($(this).val());
                            }
                                
                            
                               
                            
                           
                        }); 
                            
                        unidades_inserir = unidades_inserir.join(" ");
                        
                        
                        $.post("inserir_exame_unidade.php",
                        {
                          exame: $("#form_edt_exame input[name=id]").val(),
                          unidades: unidades_inserir,
                        
                        },
                        function(data,status){
                            
                            
                            if(data === "true"){
                                
                                var unidades_deletar = [];
                                
                                $("#unidades_alterar_exame .checkbox_unidade").each(function(){
                            
                                    if(!($(this).prop("checked"))){
                                        unidades_deletar.push($(this).val());
                                    }
                           
                                }); 
                                
                                unidades_deletar = unidades_deletar.join(" ");
                                
                               $.post("deletar_exame_unidade.php",
                                {
                                  exame: $("#form_edt_exame input[name=id]").val(),
                                  unidades: unidades_deletar,
                                
                                },
                                function(data,status){
                                    
                                    
                                    if(data === "true"){
                                       alert("Exame alterado com sucesso");
                                    }
                                    
                                    
                                
                                });
                            }
                            
                            
                        
                        });
                        alert(data);
                        /*var busca = $("#busca_unidade").val();
                        $("#resultado_unidades").html(busca_unidade(busca));*/
                        
                    });
                    
            });
             
            
            /*Deletar Unidade*/
            $("#resultado_unidades").on("click",".btn_delete",function(event){
                
                
                
               
                
                if(confirm("Tem certeza?")){
                    
                    $.post("deletar_unidade.php",
                    {
                      unidade: $(this).val(),
                      
                      
                    },
                    function(data,status){

                        alert(data);
                        
                    });
                    
                    }
                    
                });
                
                /*Deletar Unidade*/
            $("#resultado_exames").on("click",".btn_delete",function(event){

                if(confirm("Tem certeza?")){
                    
                    $.post("deletar_exame.php",
                    {
                      exame: $(this).val(),
                      
                      
                    },
                    function(data,status){

                        alert(data);
                        
                    });
                    
                    }
                    
                });
            });
            /* Document.ready() */
        
        
        
    </script>
	
	
</body>

</html>