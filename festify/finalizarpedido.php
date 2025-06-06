<style>
        /* Estilo da caixa de alerta */
        #custom-alert {
            display: none; /* Inicialmente escondido */
            position: fixed;
            top: 20%;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            border-radius: 8px;
            font-size: 18px;
            z-index: 9999;
            animation: fadeOut 3s forwards;
        }

        /* Animação para esconder o alerta após 3 segundos */
        @keyframes fadeOut {
            0% { opacity: 1; }
            100% { opacity: 0; display: none; }
        }
    </style>
<?php
require "./components/header.php";
require "./connection/conn.php";
$forma_pagamento = $_POST['forma_pagamento'];
$id_venda = $_POST['idvenda'];
$total = $_POST['valor_bruto'];
$status = $_POST['status'];

$update = "UPDATE venda set
          valor_bruto= ?,
          status = ?,
          forma_pagamento = ?
          WHERE id = ?  
        ";

   
$execUpdate = $pdo->prepare($update);
$execUpdate->bindParam(1, $total);
$execUpdate->bindParam(2, $status);
$execUpdate->bindParam(3, $forma_pagamento);
$execUpdate->bindParam(4, $id_venda);

$execUpdate->execute();
?>
<div class="container-fluid  d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="row w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4">
        
        <div id="custom-alert">
            Pedido finalizado com Sucesso
        </div>  

        </div>
    </div>
</div>
<script>
    // Função para mostrar o alerta personalizado
    window.addEventListener('load', function() {
        // Exibe o alerta
        var alertBox = document.getElementById('custom-alert');
        alertBox.style.display = 'block'; // Mostra o alerta

        // Após 3 segundos, o alerta desaparece automaticamente
        setTimeout(function() {
            alertBox.style.display = 'none'; // Esconde o alerta

            setTimeout(() => {
                window.location.href="./dashboard.php";
            }, 1000);

        }, 3000); // Tempo de 3 segundos
    });
</script>
<?php
require "./components/footer.php";
?>