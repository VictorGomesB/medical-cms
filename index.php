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
	<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css">
	
	
	

	<!-- custom -->
	<link rel="stylesheet" href="assets/css/sistema.css">
</head>
<body>
	<!-- header -->
	
	<!-- !header -->

	

	<!-- changes webite -->
	<div class="container-full" id="login">
	    <img src="assets/imgs/logo_PNG.png" alt="Logo IDS" id="logo_login" >
        <span class="mobile_disclaimer">Acesso somente Desktop.</span>
	    <div id="wrap_login">
	        <div class="input_login"><i class="fas fa-envelope"></i><input type="text" placeholder="e-mail" id="email"></div>
    	    <div class="input_login"><i class="fas fa-lock"></i><input type="password" placeholder="senha" id="password"></div>
    	    <button class="button_login" id="btn_login">ENTRAR</button>b
    	    <button class="button_login" id="btn_esqueci_senha">ESQUECI A SENHA</button>
	    </div>
	    
	</div>
	
	<div class="container-full" id="painel">
	    
	           <!-- Menu Lateral -->
			   <div class="container-20" id="menu_lateral">
			       <img src="assets/imgs/logo_PNG.png" alt="Logo IDS" id="logo">
			       <ul>
			           <!--<li id="menu_painel"><i class="fas fa-tachometer-alt"></i> Painel</li>-->
			           <li id="menu_exames"><i class="fas fa-file-alt"></i> Exames</li>
    			       <li id="menu_unidades"><i class="far fa-building"></i> Unidades </li>
    			       <li id="menu_convenios"><i class="fas fa-medkit"></i> Convênios </li>
    			       <li id="menu_paginas"><i class="far fa-file-image"></i> Páginas </li>
    			       <li id="menu_dp"><i class="fas fa-user-circle"></i> Departamento Pessoal </li>
    			       <a href="https://www.ids.med.br"><li><i class="fas fa-sign-out-alt"></i> Sair</li></a>
			          
			           
			       </ul>
			       <div id="assinatura">
			           © IDS – Instituto de Diagnósticos Sorocaba Ltda - Todos os direitos reservados. Criação e desenvolvimento <a href="http://www.assesim.com.br/novo/" target="_blank" title="Visitar Assesim">Assesim</a>
			        </div>
			   </div>
			   <!-- !Menu Lateral -->
			   
			   <!-- Painel -->
			   <div class="container-80">
			       
			       
			       
    			   <!-- Exames -->
    			   <div class="block" id="exames">
    			       <div class="header_form">
    			           <h2 class="titulo"><i class="fas fa-file-alt"></i> Exames</h2>
    			           
    			           <i class="fas fa-search"></i><input id="busca_exame" placeholder="Buscar" type="text">
    			           <button id="btn_novo_exame"><i class="fas fa-plus-circle"></i> Novo</button>
    			           
    			       </div>
    			       <div class="wrap_resultado">
    			       
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
    			   
    			   <!-- Convênios -->
    			   <div class="block" id="convenios">
    			       
    			       <div class="header_form">
    			           <h2 class="titulo"><i class="fas fa-medkit"></i> Convênios Ativos</h2>
    			            <button id="btn_novo_convenio"><i class="fas fa-plus-circle"></i> Novo Convênio</button>
    			       </div>
    			      <div class="wrap_resultado">
    			        <table class="resultado">
    			          <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Adicionado em</th>
                                <th>Opções</th>
                              </tr>
                          </thead>
                          <tbody id="resultado_convenios">
                              
                          </tbody>
                        </table>
                        </div>
    			   </div>
    			   <!-- !Convênios -->
    			   
    			   <!-- Páginas -->
    			   <div class="block" id="paginas">
    			       <div class="header_form">
    			           <h2 class="titulo"><i class="far fa-file-image"></i> Páginas</h2>
    			           
    			           <i class="fas fa-search"></i><input id="busca_pagina" placeholder="Buscar" type="text">
    			           <button id="btn_novo_exame"><i class="fas fa-plus-circle"></i> Novo</button>
    			           
    			       </div>
    			       <div class="wrap_resultado">
    			       
    			       <table class="resultado" >
    			           <thead>
        			          <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Categoria</th>
                                <th>Data</th>
                                <th>Opções</th>
                              </tr>
                          </thead>
                          <tbody id="resultado_paginas">
                              
                          </tbody>
                        </table>
                        </div>
    			    </div>
    			   <!-- !Páginas -->
    			   
    			   <!-- Curriculos -->
    			   <div class="block" id="curriculos">
    			       <div class="header_form">
    			           <h2 class="titulo"><i class="fas fa-user-circle"></i> Currículos</h2>
    			           
    			           <!-- <i class="fas fa-search"></i><input id="busca_curriculo" placeholder="Buscar" type="text">-->
    			           <div class="wrap_menu_form">
        			            <h3>Filtros</h3>
        			            <select id="cargo_curriculo">
                                  <option value="">Cargo</option>
                                  <option value="Recepção">Recepção</option>
                                  <option value="Enfermagem">Enfermagem</option>
                                  <option value="Médico">Médico</option>
                                  <option value="Médico Radiologista">Médico Radiologista</option>
                                  <option value="Biomédico Nuclear">Biomédico nuclear</option>
                                  <option value="Biomédico Imagem">Biomédico imagem</option>
                                  <option value="Biomédico Laboratório">Biomédico laboratório</option>
                                  <option value="Técnico Imagem">Técnico imagem</option>
                                  <option value="Técnico Laboratório">Técnico laboratório</option>
                                  <option value="Administrativo">Administrativo</option>
                                  <option value="Coletador">Coletador</option>
                                  <option value="Coletador">Outros</option>
                                </select>
                                <label>De</label>
                                <input type="text" class="calendar" placeholder="Data" name="data_inicio" readOnly="readOnly" id="data_inicio">
                                <label>Até</label>
                                <input type="text" class="calendar" placeholder="Data" name="data_fim" readOnly="readOnly" id="data_fim">
                                <input type="reset" value="Limpar" id="limpar_filtros">
    			           </div>
    			       </div>
    			       <div class="wrap_resultado">
    			       
    			       <table class="resultado" >
    			           <thead>
        			          <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Telefones</th>
                                <th>Cargo</th>
                                <th>Envio</th>
                                <th>Currículo</th>
                                <th>Opções</th>
                              </tr>
                          </thead>
                          <tbody id="resultado_curriculos">
                              
                          </tbody>
                        </table>
                        </div>
    			    </div>
    			   <!-- !Curriculos -->
    			   
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
                            <h2 class="titulo"><i class="fas fa-edit"></i> Alterar Unidade</h2>
                            
                            <div class="form_block" id="dados_unidade">
                                
                            </div>
                            <button type='button' class='btn_submit' id='submit_edt_unidade'> Alterar</button>
                        </form>
                        
    			   </div>
    			   <!-- !editar_unidade -->
    			   
    			   <!-- editar exame -->
    			   <div class="block" id="editar_exame">
    			       
    			       <form class="form_cadastro" id="form_edt_exame" method="post">
    			           
                            <h2 class="titulo"><i class="fas fa-edit"></i> Alterar Exame</h2>
                            
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
    			   
    			<!-- editar página -->
    			   <div class="block" id="editar_pagina">
    			       
    			       <form class="form_cadastro" id="form_edt_pagina" method="post">
    			           
                            <h2 class="titulo"><i class="fas fa-edit"></i> Alterar Página</h2>
                            
                            <div class="form_block">
                                <label>Título</label>
                                <input type="text" class="full_input" name="nome" id="nome_alterar_exame">
                            </div>
                            
                             <div class="form_block">
                                <label>Subtítulo</label>
                                <input type="text" class="full_input" name="nome" id="nome_alterar_exame">
                            </div>
                            
                            <div  class="form_block">
                                
                                <select name="categoria">
                                    <option class="label-option">Categoria</option>
                                </select>
                            </div>
                           
                            <div  class="form_block">
                                
                                <label> Data </label>
                                <ul id="unidades_alterar_exame">
                                    
                                </ul>
                            </div>
                            <hr>
                            
                            <div  class="form_block">
                                
                                <label>Conteúdo </label>
                                <textarea name="preparo" id="preparo_alterar_exame" rows="10" cols="80">
                            
                                </textarea>
                            </div>
                            <hr>
                            <input type="hidden" name="id">
                        
                        
                    
                    <button type='button' class='btn_submit' id='submit_edt_exame'> Alterar</button>
                    </form>
                        
    		    </div>
    			   <!-- !editar página -->   
    			   
			   </div>
			   <!-- !Painel -->
			   
				
				
				
		    
					    
			
	           
	</div>

	
	

	
	<!-- scripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="assets/js/ckeditor/ckeditor.js"/></script>
    <script src="assets/js/jquery-ui/external/jquery/jquery.js"></script>
    <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    
	<script>
	
	
        $(document).ready(function(){
            
            
            //inicialização
            
            $(".calendar").datepicker({
                    dateFormat: 'dd/mm/yy',
                    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
                    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                    nextText: 'Próximo',
                    prevText: 'Anterior'
                });
            $(".block").css("display","none");
            $("#exames").css("display","block");
             
            $("#menu_exames").addClass("active");
            
            $("#resultado_exames").html(""); 
                
                $.post("busca_exames.php",
                {
                  busca: $("#busca_exame").val(),
                  
                  
                },
                function(data,status){
                    
                        $("#resultado_exames").html(data);
                    
                         
                    
                    
            });
            
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'preparo_exame' );
            CKEDITOR.replace( 'preparo_alterar_exame' );
            
            
            /* Login  */
            
            $("#btn_login").click(function(){
                
                $.post("login_sistema.php",
                    {
                      email: $("#email").val(),
                      senha: $("#password").val(),
                      
                    },
                    function(data,status){

                        if(data === "true"){
                            $("#login").fadeOut("10000",function(){
                                $("#painel").fadeIn("10000");
                            });
                        }else{
                            alert('Email ou senha incorretos')
                        }
                        
                    });
                    
            });
            /* !Login  */
            
            /* Menu */
            $("#menu_exames").click(function(){
                
                $(".block").css("display","none");
                $("#exames").css("display","block");
                
                
                $("#menu_lateral li").removeClass("active");
                $(this).addClass("active");
                
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
               
                $(".block").css("display","none");
                $("#unidades").css("display","block");
                
                $("#menu_lateral li").removeClass("active");
                $(this).addClass("active");
                
                $("#resultado_unidades").html("");
                
                $.post("busca_unidades.php",
                {
                  busca: $("#busca_unidade").val(),
                  
                },
                function(data,status){
                    
                        $("#resultado_unidades").html(data);
                
                });
                
            });
            
            $("#menu_convenios").click(function(){
               
                showConvenios();
                
            });
            
            $("#menu_paginas").click(function(){
               
                $(".block").css("display","none");
                $("#paginas").css("display","block");
                
                $("#menu_lateral li").removeClass("active");
                $(this).addClass("active");
                
                $("#resultado_paginas").html("");
                
                $.post("busca_paginas.php",
                {
                  busca: $("#busca_pagina").val(),
                  
                },
                function(data,status){
                    
                    $("#resultado_paginas").html(data);
                
                });
                
            });
            
            $("#menu_dp").click(function(){
                $(".block").css("display","none");
                $("#curriculos").css("display","block");
                $("#resultado_curriculos").html("");
                $("#menu_lateral li").removeClass("active");
                $(this).addClass("active");
               
                $("#resultado_exames").html(""); 
                
                $.post("busca_curriculos.php",
                {
                  busca: $("#busca_curriculo").val(),
                  
                  
                },
                function(data,status){
                    
                        $("#resultado_curriculos").html(data);
                    
                         
                    
                    
                });
            });

            /* !Menu */
            
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
            
            /* Mostra Form Novo Convênio */
            $("#btn_novo_unidade").click(function(){
               
                $(".block").css("display","none");
                $("#novo_convenio").css("display","block");
                
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
                    
                    // Se o exame não estiver cadastrado
                    if(data !== "false"){
                        
                        var valores = [];
                        
                        //Monta vetor de unidades
                        
                        $("#unidades_novo_exame li input:checked").each(function(){
                                valores.push($(this).val());
                        }); 
                        
                        // se o vetor não está vazio
                        if(valores.length >  0){

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
    
                                   alert("Exame salvo com sucesso.");
                                   showExames();
                                }
                            });
                            
                        }else{
                            alert("Exame salvo com sucesso.");
                            showExames();
                        }
                        
                    }else{
                        alert("Exame já cadastrado.")
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
             
             /* Botão Editar Página*/ 
             $("#resultado_paginas").on("click",".btn_edit[name=pagina]",function(event){
                 
                $("#paginas").hide();
                $("#editar_pagina").show();
               
                
                 $.post("read_pagina.php",
                    {
                      pagina: $(this).val(),

                    },
                    function(data,status){
    
                        
                        $("#dados_pagina").html(data);
                        
                        
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
                        
                        
                        //Insere unidades novas
                        
                        
                        $("#unidades_alterar_exame .checkbox_unidade").each(function(){
                            if($(this).prop("checked"))
                            {
                                unidades_inserir.push($(this).val());
                            }
                        }); 
                        
                        
                        
                        if(unidades_inserir.length > 0)
                        {
                            unidades_inserir = unidades_inserir.join(" ");
                            $.post("inserir_exame_unidade.php",
                            {
                              exame: $("#form_edt_exame input[name=id]").val(),
                              unidades: unidades_inserir,
                            },
                            function(data,status){
                                
                                    console.log(data);
                                
                            });
                        }
                        
                        // Deleta unidades removidas
                        
                        var unidades_deletar = [];
                                
                        $("#unidades_alterar_exame .checkbox_unidade").each(function(){
                    
                            if(!($(this).prop("checked"))){
                                unidades_deletar.push($(this).val());
                            }
                   
                        }); 
                        if(unidades_deletar.length >  0)
                        {
                            unidades_deletar = unidades_deletar.join(" ");
                            
                            $.post("deletar_exame_unidade.php",
                            {
                              exame: $("#form_edt_exame input[name=id]").val(),
                              unidades: unidades_deletar,
                            
                            },
                            function(data,status){
                                if(data === "true"){
                                   alert("Exame alterado com sucesso");
                                   showExames();
                                }else{
                                    console.log("Erro ao deletar unidade_exame.");
                                }
                            });
                        }else{
                            alert("Exame alterado com sucesso");
                            showExames();
                        }
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
                
                /*Deletar Exame*/
            $("#resultado_exames").on("click",".btn_delete",function(event){

                if(confirm("Tem certeza?")){
                    
                    $.post("deletar_exame.php",
                    {
                      exame: $(this).val(),
                      
                      
                    },
                    function(data,status){

                        alert(data);
                        showExames();
                    });
                    
                }
                    
            });
            
            /*Deletar Currículo*/
            $("#resultado_curriculos").on("click",".btn_delete",function(event){

                if(confirm("Tem certeza?")){
                    
                    $.post("deletar_curriculo.php",
                    {
                      curriculo: $(this).val(),
                      
                      
                    },
                    function(data,status){

                        alert(data);
                        
                    });
                    
                }
                buscarCurriculos();
                    
            });
                
                /*Filtro Cargo Currículos*/
                $("#cargo_curriculo").change(function(){

                        //converte para data iso
                        var data_inicio = $("#data_inicio").val();
                        var data_fim = $("#data_fim").val();
                        var iso_inicio =  '0000-00-00';
                        var iso_fim = new Date().toISOString().slice(0,10);
                        if(data_inicio !== ""){
                            data_inicio = data_inicio.split("/");
                            iso_inicio = data_inicio[2] + "-" + data_inicio[1] + "-" + data_inicio[0];
                        }
                        
                        if(data_fim !== ""){
                            data_fim = data_fim.split("/");
                            iso_fim = data_fim[2] + "-" + data_fim[1] + "-" + data_fim[0];
                        }
                       
                       
                        $.post("filtrar_curriculos.php",
                        {
                          cargo: $("#cargo_curriculo").val(),
                          inicio: iso_inicio,
                          fim: iso_fim,
                          
                        },
                        function(data,status){
    
                            $("#resultado_curriculos").html(data);
                            
                        });
                        
                        
                        
                    
                    
                });
                
                /*Filtro Data Currículos*/
                $("#data_inicio").change(function(){

                        //converte para data iso
                        var data_inicio = $("#data_inicio").val();
                        var data_fim = $("#data_fim").val();
                        var iso_inicio =  '0000-00-00';
                        var iso_fim =  new Date().toISOString().slice(0,10);
                        
                        
                        if(data_inicio !== ""){
                            data_inicio = data_inicio.split("/");
                            iso_inicio = data_inicio[2] + "-" + data_inicio[1] + "-" + data_inicio[0];
                        }
                        
                        if(data_fim !== ""){
                            data_fim = data_fim.split("/");
                            iso_fim = data_fim[2] + "-" + data_fim[1] + "-" + data_fim[0];
                        }
                        
                        
                        
                        
                        $.post("filtrar_curriculos.php",
                        {
                          cargo: $("#cargo_curriculo").val(),
                          inicio: iso_inicio,
                          fim: iso_fim,
                          
                        },
                        function(data,status){
    
                            $("#resultado_curriculos").html(data);
                            
                        });
                        
                        
                    
                });
                
                
                /*Filtro Data Currículos*/
                $("#data_fim").change(function(){

                        //converte para data iso
                        var data_inicio = $("#data_inicio").val();
                        var data_fim = $("#data_fim").val();
                        var iso_inicio =  '0000-00-00';
                        var iso_fim = new Date().toISOString().slice(0,10);
                        if(data_inicio !== ""){
                            data_inicio = data_inicio.split("/");
                            iso_inicio = data_inicio[2] + "-" + data_inicio[1] + "-" + data_inicio[0];
                        }
                        
                        if(data_fim !== ""){
                            data_fim = data_fim.split("/");
                            iso_fim = data_fim[2] + "-" + data_fim[1] + "-" + data_fim[0];
                        }
                        
                        
                        $.post("filtrar_curriculos.php",
                        {
                          cargo: $("#cargo_curriculo").val(),
                          inicio: iso_inicio,
                          fim: iso_fim,
                          
                        },
                        function(data,status){
    
                            $("#resultado_curriculos").html(data);
                            
                        });
                        
                        
                    
                });
                
                $("#limpar_filtros").click(function(){
                    $("#data_inicio").val("");
                    $("#data_fim").val("");
                    $("#cargo_curriculo").val("");
                    buscarCurriculos();
                });
                
                
                // Busca Todos os Currículos
                function buscarCurriculos() {
                    $(".block").css("display","none");
                    $("#curriculos").css("display","block");
                    $("#resultado_curriculos").html("");
            
                    
                     $.post("busca_curriculos.php",
                    {
                    busca: $("#busca_curriculo").val(),
                    },
                     function(data,status){
                    
                    $("#resultado_curriculos").html(data);
                    });          
                }
                
                //Carrega Exames
                function showExames() {
                    $(".block").css("display","none");
                    $("#exames").css("display","block");
                    
                
                    $("#menu_lateral li").removeClass("active");
                    $(this).addClass("active");
                    
                    $("#resultado_exames").html(""); 
                    
                    $.post("busca_exames.php",
                    {
                      busca: $("#busca_exame").val(),
                      
                      
                    },
                    function(data,status){
                        $("#resultado_exames").html(data);
                    });             
                }
                
                function showConvenios() {
                    
                    $(".block").css("display","none");
                    $("#convenios").css("display","block");
                    
                
                    $("#menu_lateral li").removeClass("active");
                    $(this).addClass("active");
                    
                    $("#resultado_convenios").html(""); 
                    
                    $.post("busca_convenios.php",
                    {
                        
                    },
                    function(data,status){
                        $("#resultado_convenios").html(data);
                    });             
                }
                
            });
            /* Document.ready() */
        
            
        
    </script>
	
	
</body>

</html>