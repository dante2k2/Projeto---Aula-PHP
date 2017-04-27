<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="../index.php">Home<span class="sr-only">(current)</span></a></li>
    		<li><a href="../index.php?pg=quemsomos">Quem Somos</a></li>
		    <li><a href="../index.php?pg=projetos">Projetos</a></li>
		    <li><a href="../index.php?pg=faleconosco">Fale Conosco</a></li>
      </ul>
      <div class="pull-right" style="margin-top: 10px; color: white; font-size: 13pt;">
        <form method="post" action="<?php $PHP_SELF; ?>">
          <span style="font-weight: bold;">Usuário: </span>
          <span style="font-weight: normal; color: #DFD"><?php echo "$usuario"; ?>&emsp;</span>
          <button class="btn btn-danger" name="sair">&ensp;Sair&ensp;</button>
        </form>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
