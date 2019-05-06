<?php
get_header();
// echo '<pre>';
//   print_r( get_field('cliente')  );
//   echo '<pre>';
$cliente=get_field('cliente');
$projeto=get_field('nome_do_projeto');

  echo '<h2>Cliente : '.$cliente->post_title.'</h2>';
  echo '<h2>Projeto : '.$projeto->post_title.'</h2>';
  echo '<h2>Valor do Projeto : '.$preco=get_field('preco').' reais </h2>';
  if($data_entrada=get_field('entrada_data')){echo '<h2>Data da Entrada : '.$data_entrada.'</h2>';}
  if($entrada=get_field('valor_pago_entrada')){echo '<h2>Valor de Entrada : '.$entrada.' reais </h2>';}
  echo '<br />';
  echo '<h2>Parcelas</h2><br />';
  if ($parcela1=get_field('parcela1')){echo '<h2>1 - valor do pagamento : '.$parcela1.',00R$ data : '.$dia_pagamento=get_field('data_pagamento1').'</h2>';}
  if ($parcela2=get_field('parcela2')){echo '<h2>2 - valor do pagamento : '.$parcela2.',00R$ data : '.$dia_pagamento=get_field('data_pagamento2').'</h2>';}
  if ($parcela3=get_field('parcela3')){echo '<h2>3 - valor do pagamento : '.$parcela3.',00R$ data : '.$dia_pagamento=get_field('data_pagamento3').'</h2>';}
  if ($parcela4=get_field('parcela4')){echo '<h2>4 - valor do pagamento : '.$parcela4.',00R$ data : '.$dia_pagamento=get_field('data_pagamento4').'</h2>';}
  if ($parcela5=get_field('parcela5')){echo '<h2>5 - valor do pagamento : '.$parcela5.',00R$ data :  '.$dia_pagamento=get_field('data_pagamento5').'</h2>';}
  if ($parcela6=get_field('parcela6')){echo '<h2>6 - valor do pagamento : '.$parcela6.',00R$ data : '.$dia_pagamento=get_field('data_pagamento6').'</h2>';}
  echo '<br/ ><h2>Total Pago : '.$total_pago=$entrada+$parcela1+$parcela2+$parcela3+$parcela4+$parcela5+$parcela6.' reais </h2>';
  echo '<h2>Valor restante '.$total=$preco-$total_pago.' reais </h2>';


get_footer();



?>
