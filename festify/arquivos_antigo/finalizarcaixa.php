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
session_start();
$finalizada = 1;
$id = $_GET['id'];


$id_usuario     = $_SESSION['id'];
$email_usuario  = $_SESSION['email'];
$nome_uuario    = $_SESSION['nome'];

$id_caixa = $_SESSION['caixa'];

$consultaVendas = $pdo->prepare("SELECT SUM(total) as total_vendas FROM venda WHERE id_caixa = ?");
$consultaVendas->bindParam(1, $id_caixa);

$consultaVendas->execute();

$listarVendas = $consultaVendas->fetchAll();


foreach ($listarVendas as $vendas) {
     $totalVendas =  $vendas['total_vendas'];
    
}






$script = "UPDATE caixa set 
                    finalizada = ?,
                    id_usuario_fechamento = ?,
                    valor_total = ?

 WHERE id = ?";

$final = $pdo->prepare($script);
$final->bindParam(1, $finalizada, PDO::PARAM_INT);
$final->bindParam(2, $id_usuario, PDO::PARAM_INT);
$final->bindParam(3, $totalVendas);
$final->bindParam(4, $id, PDO::PARAM_STR);

$exec = $final->execute();

if ($exec){

    unset($_SESSION['caixa']);

    ?>
<div class="container-fluid  d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="row w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4">
        
        <div id="custom-alert">
            Caixa finalizado com sucesso
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
            }, 500);

        }, 3000); // Tempo de 3 segundos
    });
</script>
    <?php
} else {
    ?>
<div class="container-fluid  d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="row w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4">
        
        <div id="custom-alert">
            Ops ... Algo deu errado
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
            }, 500);

        }, 3000); // Tempo de 3 segundos
    });
</script>

<?php

}





require "./components/footer.php";

?>