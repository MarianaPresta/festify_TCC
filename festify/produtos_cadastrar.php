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

$imagem = $_FILES['fotoproduto'];
$codigo_produto = $_POST['codigo_produto'];
$descricao_produto = $_POST['descricao_produto'];
$preco_custo = $_POST['valor_custo'];
$preco_venda = $_POST['valor_venda'];
$qtde = $_POST['estoque_inicial'];
$fornecedor = $_POST['fornecedor'];
$nao_aplicar_desconto = $_POST['nao_aplicar_desconto'];

$pasta = "produtos/";
$novoNome = md5(rand());
$extensao = pathinfo($imagem['name'], PATHINFO_EXTENSION);

$nomeNovoComOCaminho = "$pasta$novoNome.$extensao";

$mover =    move_uploaded_file($imagem['tmp_name'], 
            $nomeNovoComOCaminho);
if($mover){
   $script_inserir_dados_produto = "INSERT INTO 
   produtos (
            codigo_produto,
            descricao_produto,
            id_fornecedor,
            estoque_inicial,
            preco_custo,
            preco_venda, 
            nao_aplicar_desconto,
            imagem) VALUES (?,?,?,?,?,?,?,?)";
   $execScript = $pdo->prepare($script_inserir_dados_produto);
   $execScript->bindParam(1, $codigo_produto, PDO::PARAM_INT);
   $execScript->bindParam(2, $descricao_produto, PDO::PARAM_STR);
   $execScript->bindParam(3, $fornecedor);
   $execScript->bindParam(4, $qtde, PDO::PARAM_INT);
   $execScript->bindParam(5, $preco_custo,);
   $execScript->bindParam(6, $preco_venda,);
   $execScript->bindParam(7, $nao_aplicar_desconto, PDO::PARAM_INT);
   $execScript->bindParam(8, $nomeNovoComOCaminho, PDO::PARAM_STR);

   $execProduto = $execScript->execute();

   if($execProduto) {
    
   } else {
    echo "Deu errado";
   }
?>
<div class="container-fluid  d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="row w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4">
        
        <div id="custom-alert">
            Produto inserido com sucesso
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
                window.location.href="./produtos.php";
            }, 1000);

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
                window.location.href="./produtos.php";
            }, 1000);

        }, 3000); // Tempo de 3 segundos
    });
</script>

<?php
 }
?>


<?php require "./components/footer.php";?>














