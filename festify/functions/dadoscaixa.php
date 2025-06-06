<?php


@$_SESSION['caixa'];

if (@$_SESSION['caixa'] == ""){
    ?>

    <?php
    $telaFinalizacao = '
     <div class="col-md-4 col-sm-12 d-flex justify-content-center mb-2">    
        <div class="card d-flex flex-direction justify-content-center align-items-center pt-4" style="width: 18rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
        </svg>
        <div class="card-body w-100">
            <h5 class="card-title">Caixa</h5>
            
           <a href="caixa_frm_iniciar.php" class="btn btn-primary  w-100">iniciar</a>
        </div>
        </div>
    </div>
    ';
    $link = '<p class="alert alert-info">Iniciar Caixa</p>';
    $linkF = '<p class="alert alert-warning">Iniciar Caixa</p>';
    // $linkcaixa = '<a href="formulariocaixa.php" class="btn btn-primary  w-100">iniciar</a>';
} else {
    $idparavendaCaixa = $_SESSION['caixa'];
    $telaFinalizacao = '
     <div class="col-md-4 col-sm-12 d-flex justify-content-center mb-2">    
        <div class="card border border-danger d-flex flex-direction justify-content-center align-items-center pt-4" style="width: 18rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" 
        fill="currentColor" class="bi bi-wallet-fill" viewBox="0 0 16 16" style="color:#555">
  <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542s.987-.254 1.194-.542C9.42 6.644 9.5 6.253 9.5 6a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2z"/>
  <path d="M16 6.5h-5.551a2.7 2.7 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5s-1.613-.412-2.006-.958A2.7 2.7 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5z"/>
</svg>
        <div class="card-body w-100">
            <h5 class="card-title">Finalizar Caixa</h5>
            
           <a href="finalizarcaixa.php?id='.$idparavendaCaixa.'" class="btn btn-secondary btn-sm w-100" >Finalizar</a>
        </div>
        </div>
    </div>
    ';
    
   
    $link= '<a href="venda_fn_iniciar.php?id='.$idparavendaCaixa.'" class="btn btn-primary w-100" >Iniciar</a>';
    // $linkF= '<a href="finalizarcaixa.php?id='.$idparavenda.'" class="btn btn-secondary btn-sm w-100" >Finalizar</a>';
    $linkcaixa ='<p class="alert alert-info">Caixa Iniciado</p>';
}




?>