<?php require "./components/header.php"; ?>
<?php require "./components//menu2.php"; ?>
<?php require "./connection/conn.php"; ?>
<?php require "./functions/dadosproduto.php"; ?>


<div class="container" >
<h1>Relatório de Funcionários</h1>
    <table class= 'table table-striped'>
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Estoque</th>
                
                  
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->query("SELECT * FROM produtos");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>{$row['descricao_produto']}</td>";
                echo "<td>{$row['estoque_inicial']}</td>";     
                   
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="gerar_pdf.php" class="btn btn-primary">Gerar Relatorio</a>
    </div> 
    
    