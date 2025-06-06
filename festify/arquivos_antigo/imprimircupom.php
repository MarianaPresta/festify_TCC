<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir Automático</title>
    <style>
        /* Estilo simples para simular um cupom */
        body {
            font-family: 'Courier New', monospace;
        }
        #cupom {
            width: 250px;
            padding: 10px;
            border: 1px solid #000;
            margin: 20px auto;
        }
    </style>
</head>
<body>

<div id="cupom">
    <h3 style="text-align:center;">Loja XYZ</h3>
    <p id="conteudo">
        Produto A x 2 = R$ 30,00<br>
        Produto B x 1 = R$ 25,00<br>
        ************************<br>
        TOTAL: R$ 55,00<br>
        Obrigado pela compra!<br>
    </p>
</div>

<script>
    // Função para iniciar a impressão automaticamente
    window.onload = function() {
        window.print();  // Inicia a impressão automaticamente ao carregar a página
    };
</script>

</body>
</html>