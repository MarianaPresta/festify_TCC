<style>
    .container_produtos {
      display: flex;            /* Ativa o flexbox */
      flex-wrap: wrap;          /* Permite que os itens que não cabem na linha "quebrem" para a próxima linha */
      gap: 10px;                /* Espaçamento entre os itens */
    }

    .item {
      flex: 1 1 30%;            /* Flexibilidade: o item pode crescer e encolher, e terá 30% de largura inicial */
      background-color: lightblue;
      padding: 20px;
      text-align: center;
      border-radius: 5px;
      box-sizing: border-box;   /* Inclui o padding na largura total */
    }
  </style>

<?php
$scriptProdutos = $pdo->prepare('SELECT * FROM produtos');
$scriptProdutos->execute();
$listarProdutos = $scriptProdutos->fetchAll();
?>
 <div class="container_produtos">
<?php foreach ($listarProdutos as $produto): ?>

   
    <a href="item_fn_cadastrar.php?idprod=<?=$produto['id']?>" style="text-decoration:none;"
    class="item bg-light d-flex flex-column justify-content-center align-items-center">
        <img src="<?=$produto['imagem']?>" alt="<?=$produto['descricao_produto']?>" style="width:50px">
        <span class="" style="font-size:0.8rem;color:#000;text-decoration:none;"><?=$produto['descricao_produto']?></span>
        <span style="font-size:0.8rem;color:#000;">R$ <?=number_format($produto['preco_venda'],2,',','.')?></span>
    </a>
    
   
 

     

<?php endforeach; ?>
</div>