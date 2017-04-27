<?php 
	include("admin/config.inc.php");
    $todos = mysqli_query($conexao, "Select * from admin order by id");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chr Site</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.corpo {background-color: #FFF; padding: 0;}
	</style>
</head>
<body style="background: #DDDDDD;">
	
	<?php
		include_once("topo.php");
		include_once("menu.php");
	?>
	<div class="container corpo">

		<?php

			if (empty($_SERVER["QUERY_STRING"])) {
				$var = "conteudo.php";
				include_once("$var");

				while ($dados=mysqli_fetch_array($todos)) {

					echo "<div class='container-fluid text-justify'><hr>
									<h2>".$dados['titulo']."</h2>
									<h4><em>".$dados['subtitulo']."</em></h4>
									<p>".nl2br($dados['texto'])."</p>
								</div>";

				}

			} else {
				$pg = $_GET['pg'];
				include_once("$pg.php");
			}

			include_once("rodape.php");

		?>

	</div>

	<script src="js/jquery-3.2.0.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>