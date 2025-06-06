<?php require "./components/header.php";?>
<?php require "./connection/conn.php"; ?>

<div class="container-fluid d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="row w-100 d-flex justify-content-center py-4">
        <div class="col-md-4">
            
            <form action="./login_fn_fazercadastro.php" method="post">
                <div class="mb-3">
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome Completo" />
                </div>

                <div class="mb-3">
  <?php
  $selectNivel = $pdo->prepare("SELECT * FROM usuarios_nivel");
  $selectNivel->execute();

  $listar_niveis = $selectNivel->fetchAll();
  
  ?>
                    <select class="form-select" name="nivel" aria-label="Escolha o nível">           
                        <?php foreach ($listar_niveis as $nivel) : ?>
                        <option value="<?=$nivel['id']?>"><?=$nivel['descricao']?></option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="mb-3">
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" />
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm w-25" style="background-color: #5271ff;color:#fff">Cadastrar</button>
                </div>
            </form>
            <a href="./login.php" class="text-dark">Fazer Login.</a>
        </div>
    </div>
</div>


<?php require "./components/footer.php";?>
