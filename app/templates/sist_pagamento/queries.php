<?php
//
// CONNECTING TO THE DATABASE, ADDRES, USER, PASSWORD, DATABASE NAME
$connection = mysqli_connect('localhost','root','root','sistema_pagamento');


if(isset($_POST['submit_cadastro'])){
//

$nome = $_POST['nome'];
$projeto = $_POST['projeto'];
$custo = $_POST['custo'];



mysqli_query($connection, "INSERT INTO cliente (nome, projeto, custo) VALUES ('$nome', '$projeto', '$custo')");
wp_redirect( 'http://google.com' );
die;
exit;

}
// $username =  $_POST['username'];
// $password =  $_POST['password'];
//
//
//    //$cria_user = mysqli_query ($connection, "insert into usuario (login, senha) values ('$username', '$password');");
//              //INSERT INTO usuario (login, senha) VALUES ( 'jiren', 'vera');
//    //$cria_user = mysqli_query(, $query);
//    $ver_usuario = mysqli_query ($connection, "SELECT * FROM usuario WHERE login='$username' and senha='$password'");
//
//   if($ver_usuario){
//     echo "TEM USUARIO MAN";
//
//     print_r($ver_usuario);
//   }
//   else{
//     echo "NAO TEM ";
//   }







 ?>

<h1 class="javemal">queries php carregou</h1>

<?php
  header('Location: http://www.new-website.com/', true, 301);
  exit();
?>
