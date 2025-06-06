<?php
require "./connection/conn.php";
$idprod = $_GET['idprod'];
$idvenda = $_GET['idvenda'];

$consultar = "SELECT * FROM vendas_itens WHERE id_vendas = ? AND id_produto = ? ORDER BY id DESC LIMIT 1 ";

$consultaritem = $pdo->query($consultar);

$consultaritem->bindParam(1, $idvenda, PDO::PARAM_INT);
$consultaritem->bindParam(2, $idprod, PDO::PARAM_INT);

$consultaritem->execute();

$listaritens = $consultaritem->fetchAll();

foreach ($listaritens as $listar) {
   $ultimo_id_item =   $listar['id'];
}

$delete =$pdo->prepare("DELETE FROM vendas_itens WHERE id = ?");
$delete->bindParam(1, $ultimo_id_item, PDO::PARAM_INT);
$delete->execute();
header('location:venda_frm_telavenda.php');