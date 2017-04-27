<div class="container-fluid">
	<h2>Fale Conosco</h2>
</div>
<div class="container-fluid meuform">
	<form class="form-horizontal" action="?pg=enviar" method="post">

		<fieldset> <legend>Dados</legend>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="nome">Nome:</label>
				<div class="col-sm-10">
					<input id="nome" class="form-control" type="text" name="nome" required="required"/> <br>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-2 control-label" for="email">Email:</label>
				<div class="col-sm-10">
					<input id="email" class="form-control" type="email" name="email" required="required"/> <br>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="telefone">Telefone:</label>
				<div class="col-sm-10">
					<input id="telefone" class="form-control" type="tel" name="telefone"/> <br>
				</div>
			</div>
		</fieldset>

		<fieldset> <legend>Mensagem</legend>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="assunto">Assunto:</label>
				<div class="col-sm-10">
					<input id="assunto" class="form-control" type="text" name="assunto" required="required"/> <br>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="mensagem">Mensagem:</label>
				<div class="col-sm-10">
					<textarea id="mensagem" class="form-control" name="mensagem" rows="5" required="required"></textarea> <br>
				</div>
			</div>
		</fieldset>

		<div class="col-sm-12 col-sm-push-6">
			<button class="btn btn-primary" type="submit">Enviar</button>
		</div>
	</form>
</div>