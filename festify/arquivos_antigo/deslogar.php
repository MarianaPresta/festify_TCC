<?php
require "./components/header.php";
require "./connection/conn.php";
session_start();

$id_usuario     = $_SESSION['id'];
$email_usuario  = $_SESSION['email'];
$nome_uuario    = $_SESSION['nome'];

unset($_SESSION['nome']);
unset($_SESSION['email']);
unset($_SESSION['id']);

?>
<div class="container-fluid  d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="row w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-success" style="width: 0%"> Saindo do sistema ...</div>
                
            </div>
        </div>
    </div>
</div>
<script>
    let pro = document.querySelector('.progress-bar');
    setTimeout(() => {
        pro.style.width="30%";

        setTimeout(()=>{
            pro.style.width="70%";  

            setTimeout(()=>{
            pro.style.width="100%";

            setTimeout(()=>{
            window.location.href="index.php";
        }, 2000);

            }, 2000);


        }, 2000);

    }, 2000);
</script>




<?php
require "./components/footer.php";
