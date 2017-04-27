<?php

	$id =           $_POST['id'];
	$titulo =       $_POST['titulo'];
	$subtitulo =    $_POST['subtitulo'];
	$texto =        $_POST['texto'];

	$sql = "UPDATE admin SET titulo='$titulo', subtitulo='$subtitulo', texto='$texto' WHERE id=$id";
	$altera = mysqli_query($conexao, $sql);

	if(!$altera){
	    echo "<h4 style='color: red;'>Ocorreu um erro ao atualizar dados no banco de dados.</h4> <br>
	    	<a href='?pg=listar'>Voltar</a>";
	}else{
	   echo "<h3 style='color: green;'>Atualizado com sucesso!</h3>
			<a href='?pg=listar'>Voltar</a>";
	}

?>