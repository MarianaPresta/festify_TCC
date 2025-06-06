<?php require "./components/header.php";?>
<?php require "./components/menu2.php";?>

<?php require "./connection/conn.php";?>

<?php require "./functions/dadoscaixa.php"; ?>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-end">
            <a href="./index.php" class="btn btn-sm btn-dark">Voltar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            
            <?php require "./components/produtosvendas.php";?>
                
        </div>
        <div class="col-md-6">
            <?php require "./components/listadeitensprodutos.php"; ?>
        </div>
    </div>

</div>







<?php require "./components/footer.php";?>