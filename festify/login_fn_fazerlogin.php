<?php
require "./components/header.php";
require "./connection/conn.php";
$nome = $_POST['nome'];
$senha = $_POST['senha'];

?>
<div class="container-fluid d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="row w-100 d-flex justify-content-center">

  
<?php
$consultaEmail = $pdo->prepare("SELECT * FROM usuarios WHERE nome = ? ");
$consultaEmail->bindParam(1, $nome, PDO::PARAM_STR);
$consultaEmail->execute();
$listaruser = $consultaEmail->fetch(PDO:: FETCH_ASSOC);
$conferesenha = password_verify($senha, $listaruser['senha']);
if($conferesenha){
session_start();

$_SESSION['nome']   = $listaruser['nome'];
$_SESSION['id']     = $listaruser['id'];


    ?>
<div class="col-md-7">
<div class="alert alert-success" role="alert">
  Login Realizado com Sucesso. Entrando no Sistema!
</div>
<script>
    setTimeout(() => {
        window.location.href="index.php";
    }, 3000);
</script>
</div>
<?php
} else {

session_start();

unset($_SESSION['nome']);

unset($_SESSION['id']);
    ?>
    <div class="col-md-7">
    <div class="alert alert-danger" role="alert">
      Ops ... E-mail ou senha está incorreto!
    </div>
    <script>
        setTimeout(() => {
            window.location.href="./login.php";
        }, 3000);
    </script>
    </div>
    <?php
}

?>

  </div>
</div>
<?php

require "./components/footer.php";

?>