<div class="menu py-3 bg-light" style="width:100%;">
    <?php
session_start();
$nome = $_SESSION['nome'];
$id_usuario = $_SESSION['id'];

if($nome == "" || $id_usuario == ""){
    header('location:login.php');
}


    ?>

    
    <div class="container ">
        <div class="row  d-flex align-items-center">
            <div class="col-md-12 d-flex justify-content-between align-items-center">

            <p class="d-flex align-items-center"><b><?=$nome?></b>, seja bem vindo  &nbsp;&nbsp;</p>

            <div class="bts">
                <button type="button" class="btn btn-secondary" id="btn_abrir">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg>
                </button> 

                <button type="button" class="btn btn-secondary" id="btn_fechar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                    </svg>
                </button>   


        <a href="deslogar.php" class="btn btn-danger  ms-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-escape" viewBox="0 0 16 16">
                <path d="M8.538 1.02a.5.5 0 1 0-.076.998 6 6 0 1 1-6.445 6.444.5.5 0 0 0-.997.076A7 7 0 1 0 8.538 1.02"/>
                <path d="M7.096 7.828a.5.5 0 0 0 .707-.707L2.707 2.025h2.768a.5.5 0 1 0 0-1H1.5a.5.5 0 0 0-.5.5V5.5a.5.5 0 0 0 1 0V2.732z"/>
            </svg>
        </a>

</div>
            </div>
        </div>
    </div>
    <div class="menu-list">
    <div class="btn">
        <button class="fechar_btn" id="btn_fechar">X</button>
    </div>
    <h5>Relatórios</h5>
    <ul>
        <li>Data</li>
        <li>Vendas</li>
        <li>Produtos</li>
    </ul>
    <hr width="100%">
    <h5>Verificar</h5>
    <ul>
        <li>Usuários</li>
        <li>Produtos</li>
        <li>Mesas</li>
        <li>Retiradas</li>
    </ul>
    <hr width="100%">

</div>
</div>
<script>
    let btn_abrir = document.getElementById('btn_abrir');
    let btn_fechar= document.getElementById('btn_fechar');
    let menu_list = document.querySelector('.menu-list');

    btn_abrir.addEventListener('click', ()=>{
        menu_list.style.left =0;
        btn_abrir.style.display="none";
        btn_fechar.style.display="block";
    })

    btn_fechar.addEventListener('click', ()=>{
        menu_list.style.left ="-400px";
        btn_abrir.style.display="block";
        btn_fechar.style.display="none";
    })
</script>