<?php


require "./components/header.php";
require "./connection/conn.php";
session_start();
$id = $_GET['id'];

$select = "SELECT * FROM produtos WHERE id = ?";

$consulta = $pdo->prepare($select);
$consulta->bindParam(1,$id,PDO::PARAM_INT);
$consulta->execute();

$produto = $consulta->fetch(PDO::FETCH_ASSOC);

$_SESSION['codigo_produto']     = $produto['codigo_produto'];
$_SESSION['descricao_produto']  = $produto['descricao_produto'];
$_SESSION['preco_custo']        = $produto['preco_custo'];
$_SESSION['preco_venda']        = $produto['preco_venda'];
$_SESSION['estoque_inicial']    = $produto['estoque_inicial'];
$_SESSION['button']             ="atualizarproduto.php";
$_SESSION['id']                 =$id;



header('location:produtos.php');

require "./components/footer.php";

?>