<?php
require "./components/header.php";
require "./connection/conn.php";
$imagem = $_FILES['fotoproduto'];

if($imagem['name'] == ""){
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $qtde = $_POST['qtde'];
    $id = $_POST['id'];

 $up = "UPDATE produtos SET 
                    descricao = ?,
                    valor_produto = ?,
                    qtde = ?
            WHERE id = ?";
            
 $exec = $pdo->prepare($up);
 $exec->bindParam(1, $descricao, PDO::PARAM_STR);
 $exec->bindParam(2, $valor);
 $exec->bindParam(3, $qtde, PDO::PARAM_INT);
 $exec->bindParam(4,$id, PDO::PARAM_INT);           
    
 $exePro = $exec->execute();

 if($exePro) {
session_start();
unset($_SESSION['descricao']);
unset($_SESSION['valor_produto']);
unset($_SESSION['qtde']);
unset($_SESSION['id']);
unset($_SESSION['button']);

?>

<div class="tudo bg-dark d-flex justify-content-center align-items-center" style="width:100vw; height:100vh">

<div id="alerta" class="alerta bg-light d-flex justify-content-center align-items-center rounded" style="width:0; height:0; transition:ease 0.7s">
<h2 id="tit" class="text-center" style="opacity:0">Registro Atualizado com sucesso</h2>
</div>


</div>

<script>
    let alerta = document.getElementById('alerta');
    let titulo = document.getElementById('tit');
    setTimeout(() => {
        alerta.style.width='300px';
        alerta.style.height='300px';

        setTimeout(() => {
            titulo.style.opacity=1;


            setTimeout(() => {
                window.location.href="./produtos.php";
            }, 1500);

        }, 500);

    }, 2000);
</script>


<?php




 } else {
    
 }


}


require "./components/footer.php";