<?php require "./components/header.php"; ?>

<?php require "./components/menu.php"; ?>

<?php require "./connection/conn.php";?>

<?php
$pegar_ultimo = "SELECT * FROM caixa WHERE status = ? ORDER BY id DESC LIMIT 1";
$fin = 1;
$execConsulta = $pdo->prepare($pegar_ultimo);
$execConsulta->bindParam(1,$fin);
$execConsulta->execute();

$listarCaixa = $execConsulta->fetchAll();

foreach ($listarCaixa as $listar) {
    
   $ValorAnteriorCaixa = $listar['valor_total'];
}


?>

<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-md-12 d-flex justify-content-end">
            <a href="./index.php" class="btn btn-dark btn-sm">Voltar</a>
        </div>
    </div>



    <div class="row mt-5 mb-3 d-flex justify-content-center">
        <div class="col-md-12 d-flex justify-content-center ">
            <h3>Iniciando Caixa</h3>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-3">
            
            <form action="caixa_fn_iniciar.php" method="post">
               
                <div class="mb-3">
                    <label for="valorabertura">Valor Inicial Caixa</label>
                    
                    <input type="text" name="valorabertura" id="valorabertura" class="form-control" >
                    <input type="hidden" name="id_usuario" id="id_usuario" value="<?=$id_usuario?>">
                    <div id="emailHelp" class="form-text ps-1">Valor do fechamento do caixa anterior.</div>
                    
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-dark btn-sm w-25">Iniciar</button>

                </div>
            </form>
        </div>
    </div>
</div>





<?php require "./components/footer.php"; ?>