<?php get_header();

if(isset($_POST['submit'])){

$username =  $_POST['username'];
$password =  $_POST['password'];
// CONNECTING TO THE DATABASE, ADDRES, USER, PASSWORD, DATABASE NAME
$connection = mysqli_connect('localhost','root','root','sistema_pagamento');



   //$cria_user = mysqli_query ($connection, "insert into usuario (login, senha) values ('$username', '$password');");
             //INSERT INTO usuario (login, senha) VALUES ( 'jiren', 'vera');
   //$cria_user = mysqli_query(, $query);
   $ver_usuario = mysqli_query ($connection, "SELECT * FROM usuario WHERE login='$username' and senha='$password'");

  if($ver_usuario){
    echo "TEM USUARIO MAN";

    print_r($ver_usuario);
  }
  else{
    echo "NAO TEM USUARIO MAN";
  }


// if ($username && $password) {
//
//   echo $username;
//   echo $password;
// }
//
// else {
//   echo 'tem nada nao man';
// }



};

?>

<div class="container">
<h1>Tela de login</h1>

<form action="<?php get_theme_file_uri('app/templates/sist_pagamento/login.php')?>" method="post">
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
</form>

</div>

<?php get_footer(); ?>
