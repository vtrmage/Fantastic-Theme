
<?php

$userPage = get_permalink(17);
$pagamentosPage = get_permalink(22);
   $post = get_the_ID();

   echo '<h1>'.$post.'</h1>';
?>

<div class="container">
  <div class="row block-wrapper">

      <div class="col-6 ">
        <div class="userBlock">
         <a href="<?php echo $userPage ?>">cliente</a>
        </div>
      </div>


      <div class="col-6 ">
        <div class="paymentBlock">
        <a href="<?php echo $pagamentosPage ?>">pagamentos</a>
        </div>
      </div>

  </div>
  <div class="row">
    <div class="col-6 ">
      <div class="checkUserBlock"><a href="">consultar ususario</a></div>
    </div>
    <div class="col-6">
      <div class="checkPaymentBlock">
        <a href="">consultar pagamento</a>
      </div>
    </div>
  </div>
</div>
