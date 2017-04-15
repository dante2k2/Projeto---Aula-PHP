<?php 

	$conexao = mysqli_connect("localhost", "root", "");

	if ($conexao) {
		echo "Conexão feita com sucesso!<br>";
	} else {
		echo "Conexão falhou!";
	}

	$db = mysqli_select_db($conexao, "meusite");

	if ($db) {
		echo "Banco de dados selecionado com sucesso!<br>";
	} else {
		echo "Não selecionado!";
	}
/*
	$query = mysqli_query($conexao, "
			CREATE TABLE faleconosco(
				id int,
				nome varchar(40),
				email varchar(50),
				telefone int,
				assunto varchar(50),
				mensagem text
			);
		");
*/

/*
	$query = mysqli_query($conexao, "
			INSERT INTO faleconosco(nome, email, telefone, assunto, mensagem) VALUES (
				'Daniel',
				'daniel@brandao.com.br',
				12345678,
				'Envio Fale Conosco',
				'Envio da mensagem'
			);
		");
*/

	$dados = mysqli_query($conexao, "
			SELECT * FROM faleconosco
		");

	while ($tabela = mysqli_fetch_array($dados)) {
		echo $tabela['nome']."<br>";
		echo $tabela['email']."<br>";
		echo $tabela['telefone']."<br>";
		echo $tabela['assunto']."<br>";
		echo $tabela['mensagem']."<br>";
	}

 ?>