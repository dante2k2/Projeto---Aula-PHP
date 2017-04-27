<?php 
	
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	$titulo = $_POST["assunto"];
	$texto = $_POST["mensagem"];
	
	$mensagem = "Nome: $nome \n";
	$mensagem .= "E-mail: $email \n";
	$mensagem .= "Telefone: $telefone \n\n";
	$mensagem .= "Telefone: $titulo \n\n";
	$mensagem .= "Mensagem: $texto \n";

	$destinatario = "destino@email.com";
	$remetente = "$email";
	$enviado = "$email";
	$assunto = "Contato Pelo Site";

	$headers = implode ("\n", array("From: $remetente", "Reply-To: $enviado", "Return-Path: $remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8"));

	echo '<link href="css/bootstrap.css" rel="stylesheet">';
	if (mail($destinatario, $assunto, nl2br($mensagem), $headers)) {
		echo "<h3 style='color: green;'>E-mail enviado com sucesso!!!</h3><br>
	    	<a href='index.php?pg=faleconosco'>Voltar</a>";
	} else {
		echo "<h3 style='color: red;'>Falha. E-mail não enviado!</h3><br>
	    	<a href='index.php?pg=faleconosco'>Voltar</a>";
	}

 ?>