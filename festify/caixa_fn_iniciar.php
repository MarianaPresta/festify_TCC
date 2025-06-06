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

$idusuario = $_POST['id_usuario'];
$saldo_abertura = $_POST['valorabertura'];
$timezone = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime('now', $timezone);
$id_caixa_operando = 1;
$data_abertura= $agora->format('Y-m-d');
$obs_abertura ="Lorem ipsun Lorem ipsunLorem ipsunLorem ipsun Lorem ipsun";
$script = "INSERT INTO caixa (id_usuario_abertura, 
                                id_caixa_operando, 
                                data_abertura, 
                                saldo_abertura, 
                                obs_abertura) 
VALUES (?,?,?,?,?)";

$inserirCaixa = $pdo->prepare($script);
$inserirCaixa->bindParam(1, $idusuario);
$inserirCaixa->bindParam(2, $id_caixa_operando);
$inserirCaixa->bindParam(3, $data_abertura);
$inserirCaixa->bindParam(4, $saldo_abertura);
$inserirCaixa->bindParam(5, $iobs_abertura);

$inserirCaixa->execute();

$pegar_ultimo_id = $pdo->lastInsertId();

session_start();

$_SESSION['caixa'] = $pegar_ultimo_id;

// header('location:dashboard.php');
?>
<div class="container-fluid  d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="row w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4">
        
        <div id="custom-alert">
            Iniciando Caixa 
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
                window.location.href="./index.php";
            }, 500);

        }, 3000); // Tempo de 3 segundos
    });
</script>

<?php

require "./components/footer.php";


