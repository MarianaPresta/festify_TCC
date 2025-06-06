<?php
require "./connection/conn.php";
session_start();
$id_venda = $_SESSION['idvenda']; 
$idProd = $_GET['idprod'];
$quantidade = 1;

// Conculta do produto
$select = $pdo->prepare('SELECT * FROM produtos WHERE id = ?');
$select->bindParam(1, $idProd, PDO::PARAM_INT);
$select->execute();

$produto = $select->fetch(PDO::FETCH_ASSOC);
$preco_unit = $produto['preco_venda'];
$valor_total = $produto['preco_venda'] * $quantidade;

//Inserir dados no itens_vendas
$inserir = $pdo->prepare("INSERT INTO vendas_itens(id_vendas, id_produto, quantidade, valor_unitario, valor_bruto)
VALUES (?,?,?,?,?)");
$inserir->bindParam(1, $id_venda);
$inserir->bindParam(2, $idProd);
$inserir->bindParam(3, $quantidade);
$inserir->bindParam(4, $preco_unit);
$inserir->bindParam(5, $valor_total);

$inserir->execute();

 header('location:venda_frm_telavenda.php');











?>