<?php require "./components/header.php";?>
<?php require "./connection/conn.php"; ?>

<div class="container-fluid d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="row w-100 d-flex justify-content-center py-4">
        <div class="col-md-4" >
            <img src="./assets/festify.png" alt="Logo" class="d-block m-auto mb-3" style="width:70% ">
            <form action="./login_fn_fazerlogin.php" method="post">
                <div class="mb-3">
            <?php 
                $selectNomes = $pdo->prepare("SELECT * FROM usuarios");
                $selectNomes->execute();
                $listarNomes = $selectNomes->fetchAll();                 
             ?>
                    <select name="nome" id="nome" class="form-select" aria-label="Default select example">
                        <option selected>Escolha o nome</option>
                        <?php foreach ($listarNomes as $nome): ?>
                        <option value="<?=$nome['nome']?>"><?=$nome['nome']?></option>    
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" />
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm w-25" style="background-color: #5271ff;color:#fff">Logar</button>
                </div>
            </form>
            <a href="./login_frm_cadastro.php" class="text-dark">Fazer Cadastro.</a>
        </div>
    </div>
</div>


<?php require "./components/footer.php";?>
