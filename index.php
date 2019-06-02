
<?php
 get_header();

$args= array(
  'post_type'      => 'post',
  'orderby'        => 'DESC',
  'posts_per_page' => 7,
);
$figura = new WP_Query($args);


?>



<h1>margerita</h1>


 <?php
 get_footer();
?>
