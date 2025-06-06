<?php require "./components/header.php"; ?>
<?php require "./components//menu2.php"; ?>
<?php require "./connection/conn.php"; ?>
<?php require "./functions/dadosproduto.php"; ?>

<?php 
// if (@$_SESSION['delete'] == ""):
// $_SESSION['delete'] = "";
// else:
//     $_SESSION['delete']; 

// endif;
?>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-end">
           <a href="./index.php" class="btn btn-dark btn-sm">Voltar</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
        
            <form action="<?=$action?>" method="post" enctype="multipart/form-data">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" 
                id="codigo_produto" name="codigo_produto" placeholder="Código do Produto" value="<?=$codigo_produto?>">
                <label for="floatingInput">Código do Produto</label>
                </div>

                <div class="form-floating mb-3">
                <input type="text" class="form-control" 
                id="descricao" name="descricao_produto" placeholder="Descrição" value="<?=$descricao_produto?>">
                <label for="floatingInput">Descrição</label>
                </div>

                <div class="mb-3 form-floating">
                <select 
                class="form-select form-select-md mb-3" 
                aria-label="Large select example" name="fornecedor">
                    <option selected></option>
                    <option value="1">Fornecedor 1</option>
                    <option value="2">Fornecedor 2</option>
                    <option value="3">Fornecedor 3</option>
                </select>
                <label for="floatingInput">Fornecedor</label>
                </div>
                
                <div class="form-floating mb-3">
                <input type="text" class="form-control" 
                id="valor_custo"name="valor_custo" value="<?=$preco_custo?>"  placeholder="Valor Custo" >
                <label for="floatingInput">Valor custo</label>
                </div>
                
                <div class="form-floating mb-3">
                <input type="text" class="form-control" 
                id="valor_venda"  name="valor_venda" value="<?=$preco_venda?>" placeholder="Valor Venda">
                <label for="floatingInput">Valor venda </label>
                </div>

                <div class="form-floating mb-3">
                <input type="number" class="form-control" 
                id="estoque_inicial" placeholder="Qtde" 
                name="estoque_inicial" value="<?=$estoque_inicial?>">
                <label for="floatingInput">Qtde Inicial</label>
                </div>

                <div class="mb-3 form-floating">
                <select 
                class="form-select form-select-md mb-3" 
                aria-label="Aplicar o Desconto" name="nao_aplicar_desconto">
                    <option selected></option>
                    <option value="1">SIM</option>
                    <option value="2">NÃO</option>
                </select>
                <label for="floatingInput">Aplicar Desconto</label>
                </div>

                <div class=" mb-3">
                <label for="formFile" class="form-label ">Foto do produto</label>
                <input class="form-control" type="file" id="fotoproduto" name="fotoproduto">
                </div>
                    <input type="hidden" name="id" value="<?=$id?>">
                <div class="mb-3 d-flex justify-content-end">
                <a  class="btn btn-light" href="./functions/limparCamposprodutos.php">Limpar</a>
                <button type="submit" class="btn btn-primary ms-1"><?=$button;?></button>

                </div>

            </form>

        </div>

        <div class="col-md-8">

        <!-- <div id="alert_delete" class="alert alert-success" style="transition: ease-out 0.7s"><?=$_SESSION['delete'];?></div> -->

        <table class="table table-striped" id="tabela_produtos">
            <thead>
                <th>#</th>
                <th>Foto</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Qtde</th>
                <th>Ação</th>
            </thead>

     <?php 
        $select = $pdo->prepare('SELECT * FROM produtos');
        $select->execute();
        $listarProdutos = $select->fetchAll();  
      ?>       

            <tbody>
                <?php foreach($listarProdutos as $lp): ?>
                <tr>
                    <td><?=$lp['codigo_produto'];?></td>
                    <td>
                        <img src="<?= $lp['imagem'];?>" alt="coca-cola" width="50px" height="50px">
                    </td>
                    <td><?= $lp['descricao_produto'];?></td>
                    <td>R$ <?= $lp['preco_venda'];?></td>
                    <td><?= $lp['estoque_inicial'];?></td>
                    <td>
                        <a href="produtos_frm_atualizar.php?id=<?= $lp['id'];?>" class="btn btn-warning btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </a>

                        <a href="deletarproduto.php?id=<?= $lp['id'];?>" class="btn btn-danger btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                        </svg>
                        </a>
                    </td>
                </tr>

                <?php endforeach; ?>
               
            </tbody>
        </table>
        </div>
    </div>
</div>

<script>
    let alert_delete = document.getElementById('alert_delete');
    setTimeout(() => {
        alert_delete.style.display = "none";
    }, 2500);
</script>




<?php require "./components/footer.php"; ?>