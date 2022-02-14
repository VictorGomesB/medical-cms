<?php 
	// definindo valores padrões
	define("URL_BASE", 'https://vbarbieri.com.br/portfolio/');

	// página atual
	$pagina	= basename($_SERVER['SCRIPT_NAME']);

	// data padrão
	date_default_timezone_set("America/Sao_paulo");	

// conexão
	$con 	= mysqli_connect('localhost','vbarbi30_idsmed_ids', 'Qwer1234!!@@##$$', 'vbarbi30_idsmed_ids');
	if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
	$db 	= mysqli_select_db($con, 'vbarbi30_idsmed_ids');

	// linguagem padrão
	mysqli_set_charset($con, "utf8");
?>