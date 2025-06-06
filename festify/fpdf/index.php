<?php
include('./connect.php');
require('./fpdf/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        
        $this->SetFont('Arial', 'B', 12);
        
        $this->Cell(0, 10, 'Relatório de Vendas', 0, 1, 'C');
        $this->Ln(10);
    }

    function ColoredTable($header, $data)
    {
        $this->SetFillColor(200, 220, 255);
        $this->SetTextColor(0);
        $this->SetDrawColor(50, 50, 100);
        $this->SetLineWidth(0.3);
        $this->SetFont('Arial', 'B', 12);

       
        $w = array(40, 35, 40, 45); 
        for ($i = 0; $i < count($header); $i++) {
            $this->Cell($w[$i], 10, $header[$i], 1, 0, 'C', true);
        }
        $this->Ln();

        
        $this->SetFont('Arial', '', 12);
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(0);

        foreach ($data as $row) {
            $fill = false;
            for ($i = 0; $i < count($row); $i++) {
                $this->Cell($w[$i], 10, $row[$i], 1, 0, 'C', $fill);
            }
            $this->Ln();
            $fill = !$fill; 
        }
    }
}

$pdf = new PDF();
$pdf->AddPage();

$header = array('id_produto', 'nome_produto', 'quantidade', 'valor_unitario');

$consulta = "SELECT * FROM produtos";

$select = mysqli_query($conn, $consulta);

$id = [];
$desc = [];
$qtd = [];
$valor_unit = [];


while($rs = mysqli_fetch_array($select)){
 $id[] = $rs['id_produto'];
 $desc[] = $rs['nome_produto'];
 $qtd[] = $rs['quantidade'];
 $valor_unit[] = $rs['valor_unitario'];

}

$data = [
    $id,
    $desc,
    $qtd,
    $valor_unit
  
];

// Adiciona a tabela ao PDF
$pdf->ColoredTable($header, $data);

// Gera o PDF
$pdf->Output();
?>