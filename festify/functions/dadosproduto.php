<?php

if(@$_SESSION['id'] == ""){
    $id = "";
} else {
    $id = $_SESSION['id'];
}

if(@$_SESSION['codigo_produto'] == ""){
    $codigo_produto = "";
} else {
    $codigo_produto = $_SESSION['codigo_produto'];
}

if(@$_SESSION['descricao_produto'] == ""){
    $descricao_produto = "";
} else {
    $descricao_produto = $_SESSION['descricao_produto'];
}

if(@$_SESSION['preco_custo'] == ""){
    $preco_custo = "";
} else {
    $preco_custo = $_SESSION['preco_custo'];
}

if(@$_SESSION['preco_venda'] == ""){
    $preco_venda= "";
} else {
    $preco_venda= $_SESSION['preco_venda'];
}


if(@$_SESSION['estoque_inicial'] == ""){
    $estoque_inicial = "";
} else {
    $estoque_inicial = $_SESSION['estoque_inicial'];
}



if(@$_SESSION['button'] == ""){
    $button = "Salvar";
    $action = "produtos_cadastrar.php";
} else {
    $button = "Atualizar";
    $action = $_SESSION['button'];
}

?>