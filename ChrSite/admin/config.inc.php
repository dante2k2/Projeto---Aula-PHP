<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$bd = "chrsite";

	$conexao = mysqli_connect($host,$user,$pass,$bd) or die ("Sem conexão com o servidor");

	$banco = mysqli_select_db($conexao, $bd) or die ("Sem acesso ao Banco de Dados");

?>