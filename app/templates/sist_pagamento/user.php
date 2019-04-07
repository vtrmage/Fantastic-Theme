<?php
//include "queries.php";
?>
<form action="<?php echo get_theme_file_uri();?>/app/templates/sist_pagamento/queries.php" method="post">
  <input type="text" name="nome" >Nome</input> <br>
  <input type="text" name="projeto">Projeto</input><br>
  <input type="number" name="custo">Custo</input><br>
  <button type="submit" name="submit_cadastro">Cadastrar</button>
</form>
