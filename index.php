
<?php
 get_header();

 if (have_posts()){
     while(have_posts()){
        the_post();
     }
 }
?>

<h2 class="juno">VEM PRO PA PAAAAI MAN</h2>


<div class="cube-wrapper">
     <div class="cubo">
          <div class="parte-cima"><span class="jaguar">TO EM CIMA</span></div>
          <div class="frente">FRENTE AQUI</div>
     </div>
</div>

<div class="cube-wrapper">
     <div class="cubo">
          <div class="parte-cima"><span class="jaguar">TO EM CIMA</span></div>
          <div class="frente">FRENTE AQUI</div>
     </div>
</div>

<div class="cube-wrapper">
     <div class="cubo">
          <div class="parte-cima"><span class="jaguar">TO EM CIMA</span></div>
          <div class="frente">FRENTE AQUI</div>
     </div>
</div>



 <?php
 get_footer();
?>
