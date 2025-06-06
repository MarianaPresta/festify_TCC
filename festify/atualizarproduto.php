<?php


session_start();

require "./components/header.php";

require "./connection/conn.php";
$imagem = $_FILES['fotoproduto'];

if($imagem['name'] == ""){
    $codProduto = $_POST['codigo_produto'] ;
    $descricao_produto = $_POST['descricao_produto'];
    $preco_custo = $_POST['valor_custo'];
    $preco_venda = $_POST['valor_venda'];
    $qtde = $_POST['estoque_inicial'];
    $id = $_POST['id'];

    $up = "UPDATE produtos SET 
    codigo_produto = ?,
    descricao_produto = ?,
    preco_custo = ?,
    preco_venda = ?,
    estoque_inicial = ?
    WHERE id = ?";
    
    $exec = $pdo->prepare($up);

    $exec->bindParam(1,$codProduto, PDO::PARAM_INT); 
     $exec->bindParam(2, $descricao_produto, PDO::PARAM_STR);
     $exec->bindParam(3, $preco_custo, PDO::PARAM_STR);
     $exec->bindParam(4, $preco_venda, PDO::PARAM_STR);
     $exec->bindParam(5, $qtde, PDO::PARAM_INT);
     $exec->bindParam(6,$id, PDO::PARAM_INT);     
         
        
     $exePro = $exec->execute();
    
     if($exePro) {
        
        unset($_SESSION['codigo_produto']);
        unset($_SESSION['descricao_produto']);
        unset($_SESSION['preco_custo']);
        unset($_SESSION['preco_venda']);
        unset($_SESSION['estoque_inicial']);
        // unset($_SESSION['id']);
        unset($_SESSION['button']);
            
       

header('location:produtos.php');

?>

<div class="tudo bg-dark d-flex justify-content-center align-items-center" style="width:100vw; height:100vh">

<div id="alerta" class="alerta bg-light d-flex justify-content-center align-items-center rounded" style="width:0; height:0; transition:ease 0.7s">
<h2 id="tit" class="text-center" style="opacity:0">Registro Atualizado com sucesso</h2>
</div>


</div>

<script>
    // let alerta = document.getElementById('alerta');
    // let titulo = document.getElementById('tit');
    // setTimeout(() => {
    //     alerta.style.width='300px';
    //     alerta.style.height='300px';

    //     setTimeout(() => {
    //         titulo.style.opacity=1;


    //         setTimeout(() => {
    //              window.location.href="./produtos.php";
    //         }, 1500);

    //     }, 500);

    // }, 2000);
</script>


<?php


// header("location:./produtos.php");


 } else {
    
 }


}




require "./components/footer.php";