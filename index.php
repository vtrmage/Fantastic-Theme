
<?php
 get_header();

 if (have_posts()){
     while(have_posts()){
        the_post();
     }
 }
?>

<h2 class="juno">VEM PRO PA PAAAAI MAN</h2>





 <?php
 get_template_part('inc/footer/main_footer')
?>
