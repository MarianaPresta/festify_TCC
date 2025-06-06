<style>
    /* Ocultar os botões de rádio */
input[type="radio"] {
    display: none;
}

/* Estilo da imagem, que funciona como o botão */
.radio-container {
    display: inline-block;
    margin: 10px;
    cursor: pointer;
}

/* Estilo da imagem */
.radio-image {
    width: 60px; /* Ajuste o tamanho da imagem conforme necessário */
    height: auto;
    border: 2px solid transparent;
    transition: border 0.3s, transform 0.3s;
}

/* Efeito quando o botão radio é selecionado */
input[type="radio"]:checked + .radio-image {
    border: 2px solid #007BFF; /* Cor da borda quando selecionado */
    transform: scale(1.1); /* Aumenta a imagem quando selecionada */
}

/* Efeito de hover para quando o usuário passa o mouse sobre a imagem */
.radio-container:hover .radio-image {
    transform: scale(1.05);
}

</style>

<table class="table table-striped" id="tabela_produtos">
            <thead>
           
                <th>Descrição</th>
                <th>Valor</th>
                <th>Qtde</th>
                <th>Subtotal</th>
                
            </thead>

            

     <?php 
$id_caixa = $_SESSION['caixa'];
$id_venda = $_SESSION['idvenda'];
$selectInnerJoin = "SELECT
    vendas_itens.id as iditens,
    vendas_itens.id_vendas as idvenda,
    vendas_itens.id_produto as idproduto,
    vendas_itens.obs_complementar,
    vendas_itens.quantidade as qtde_itens,
    vendas_itens.valor_unitario,
    vendas_itens.valor_bruto,
    vendas_itens.perc_desconto,
    vendas_itens.valor_desconto,
    vendas_itens.valor_liquido,
    vendas_itens.produto_devolvido,
    vendas_itens.data_hora_devolucao,
    vendas_itens.id_motivo_devolucao,
    vendas_itens.ficha_1a_impressao,
    vendas_itens.ficha_2a_impressao,
    vendas_itens.id_motivo_reimpressao,
    SUM(vendas_itens.quantidade) as subtotal_itens,
    vendas.id as vendaid,
    vendas.id_cliente as idcliente,
    vendas.id_usuario as idusuario,
    vendas.id_status_pedido,
    vendas.total_qtd_produtos,
    vendas.total_qtd_itens,
    vendas.valor_bruto as valorbruto_vendas,
    vendas.perc_desconto as percdesconto_vendas,
    vendas.valor_desconto as valordesconto_vendas,
    vendas.valor_liquido as valorliquido_vendas,
    vendas.observacao,
    vendas.id_caixa,
    vendas.id_empresa,
    produtos.id as produtoid,
    produtos.codigo_produto,
    produtos.descricao_produto,
    produtos.estoque_inicial,
    produtos.estoque_atual,
    produtos.preco_custo as precocusto_produto,
    produtos.preco_venda as precovenda_produto,
    produtos.nao_aplicar_desconto,
    produtos.ativo
    FROM ((vendas_itens
    INNER JOIN vendas ON vendas_itens.id_vendas = vendas.id)
    INNER JOIN produtos ON vendas_itens.id_produto = produtos.id) WHERE vendas.id = ? AND vendas.id_caixa = ? GROUP BY vendas_itens.id_produto";



        $select = $pdo->prepare($selectInnerJoin);
        $select->bindParam(1,$id_venda, PDO::PARAM_INT);
        $select->bindParam(2,$id_caixa, PDO::PARAM_INT);
        $select->execute();
        $listarItens = $select->fetchAll();  

        $resultado = 0;
        $qtdTotal = 0;
        
      ?>       

            <tbody>
                <?php foreach($listarItens as $itens): ?>
                    <?php $totalvalorcomitens = $itens['subtotal_itens'] * $itens['valor_bruto']; ?>

                    <?php $totalqtdcomitens = $itens['subtotal_itens'] ; ?>
                    
                <tr>
                    <td><?= $itens['descricao_produto'];?></td>
                    <td>R$ <?= number_format($itens['precovenda_produto'],2,'.',',');?></td>
                    <td>
                        <a href="item_fn_exluiritem.php?idprod=<?=$itens['produtoid']?>&idvenda=<?=$itens['vendaid']?>" class="btn btn-sm btn-dark me-2">-</a>
                        <?= $itens['subtotal_itens'];?>
                        <a href="item_fn_cadastrar.php?idprod=<?=$itens['produtoid']?>" class="btn btn-sm btn-sm btn-dark ms-2">+</a>
                    </td>
                    <td>R$ <?= number_format($totalvalorcomitens,2,'.',',') ;?></td>
                  
                </tr>

                <?php $resultado +=  $totalvalorcomitens ;?>

                <?php  $qtdTotal += $itens['subtotal_itens']; ?>

                <?php endforeach; ?>

                </tbody>
            </table>

            
            <table class="table table-striped " id="tabela_total " style="margin-top:10vh; ">
                <thead>
                    <th> TOTAL
                    <td>R$ <?= number_format($resultado,2,'.',',') ;?></td>
                    </th>

                    <th> QTD TOTAL
                    <td><?= number_format($qtdTotal) ;?></td>
                    </th>

                </thead>
            </table>
               
            

<?php
$selecionartotal = "SELECT 
                        venda.id as idvenda,
                        venda.total,
                        venda.id_caixa,
                        venda.status,
                        item_venda.id as iditemvenda,
                        item_venda.produto_id,
                        item_venda.venda_id,
                        SUM(item_venda.quantidade) as totalQuantidade,
                        item_venda.preco_unitario,
                        SUM(item_venda.subtotal) as totaldoSubtotal
                        FROM venda
                        INNER JOIN item_venda ON item_venda.venda_id = venda.id 
                        WHERE item_venda.venda_id = ? ";



?>


      
       

<div class="container">
    <div class="row">
        <form action="finalizarpedido.php" method="post" class="d-flex  justify-content-around align-items-center">

            <div class="col-md-8">
            
                <div class="mb-3">

                 <!--<label class="radio-container">
                    <input type="radio" name="forma_pagamento" value="Cartão de Débito">
                    <img src="./formapagamento/metodo-de-pagamento.png" alt="Cartão-débito" class="radio-image">
                </label>

               <label class="radio-container">
                    <input type="radio" name="forma_pagamento" value="Cartão de Crédito">
                    <img src="./formapagamento/cartao-de-credito.png" alt="Cartão-crédito" class="radio-image">
                </label>
    
                <label class="radio-container">
                    <input type="radio" name="forma_pagamento" value="dinheiro">
                    <img src="./formapagamento/dinheiro.png" alt="Dinheiro" class="radio-image">
                </label>
    
                <label class="radio-container">
                    <input type="radio" name="forma_pagamento" value="Pix">
                    <img src="https://user-images.githubusercontent.com/741969/99538133-492fe280-298b-11eb-81a2-66779343e064.png"
                     alt="Pix" class="radio-image" >
                </label>-->


                     <select class="form-select" name="forma_pagamento"  aria-label="Formas de Pagamento">
                        <option selected>Escolha a forma de Pagamento</option>
                        <option value="Cartão de Crédito">Cartão de Crédito</option>
                        <option value="Cartão de Débito">Cartão de Débito</option>
                        <option value="Pix">Pix</option>
                        <option value="Dinheiro">Dinheiro</option>
                    </select> 
                    <input type="hidden" name="idvenda" value="<?=$id_venda;?>">
                    <input type="hidden" name="totalValor" value="<?=$totalValor;?>">
                    <input type="hidden" name="status" value="finalizado">
                </div>
            
            </div>

            <div class="col-md-3 mb-3">
                <button type="submit" class="btn btn-primary btn-sm">Finalizar Pedido</button>
            </div>
        </form>
    </div>
</div>
