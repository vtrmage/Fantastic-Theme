<?php

get_header();
get_template_part('app/templates/sist_pagamento/queries');

//estou pegando o permalink pq ai eu posso mudar o slug da pagina quando eu quiser,e nao terei problemas, uma vez que o permalink vem do banco!
$endereco_pagina_home = get_permalink(15);
?>

<div class="container">
<h1>Tela de login</h1>

<form action="<?php get_theme_file_uri('app/templates/sist_pagamento/home.php')?>" method="post">
  <div class="form-group">
    <label for="username">Login</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password">
  </div>
  <button type="submit" class="btn btn-warning" name="submit" value="Submit">Submit</button>
  <button class="btn btn-link"><a href="<?php echo $endereco_pagina_home; ?>">vai para home</a></button>
</form>

</div>

<?php get_footer(); ?>
