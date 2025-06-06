<?php
require "./connection/conn.php";
session_start();
$timezone = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime('now', $timezone);
$dataFormatada = $agora->format('Y-m-d');

// tabela com mais campos
$id_cliente = 1; // padrão 1
$id_usuario = $_SESSION['id'];
$id_empresa = 1; // padrão 1
$id_status_pedido = 1; // 1 - aberto / 2 - fechado / 3 - Cancelado -> padrão 1
$id_caixa = $_GET['id'];

//Script Para inserção
$inserirVenda = "INSERT INTO vendas (id_usuario,id_caixa) VALUES (?,?)";



$inicioarVenda = $pdo->prepare($inserirVenda);

$inicioarVenda->bindParam(1, $id_usuario);
$inicioarVenda->bindParam(2, $id_caixa);

$inicioarVenda->execute();

$pegarIdVenda = $pdo->lastInsertId();

$_SESSION['idvenda'] = $pegarIdVenda;

header('location:venda_frm_telavenda.php');

?>




