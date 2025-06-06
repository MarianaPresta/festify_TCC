<?php
require 'vendor/autoload.php';
// require 'conexao.php';
require "./connection/conn.php"; 



$html = "
<style>
    body {
        font-family: Arial, sans-serif;
        color: #333;
    }
    h1 {
        text-align: center;
        color: #0056b3;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th {
        background-color: #007BFF;
        color: white;
        padding: 8px;
        text-align: left;
    }
    td {
        border: 1px solid #ccc;
        padding: 8px;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
";

use Dompdf\Dompdf;

$path =  $_SERVER['DOCUMENT_ROOT'] .'/festify.png';

$html .= "<img src='$path' width='20%' >";
$html .= "<h1>Relatório de Produtos</h1>";
$html .= "<table class>";
$html .= "<thead>";
$html .= "<tr>
            <th>Descricao</th>
            <th>Estoque</th>

        </tr>
";



$stmt = $pdo->query("SELECT * FROM produtos");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $html .= "<td>{$row['descricao_produto']}</td>";
    $html .= "<td>{$row['estoque_inicial']}</td>";
    $html .= "</tr>";
}
$html .= "<thead>";
$html .= "</table>";


$dompdf = new Dompdf();
$dompdf->set_option('isRemoteEnabled', true);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("relatorio_produtos.pdf", ["Attachment" => true]); // false = abre no navegador


header('location:relatorio.php');


?>



    
