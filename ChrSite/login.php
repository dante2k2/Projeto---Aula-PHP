<?php
	include "admin/config.inc.php";
	
	if (isset($_POST["entrar"])) {
		
		session_start();

		$login = $_POST["login"];
		$senha = $_POST["senha"];

		$result = mysqli_query($conexao, "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha';");
		
		if (mysqli_num_rows($result) > 0) {
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			header("Location:admin/admin.php");
		} else {
			unset ($_SESSION['login']);
			unset ($_SESSION['senha']);
			echo "<p style='color: red;'>Falha de Autenticação!</p>";
		}

	}
 ?>

<div class="container" style="margin-top: 20px;">
	<form class="form-horizontal col-xs-4 col-xs-push-4" method="post" action="<?php $PHP_SELF; ?>">
		<fieldset class="text-center"><legend>Autenticação</legend>
			<div class="form-group">
				<label class="col-xs-2 control-label" for="login">Login</label>
				<div class="col-xs-10">
					<input class="form-control" type="text" name="login" id="login">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-2 control-label" for="senha">Senha</label>
				<div class="col-xs-10">
					<input class="form-control" type="password" name="senha" id="senha">
				</div>
			</div>
		</fieldset>
		<button class="btn btn-success pull-right" name="entrar">Entrar</button>
	</form>
</div>
