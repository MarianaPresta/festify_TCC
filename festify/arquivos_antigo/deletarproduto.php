<?php
session_start();
require "./connection/conn.php";
$id = $_GET['id'];

$delete = $pdo->prepare('DELETE  FROM produtos WHERE id = ?');
$delete->bindParam(1, $id, PDO::PARAM_INT);
$delete->execute();
$_SESSION['delete'] = "Produto excluído com sucesso";

header('location:produtos.php');
?>