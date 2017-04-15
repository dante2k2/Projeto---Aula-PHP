<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meu site</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-3.2.0.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body class="container-fluid">

	<?php

		include_once("topo.php");
		include_once("menu.php");

		if (empty($_SERVER["QUERY_STRING"])) {
			$var = "conteudo.php";
			include_once("$var");
		} else {
			$pg = $_GET['pg'];
			include_once("$pg.php");
		}

		include_once("rodape.php");

	?>

	
</body>
</html>