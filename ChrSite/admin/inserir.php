<form class="form-horizontal col-xs-8 col-xs-push-2" action="?pg=inserirdb" method="post">
    <div class="form-group">
        <label class="control-label" for="titulo">Titulo: </label>
        <input class="form-control" id="titulo" name="titulo" type="text" required="required"/>
    </div>
    <div class="form-group"> 
        <label class="control-label" for="subtitulo">SubTitulo: </label>
        <input class="form-control" id="subtitulo" name="subtitulo" type="text" required="required"/>
    </div>
    <div class="form-group">
        <label class="control-label" for="texto">Texto: </label>
        <textarea class="form-control" rows="5" id="texto" name="texto" id="texto" required="required"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" name="Enviar">&ensp;Cadastrar&ensp;</button>
    </div>
</form>