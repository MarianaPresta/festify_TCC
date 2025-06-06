<?php require "./components/header.php"; ?>
<?php require "./components/menu.php"; ?>
<?php require "./functions/dadoscaixa.php"; ?>



<div class="container mt-4">

<div class="row">

   

   <?=$telaFinalizacao;?>




    <div class="col-md-4 col-sm-12 d-flex justify-content-center mb-2">    
        <div class="card d-flex flex-direction justify-content-center align-items-center pt-4" style="width: 18rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
        </svg>
        <div class="card-body w-100">
            <h5 class="card-title">Vendas</h5>
            
            <?=$link?>
        </div>
        </div>
    </div>

</div>



    <div class="row ">
        <div class="col-md-4 col-sm-12 d-flex justify-content-center mb-2">

            <div class="card d-flex flex-direction justify-content-center align-items-center pt-4" style="width: 18rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16">
                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                </svg>
                <div class="card-body w-100">
                    <h5 class="card-title">Produtos</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="./produtos.php" class="btn btn-primary  w-100">Verificar</a>
                </div>
            </div>

        </div>
       
        <div class="col-md-4 col-sm-12 d-flex justify-content-center mb-2">

        <div class="card d-flex flex-direction justify-content-center align-items-center pt-4" style="width: 18rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
            </svg>
                <div class="card-body w-100">
                    <h5 class="card-title">Relatórios</h5>
                
                    <a href="relatorio.php" class="btn btn-primary btn-sm w-100">Verificar</a>
                </div>
            </div>

        </div> 

        <div class="col-md-4 col-sm-12 d-flex justify-content-center mb-2">

        <div class="card d-flex flex-direction justify-content-center align-items-center pt-4" style="width: 18rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z"/>
</svg>
                <div class="card-body w-100">
                    <h5 class="card-title">Retiradas</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="mesas.php" class="btn btn-primary btn-sm w-100">Verificar</a>
                </div>
            </div>

        </div>


    </div>
</div>

<?php require "./components/header.php"; ?>