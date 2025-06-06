<?php

require "./components/header.php"; 
require "./components//menu.php"; 
require "./connection/conn.php"; 
require "./functions/dadosproduto.php"; 
require "./connection/conn.php";
session_start();
$id = $_GET['id'];

$delete = $pdo->prepare('DELETE  FROM produtos WHERE id = ?');
$delete->bindParam(1, $id, PDO::PARAM_INT);
$delete->execute();
$_SESSION['delete'] = "Produto excluído com sucesso";

header('location:produtos.php');
?>