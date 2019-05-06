<h2>Projetos Abertos</h2>


<?php
// echo '<pre>';
//     print_r( get_field('post_do_pagamento')  );
// echo '</pre>';

$pagina_de_projetos = new WP_Query(array(
  'posts_per_page' => 10,
  'post_type'=> 'pagamento'
));

while ($pagina_de_projetos->have_posts()){
  $pagina_de_projetos->the_post();
?>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php }

// $jiren = get_field('post_do_pagamento');
//
// echo '<h1><a href="'.$jiren->guid.'">'.$jiren ->post_title.'</a></h1>';

 ?>
