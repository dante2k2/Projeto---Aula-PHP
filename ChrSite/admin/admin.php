<?php
	include "config.inc.php";

	session_start();

	if (isset($_POST["sair"])) {
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location:../index.php?pg=login');
	}

	if (!isset($_SESSION['login']) and !isset($_SESSION['senha'])) {
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location:../index.php?pg=login');
	}

	$usuario = $_SESSION['login'];

?>

<!DOCTYPE html>
<html lang="pt">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>MeuSite.com - Admin</title>

	<!-- Bootstrap Core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../css/modern-business.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>

    <!-- Navigation -->
    <?php
    	include "../topo.php";
    	include_once "menuadm.php";
    ?>

    <!-- Page Content -->
    <div class="container">

    	<!-- Page Heading/Breadcrumbs -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Painel Admin </h1>
				<ol class="breadcrumb">
					<li><a href="admin.php">Home</a>
					</li>
					<li class="active"><a href="?pg=listar">Listar</a></li>
					<li class="active"><a href="?pg=inserir">Inserir Novo</a></li>
				</ol>
			</div>
		</div>
		<!-- /.row -->

		<!-- Content Row -->
		<?php
    	// Declarando as variáveis de acesso as páginas
			$var = "home.php";
	    	// o @ suprime avisos de erro do PHP.
			@$pg = $_GET['pg'];

	    	// Utilizando a variável Superglobal SERVER
	    	// Para testar se o parâmetro Query_String está
	    	// sendo utilizado.

			if(empty($_SERVER["QUERY_STRING"])) {
				include("$var");
			} else {
				include("$pg.php");
			}
		?>

		<hr>

		<!-- Footer -->
		<?php include "../rodape.php"; ?>

	</div>
	<!-- /.container -->

	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/sair.js"></script>

</body>
</html>
