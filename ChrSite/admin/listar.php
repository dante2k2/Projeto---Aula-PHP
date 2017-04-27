<script language='javascript'>

    function confirmaExclusao(aURL) {

        if(confirm('Você tem certeza que deseja excluir?')) {
            location.href = aURL;
        }
    }

</script>

<?php

    $busca = "Select * from admin order by id";
    $todos = mysqli_query($conexao, $busca);
    
?>

<table class="table table-hover">
    <thead>
        <th style="width: 25px;">ID</th>
        <th style="width: 205px;">Título</th>
        <th style="width: 105px;">Alterar</th>
        <th style="width: 105px;">Excluir</th>
    </thead>
    <?php while ($dados=mysqli_fetch_array($todos)) { ?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['titulo'];?></td>
        <td><a href="?pg=alterar&id=<?=$dados['id']; ?>"><small>Alterar</small></a></td>
        <td><a href="javascript:confirmaExclusao('?pg=excluirdb&id=<?=$dados['id']; ?>')" class="ask">
<small>Excluir</small></a></td>
    </tr>
    
    <?php } ?>

</table>
