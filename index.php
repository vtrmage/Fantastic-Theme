
<?php
 get_header();

 if (have_posts()){
     while(have_posts()){
        the_post();
     }
 }


 //get_template_part('modules/3d_cube');
?>
<a href="<?php echo $diretorio=get_theme_file_uri('app/modules/sist_pagamento/home.php'); ?>" >clica neu man</a>




 <?php
 get_footer();
?>
