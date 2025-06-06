<?php
require "./components/header.php";
require "./connection/conn.php";
$nome = $_POST['nome'];
$nivel = $_POST['nivel'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

?>
<div class="container-fluid bg-dark d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="row w-100 d-flex justify-content-center">

  
<?php
if ($nome == "" ||  $senha == ""){
?>
<div class="col-md-7">
<div class="alert alert-warning" role="alert">
  Ops ... Algum campo ficou em branco .. Por favor, verifique ...
</div>
<script>
    setTimeout(() => {
        window.location.href="./login_frm_cadastro.php";
    }, 3000);
</script>
</div>
<?php
}

$script = "INSERT INTO usuarios (nome, senha, id_nivel ) VALUES (?, ?, ?)";
$execScript = $pdo->prepare($script);
$execScript->bindParam(1, $nome, PDO::PARAM_STR);
$execScript->bindParam(2, $senha, PDO::PARAM_STR);
$execScript->bindParam(3, $nivel);

$exec = $execScript->execute();

if($exec){
    ?>
<div class="col-md-7">
<div class="alert alert-success" role="alert">
  Cadastro realizado com sucesso.
</div>
<script>
    setTimeout(() => {
        window.location.href="./login.php";
    }, 3000);
</script>
</div>
<?php

} else {
    ?>
<div class="col-md-7">
<div class="alert alert-danger" role="alert">
  Ops ... Algo de errado com seu cadastro!
</div>
<script>
    setTimeout(() => {
        window.location.href="./login_frm_cadastro.php";
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