<?php

    $id = $_GET['id'];
    $sql = "SELECT * FROM admin WHERE id = $id";
    $busca = mysqli_query($conexao, $sql);

    while($dados=mysqli_fetch_array($busca)){
    
?>

    <form class="form-horizontal col-xs-8 col-xs-push-2" action="?pg=alterardb" method="post">
        <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
        <div class="form-group">
            <label class="control-label" for="titulo">Titulo: </label>
            <input class="form-control" id="titulo" name="titulo" type="text" value="<?=$dados['titulo'];?>" required="required"/>
        </div>
        <div class="form-group"> 
            <label class="control-label" for="subtitulo">SubTitulo: </label>
            <input class="form-control" id="subtitulo" name="subtitulo" type="text" value="<?=$dados['subtitulo'];?>" required="required"/>
        </div>
        <div class="form-group">
            <label class="control-label" for="texto">Texto: </label>
            <textarea class="form-control" rows="5" id="texto" name="texto" value="<?=$dados['texto'];?>" required="required"><?=$dados['texto'];?></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" name="Enviar">&ensp;Alterar&ensp;</button>
        </div>
    </form>

<?php } ?>