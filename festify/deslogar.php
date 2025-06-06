<?php session_start(); ?>
<?php session_destroy(); ?>

<?php include("./components/header.php"); ?>
<style>
    .progress{
        width:100%;
    }
    .progress-bar{
        width:0%;
        transition: all 3s;
    }

    .container {
    margin-top:300px;
    }
</style>


   <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6 d-flex flex-column ">
            <h5>Preparando...</h5>
        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-danger" ></div>
</div>
        </div>
    </div>
   </div>
<script>
   

    setTimeout(() => {
        let porcentagem = document.querySelector("h5");
        let progress_bar = document.querySelector(".progress-bar");
        progress_bar.style.width="100%";

        setTimeout(() => {
            porcentagem.textContent="Saindo do Sistema...";

            setTimeout(() => {
                window.location.href="login.php";
            }, 1500);

        }, 2000);

    }, 3000);


</script>

   <?php include("./components/footer.php"); ?>